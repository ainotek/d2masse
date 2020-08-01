<?php

namespace App\Http\Controllers;

use App\Models\Masse;
use Illuminate\Http\Request;

class MasseController extends Controller
{
    public function index()
    {
        $masses = Masse::all();

        return view('admin.pages.masses.index', compact('masses'));
    }
}
