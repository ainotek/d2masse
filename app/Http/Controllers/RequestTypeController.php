<?php

namespace App\Http\Controllers;

use App\Models\Request_type;
use Illuminate\Http\Request;

class RequestTypeController extends Controller
{
    public function index()
    {
        $requestsType = Request_type::orderByDesc('created_at')->get();

        return view('admin.pages.requestTypes.index', compact('requestsType'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'description' => 'nullable|min:3|max:255',
        ]);

        try {
            Request_type::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('request-types.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'description' => 'nullable|min:3|max:255',
        ]);

        try {
            $requestType = Request_type::findOrFail($id);
            $requestType->update($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('request-types.index');
    }

    public function show()
    {
        dd('ok');
    }

    public function destroy($id)
    {
        try {
            $requestType = Request_type::findOrFail($id);
            $requestType->delete();

            return redirect()->back();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
    }
}
