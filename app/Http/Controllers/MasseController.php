<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasseController extends Controller
{
    public function index()
    {
        return view('admin.pages.massesIndex');
    }
}