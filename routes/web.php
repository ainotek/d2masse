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
Route::post('don', 'PageController@donation')->name('donation');
Route::group(['middleware' => ['guest:web'], 'prefix' => 'admin',], function () {

    Route::get('connexion', 'AuthenticationController@adminLogin')->name('login');
    Route::post('connexion', 'AuthenticationController@adminAuthentication')->name('admins.authentication');
});

Route::group(['middleware' => ['auth:web'], 'prefix' => 'admin',], function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });
    Route::get('/tableau_de_bord', 'DashboardController@index')->name('dashboard');
    Route::resource('parishioners', 'ParishionerController');
    Route::resource('supervisors', 'SupervisorController');
    Route::resource('masses', 'MassController');
    Route::resource('causes', 'CauseController');
    Route::resource('admins', 'AdminController');
    Route::resource('dioceses', 'DioceseController');
    Route::resource('parishes', 'ParishController');
    Route::resource('transactions', 'TransactionController');
    Route::resource('request-types', 'RequestTypeController');
    Route::delete('request-types/delete/{request_type}', 'RequestTypeController@destroy')->name('request-types.delete');
    Route::resource('countries', 'CountryController');
    Route::resource('cities', 'CityController');
    Route::resource('parishioners-request', 'MassRequestController');
});
Route::get('deconnexion', 'AuthenticationController@logout')->name('logout');
