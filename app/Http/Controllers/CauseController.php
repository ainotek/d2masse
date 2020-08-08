<?php

namespace App\Http\Controllers;

use App\Http\Requests\CauseValidateRequest;
use App\Models\Cause;
use App\Models\Parish;
use Illuminate\Http\Request;

class CauseController extends Controller
{
    public function index()
    {
        $causes = Cause::all();
        $parishes = Parish::all();

        return view('admin.pages.causes.index', compact('causes', 'parishes'));
    }

    public function edit($id)
    {
        try {
            $cause = Cause::find($id);
            $parishes = Parish::all();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return view('admin.pages.causes.edit', compact('cause', 'parishes'));
    }

    public function destroy($id)
    {
        try {
            $cause = Cause::find($id);
            $cause->delete();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->back();
    }

    public function store(CauseValidateRequest $request)
    {
        $data = $request->validated();

        try {
            Cause::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('causes.index');
    }

    public function update(CauseValidateRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $cause = Cause::find($id);
            $cause->update($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
        return redirect()->route('causes.index');
    }
}
