<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function adminLogin()
    {
        //password = "$2y$10$JoFF15Y0xEauWuOSx5Yvt.vYNqFLrGrgG6awJcEIyEQNRsdFyz8c6"
        return view("admin.auth.login");
    }

    public function adminAuthentication(Request $request)
    {
        $request->validate([
            'email' => 'required|email|min:6|max:60|exists:admins',
            'password' => 'required|min:8'
        ]);

        $credentials = $request->only("email", "password");
        dump($credentials, Hash::make('password'));
        //try{
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            dump("logged in");
            return redirect()->route('dashboard');
        }
        //}catch (\Exception $e){
        //dump($e->getMessage());
        //}
        dump("connexion failed");
        return redirect()->route('admins.login');
    }


    function logout()
    {
        Auth::logout();
        return redirect()->route('admins.login');
    }
}
