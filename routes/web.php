<?php

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
    return view('welcome');
});
Route::get("/operator_login","local_operator@index");

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/m', function () {
    return view('local-operator.mainpage');
});

//soil sample.......*******
Route::get('/soil', 'ProgramController@view');
Route::post('/soil_sample', 'ProgramController@save')->name('soil.store');

//crops sample
Route::get('/crops', 'CropsSampleController@crops_view');
Route::post('/crops_sample', 'CropsSampleController@crops_sample')->name('crops.store');

