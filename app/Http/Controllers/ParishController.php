<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Diocese;
use App\Models\Parish;
use Illuminate\Http\Request;

class ParishController extends Controller
{
    public function index()
    {
        $parishes = Parish::with('diocese', 'parishioners')->get();

        return view('admin.pages.parishes.index', compact('parishes'));
    }

    public function create()
    {
        $dioceses = Diocese::all();
        $cities = City::all();

        return view('admin.pages.parishes.create', compact('dioceses', 'cities'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'diocese_id' => 'required',
            'registration' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city_id' => 'required',
        ]);

        try {
            Parish::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('parishes.index');
    }
}
