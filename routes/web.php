<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilController;

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
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
});

Route::get('/gendash', function() {
    return view('gendash');
});


Route::resource('/utility', UtilController::class);
Route::post('/confirm', 'App\Http\Controllers\UtilController@confirm')->name('confirm');
Route::get('/edit{id}', [UtilController::class, 'edit']);
Route::post('/utilUpdate{id}', [UtilController::class, 'update']);
Route::get('/delete{id}', [UtilController::class, 'delete']);