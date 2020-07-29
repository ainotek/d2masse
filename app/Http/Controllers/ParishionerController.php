<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Parish;
use App\Models\Parishioner;
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
        return view('admin.pages.parishionersIndex', compact(['parishioners', 'cities', 'parishes']));
    }

    public function store(Request $request)
    {
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
        $data = $request->only("first_name", "last_name", "email", "phone",
            "birthday", "gender", "parish_id", "password", "is_baptized", "is_confirmed", "is_catechumen");
        $request->has('is_baptized') ? $data["is_baptized"] = true : $data["is_baptized"] = false;
        $request->has('is_confirmed') ? $data["is_baptized"] = true : $data["is_confirmed"] = false;
        $request->has('is_catechumen') ? $data["is_baptized"] = true : $data["is_catechumen"] = false;
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
        return redirect()->route("parishioners.index");
    }
}
