<?php

namespace App\Http\Controllers;

use App\Models\Mass;
use App\Models\Parish;
use App\Models\Parishioner;
use App\Models\Request_template;
use App\Models\Request_type;
use Illuminate\Http\Request;
use \App\Helpers\Helpers;

class PageController extends Controller
{
    public function home()
    {
        $parishioners = Parishioner::all();
        $requestTypes = Request_type::all();
        $requestTemplates = Request_template::all();
        $parishes = Parish::all();
        $masses = Mass::all();
        return view('welcome', compact('parishioners', 'requestTypes', 'parishes', 'masses', 'requestTemplates'));
    }

    public function donation(Request $request)
    {
        try{
            $data = $request->all();
            $date = date('Ymd.His');
            $rand = Helpers::generateRandomString(6);
            $transaction = [
                "trans_id" => "D{$date}.{$rand}",
                "amount" => $data['amount']
            ];
            return response()->json($transaction, 200);
        }catch (\Exception $e){
            return response()->json('error', 200);
        }
    }
}
