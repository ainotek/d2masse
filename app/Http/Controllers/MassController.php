<?php

namespace App\Http\Controllers;

use App\Http\Requests\MassValidateRequest;
use App\Models\Mass;
use App\Models\Parish;
use Illuminate\Http\Request;

class MassController extends Controller
{
    public function index()
    {
        $masses = Mass::all();
        $parishes = Parish::all();

        return view('admin.pages.masses.index', compact('masses', 'parishes'));
    }

    public function edit($id)
    {
        try {
            $mass = Mass::findOrFail($id);
            $parishes = Parish::all();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return view('admin.pages.masses.edit', compact('mass', 'parishes'));
    }

    public function store(MassValidateRequest $request)
    {
        $data = $request->validated();
        try {
            Mass::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('masses.index');
    }

    public function update(MassValidateRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $mass = Mass::find($id);
            $mass->update($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('masses.index');
    }

    public function destroy($id)
    {
        try {
            $mass = Mass::findOrFail($id);
            $mass->delete();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->back();
    }
}
