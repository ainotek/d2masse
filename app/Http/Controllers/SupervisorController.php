<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminValidateRequest;
use App\Http\Requests\UpdateAdminValidateRequest;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SupervisorController extends Controller
{
    public function index()
    {
        $supervisors = Supervisor::all();
        return view('admin.pages.supervisors.index', compact('supervisors'));
    }

    public function edit($id)
    {
        try {
            $supervisor = Supervisor::find($id);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return view('admin.pages.supervisors.edit', compact('supervisor'));
    }

    public function store(AdminValidateRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        try {
            Supervisor::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('supervisors.index');
    }

    public function update(UpdateAdminValidateRequest $request, $id)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        try {
            $city = Supervisor::find($id);
            $city->update($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('supervisors.index');
    }

    public function destroy($id)
    {
        try {
            $city = Supervisor::find($id);
            $city->delete();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->back();
    }
}
