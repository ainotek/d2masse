<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DioceseController extends Controller
{
    public function index()
    {
        return view('admin.pages.diocesesIndex');
    }
}
