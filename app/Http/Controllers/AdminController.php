<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminValidateRequest;
use App\Http\Requests\UpdateAdminValidateRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();

        return view('admin.pages.admins.index', compact('admins'));
    }

    public function edit($id)
    {
        try {
            $admin = Admin::find($id);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return view('admin.pages.admins.edit', compact('admin'));
    }

    public function store(AdminValidateRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        try {
            Admin::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('admins.index');
    }

    public function update(UpdateAdminValidateRequest $request, $id)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        try {
            $city = Admin::find($id);
            $city->update($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('admins.index');
    }

    public function destroy($id)
    {
        try {
            $city = Admin::find($id);
            $city->delete();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->back();
    }
}
