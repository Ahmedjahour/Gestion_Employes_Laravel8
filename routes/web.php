<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\EmployesController;
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

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/home',function (){
        return view('home');
    });
   
    Route::resource('employes','EmployesController');
    Route::get('/employes/{id}/vacation','EmployesController@vacationRequest')->name('vacation.request');
    Route::get('/employes/{id}/certificate','EmployesController@certificateRequest')->name('certificate.request');
  
});
/*
Route::get('/home', function () {
    return view('home');

})->middleware('auth');
Route::resource('employes','app\Http\Controllers\EmployesController\EmployesController@index')->middleware('auth');*/