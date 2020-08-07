<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityValidateRequest;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $countries = Country::all();

        return view('admin.pages.cities.index', compact('cities', 'countries'));
    }

    public function edit($id)
    {
        try {
            $city = City::find($id);
            $countries = Country::all();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return view('admin.pages.cities.edit', compact('city', 'countries'));
    }

    public function store(CityValidateRequest $request)
    {
        $data = $request->validated();

        try {
            City::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('cities.index');
    }

    public function update(CityValidateRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $city = City::find($id);
            $city->update($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('cities.index');
    }

    public function destroy($id)
    {
        try {
            $city = City::find($id);
            $city->delete();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->back();
    }
}
