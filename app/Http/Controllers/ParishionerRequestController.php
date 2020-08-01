<?php

namespace App\Http\Controllers;

use App\Models\Parishioner_request;
use Illuminate\Http\Request;

class ParishionerRequestController extends Controller
{
    public function index()
    {
        $requests = Parishioner_request::orderByDesc('created_at')->get();

        return view('admin.pages.requests.index', compact('requests'));
    }
}
