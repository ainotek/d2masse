<?php

namespace App\Http\Controllers;

use App\Models\Mass;
use App\Models\Parish;
use App\Models\Parishioner;
use App\Models\Mass_request;
use App\Models\Request_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParishionerRequestController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (empty($user->parish_id)){
            $masses = Mass::with( 'massRequests', 'parish', 'massRequests.parishioner')->get();
        }else{
            $masses = Mass::where('parish_id', $user->parish_id)->with( 'massRequests', 'parish', 'parishioner')->get();
        }
        //dd($masses);
        return view('admin.pages.requests.index', compact('masses'));
    }

    public function create()
    {
        $parishioners = Parishioner::all();
        $requestsType = Request_type::all();
        $parishes = Parish::all();
        $masses = Masse::all();

        return view('admin.pages.requests.create', compact('parishioners', 'requestsType', 'parishes', 'masses'));
    }

    public function store(Request $request)
    {
        $data = $request->only( "parishioner_id", "receiver", "request_type_id", "masse_id", "message");
        try {
            $parishionerRequest = Mass_request::create($data);
            //dd($parishionerRequest);
            if ($request->wantsJson() && $request->is('api/*')) {
                return response()->json($parishionerRequest, 201);
            }
            $request->session()->flash('message', "Demande ajouté avec succès");
            $request->session()->flash('alert-class', 'alert-success');

            return redirect()->route("parishioners-request.index");
        } catch (\Exception $e) {
            dd($e);

        }
    }

    public function getAllByParish(Request $request)
    {
        $parishioners = Parishioner::where('parish_id', $request->value)->orderBy('first_name', 'asc')->get();
        $masses = Mass::where('parish_id', $request->value)->orderBy('start_day', 'asc')->get();

        return response()->json($parishioners, $masses);
    }

    public function getMasses($id)
    {
        $masses = Mass::where('parish_id', $id)->orderBy('start_day', 'asc')->get()->toArray();
        return response()->json($masses, 200);
    }
}
