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

Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });
    Route::get('/tableau_de_bord', 'DashboardController@index')->name('dashboard');
    Route::get('connexion', 'AuthenticationController@adminLogin')->name('admins.login');
    Route::post('connexion', 'AuthenticationController@adminAuthentication')->name('admins.authentication');
    Route::resource('parishioners', 'ParishionerController');
    Route::resource('users', 'UserController');
    Route::resource('masses', 'MasseController');
    Route::resource('causes', 'CauseController');
    Route::resource('admins', 'AdminController');
    Route::resource('dioceses', 'DioceseController');
    Route::resource('parishes', 'ParishController');
    Route::resource('transactions', 'TransactionController');
    Route::resource('request-types', 'RequestTypeController');
    Route::delete('request-types/delete/{request_type}', 'RequestTypeController@destroy')->name('request-types.delete');
    Route::resource('countries', 'CountryController');
    Route::resource('cities', 'CityController');
    Route::resource('parishioners-request', 'ParishionerRequestController');

    Route::get('deconnexion', 'AuthenticationController@logout')->name('logout');

    Route::get('informationsParish', 'ParishionerRequestController@getAllByParish')->name('parishioners-all-by-parish_id');
});
