<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateParishionerRequest;
use App\Models\City;
use App\Models\Masse;
use App\Models\Parish;
use App\Models\Parishioner;
use App\services\ParishionerService;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class ParishionerController extends Controller
{
    public function index()
    {
        $parishioners = Parishioner::with('parish')->orderByDesc('created_at')->get();
        $cities = City::all();
        $parishes = Parish::all();
        //dd($parishioners);
        return view('admin.pages.parishioners.index', compact(['parishioners', 'cities', 'parishes']));
    }

    public function create()
    {
        $cities = City::all();
        $parishes = Parish::all();

        return view('admin.pages.parishioners.create', compact('cities', 'parishes'));
    }

    public function store(Request $request, ParishionerService $parishionerService)
    {
        $response = $parishionerService->store($request);
        if ($request->wantsJson() && $request->is('api/*')) {
            return response()->json($response, 201);
        }
        $request->validate([
            'email' => 'required|email|min:6|max:60|unique:parishioners',
            'first_name' => 'required|string|min:2|max:60',
            'last_name' => 'required|string|min:2|max:120',
            'phone' => 'required|string|min:8|max:14',
            'birthday' => 'required|date',
            'gender' => 'required|string|max:1',
            'parish_id' => 'required|exists:parishes,id',
            'password' => 'required|min:8|confirmed'
        ]);
        //dd($request->all());
        $data = $request->only(
                    "first_name", "last_name", "email", "phone",
                    "birthday", "gender", "parish_id", "password",
                    "is_baptized", "is_confirmed", "is_catechumen"
                );

        $request->has('is_baptized') ? $data["is_baptized"] = true : $data["is_baptized"] = false;
        $request->has('is_confirmed') ? $data["is_confirmed"] = true : $data["is_confirmed"] = false;
        $request->has('is_catechumen') ? $data["is_catechumen"] = true : $data["is_catechumen"] = false;
        $password = Hash::make($data["password"]);

        //dd($data);
        $parishioner = Parishioner::create([
            "first_name" => strtolower($data["first_name"]),
            "last_name" => strtolower($data["last_name"]),
            "email" => strtolower($data["email"]),
            "password" => $password,
            "phone" => $data["phone"],
            "is_baptized" => $data["is_baptized"],
            "is_confirmed" => $data["is_confirmed"],
            "is_catechumen" => $data["is_catechumen"],
            "birthday" => $data["birthday"],
            "gender" => $data["gender"],
            "parish_id" => 1,
            "city_id" => 1,
        ]);

        $request->session()->flash('message', "Paroission ajouté avec succès");
        $request->session()->flash('alert-class', 'alert-success');


        return redirect()->route("parishioners.index");
    }

    public function edit($id)
    {
        try {
            $cities = City::all();
            $parishes = Parish::all();
            $parishioner = Parishioner::findOrFail($id);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return view('admin.pages.parishioners.edit', compact('cities', 'parishes', 'parishioner'));
    }

    public function update(UpdateParishionerRequest $request, $id)
    {
        $data = $request->validated();
        $request->has('is_baptized') ? $data["is_baptized"] = true : $data["is_baptized"] = false;
        $request->has('is_confirmed') ? $data["is_confirmed"] = true : $data["is_confirmed"] = false;
        $request->has('is_catechumen') ? $data["is_catechumen"] = true : $data["is_catechumen"] = false;
        if ($data["password"]) {
            $data['password'] = Hash::make($data['password']);
        }

        try {
            $parishioner = Parishioner::findOrFail($id);
            $parishioner->update($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        $request->session()->flash('message', "Les informations du paroissions ont bien été modifiés.");
        $request->session()->flash('alert-class', 'alert-success');

        return redirect()->route('parishioners.index');
    }

    public function destroy($id)
    {
        try {
            $parishioners = Parishioner::findOrFail($id);
            $parishioners->delete();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->back()->with('success', 'Paroissien supprimé avec succès.');
    }
}
