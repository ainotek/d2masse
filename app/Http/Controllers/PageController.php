<?php

namespace App\Http\Controllers;

use App\Models\Mass;
use App\Models\Parish;
use App\Models\Parishioner;
use App\Models\Request_type;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $parishioners = Parishioner::all();
        $requestsType = Request_type::all();
        $parishes = Parish::all();
        $masses = Mass::all();
        return view('welcome', compact('parishioners', 'requestsType', 'parishes', 'masses'));
    }
}
