<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    $password = Hash::make('password');
    return response()->json($password);
});

Route::post('don', 'PageController@donation')->name('donation');

Route::get('parishes/{id}/masses', 'MassRequestController@getMasses')->name('getMassesByParish');
Route::get('request-templates/{id}', 'RequestTemplateController@getRequestTemplates')->name('getTemplatesById');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
