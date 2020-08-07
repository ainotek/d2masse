<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParishValidateRequest;
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

    public function store(ParishValidateRequest $request)
    {
        $data = $request->validated();

        try {
            Parish::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('parishes.index');
    }

    public function update(ParishValidateRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $parish = Parish::findOrFail($id);
            $parish->update($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('parishes.index');
    }

    public function edit($id)
    {
        try {
            $parish = Parish::findOrFail($id);
            $dioceses = Diocese::all();
            $cities = City::all();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return view('admin.pages.parishes.edit', compact('parish', 'dioceses', 'cities'));
    }

    public function destroy($id)
    {
        try {
            $parish = Parish::findOrFail($id);
            $parish->delete();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->back();
    }
}
