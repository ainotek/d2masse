<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Parish;
use App\Models\Parishioner;
use App\services\ParishionerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ParishionerController extends Controller
{
    public function index()
    {
        $parishioners = Parishioner::with('parish')->get();
        $cities = City::all();
        $parishes = Parish::all();
        //dd($parishioners);
        return view('admin.pages.parishioners.parishionersIndex', compact(['parishioners', 'cities', 'parishes']));
    }

    public function create()
    {
        $cities = City::all();
        $parishes = Parish::all();
        return view('admin.pages.parishioners.parishionersCreate', compact(['cities', 'parishes']));
    }

    public function store(Request $request, ParishionerService $parishionerService)
    {
        $response = $parishionerService->store($request);
        if ($request->wantsJson() && $request->is('api/*')) {
            return response()->json($response, 201);
        }
        return redirect()->route("parishioners.index");
    }
}
