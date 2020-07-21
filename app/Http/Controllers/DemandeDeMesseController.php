<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeDeMesseController extends Controller
{
    public function index()
    {
        return view('admin.pages.parishionersRequestIndex');
    }
}
