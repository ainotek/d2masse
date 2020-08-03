<?php

namespace App\Http\Controllers;

use App\Models\Parish;
use Illuminate\Http\Request;

class ParishController extends Controller
{
    public function index()
    {
        $parishes = Parish::with('diocese', 'parishioners')->get();

        return view('admin.pages.parishes.index', compact('parishes'));
    }
}
