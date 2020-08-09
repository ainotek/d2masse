<?php

namespace App\Http\Controllers;

use App\Models\Request_template;
use App\Models\Request_type;
use Illuminate\Http\Request;

class RequestTemplateController extends Controller
{
    public function index()
    {
        $requestTemplates = Request_template::orderByDesc('created_at')->get();
        return view('admin.pages.requestTemplates.index', compact('requestTemplates'));
    }

    public function edit($id)
    {
        try {
            $requestTemplate = Request_template::find($id);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return view('admin.pages.requestTemplates.edit', compact('requestTemplate'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'content' => 'required|min:3|max:255',
        ]);

        try {
            Request_template::create($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('request-templates.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'content' => 'required|min:3|max:255',
        ]);

        try {
            $requestTemplate = Request_template::findOrFail($id);
            $requestTemplate->update($data);
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }

        return redirect()->route('request-templates.index');
    }

    public function show()
    {
        dd('ok');
    }

    public function destroy($id)
    {
        try {
            $requestTemplate = Request_template::findOrFail($id);
            $requestTemplate->delete();

            return redirect()->back();
        } catch (\Exception $e) {
            dump($e->getMessage());
            die();
        }
    }

    public function getRequestTemplates($id)
    {
        $requestTemplates = Request_template::find($id);
        return response()->json($requestTemplates, 200);
    }
}
