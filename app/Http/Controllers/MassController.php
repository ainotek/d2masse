<?php

namespace App\Http\Controllers;

use App\Models\Mass;
use Illuminate\Http\Request;

class MassController extends Controller
{
    public function index()
    {
        $masses = Mass::all();

        return view('admin.pages.masses.index', compact('masses'));
    }
}
