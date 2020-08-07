<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryValidateRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return view('admin.pages.countries.index', compact('countries'));
    }

    public function edit($id)
    {
        try {
            $country = Country::find($id);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return view('admin.pages.countries.edit', compact('country'));
    }

    public function store(CountryValidateRequest $request)
    {
        $data = $request->validated();

        try {
            Country::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('countries.index');
    }

    public function update(CountryValidateRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $country = Country::find($id);
            $country->update($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('countries.index');
    }

    public function destroy($id)
    {
        try {
            $country = Country::find($id);
            $country->delete();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->back();
    }
}
