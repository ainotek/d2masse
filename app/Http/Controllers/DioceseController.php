<?php

namespace App\Http\Controllers;

use App\Models\Diocese;
use Illuminate\Http\Request;

class DioceseController extends Controller
{
    public function index()
    {
        $dioceses = Diocese::orderByDesc('created_at')->get();

        return view('admin.pages.dioceses.index', compact('dioceses'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'location' => 'required|min:3'
        ]);

        try {
            Diocese::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('dioceses.index');
    }

    public function edit($id)
    {
        $diocese = Diocese::find($id);

        return view('admin.pages.dioceses.edit', compact('diocese'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'location' => 'required|min:3'
        ]);

        try {
            $diocese = Diocese::findOrFail($id);
            if ($diocese) {
                $diocese->update($data);
            }
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('dioceses.index');
    }

    public function destroy($id)
    {
        try {
            $diocese = Diocese::findOrFail($id);
            if ($diocese) {
                $diocese->delete();
            }
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('dioceses.index');
    }
}
