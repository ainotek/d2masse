<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@home')->name('home');

Route::get('/void', function () {
    return view('admin.template');
})->name('#');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function (){return redirect()->route('dashboard');});
    Route::get('/tableau_de_bord', 'DashboardController@index')->name('dashboard');
    Route::get('connexion', 'AuthenticationController@adminLogin');
    Route::get('paroissiens', 'ParishionerController@index')->name('parishioners.index');
    Route::get('utilisateurs', 'UserController@index')->name('users.index');
    Route::get('messes', 'MasseController@index')->name('masses.index');
    Route::get('causes', 'MasseController@index')->name('causes.index');
    Route::get('administrateurs', 'MasseController@index')->name('admins.index');
    Route::get('dioceses', 'MasseController@index')->name('dioceses.index');
    Route::get('paroisses', 'MasseController@index')->name('parishes.index');
    Route::get('transactions', 'MasseController@index')->name('transactions.index');
    Route::get('types_de_requettes', 'MasseController@index')->name('requestTypes.index');
    Route::get('pays', 'MasseController@index')->name('countries.index');
    Route::get('villes', 'MasseController@index')->name('cities.index');
    Route::get('demandes_de_messe', 'DemandeDeMesseController@index')->name('parishionersRequest.index');



    Route::get('deconnexion','AuthenticationController@logout')->name('logout');
});
