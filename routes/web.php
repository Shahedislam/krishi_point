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
Route::get('/n', function () {
    return view('local-operator.style');
});
Route::get('/index', function () {
    return view('local-operator.index');
});
Route::get('/cover', function () {
    return view('Tester.cover');
});


//soil sample.......*******
Route::get('/soil', 'ProgramController@view');
Route::post('/soil_sample', 'ProgramController@save')->name('soil.store');

//crops sample
Route::get('/crops', 'CropsSampleController@crops_view');
Route::post('/crops_sample', 'CropsSampleController@crops_sample')->name('crops.store');

Route::get('/payment', 'PaymentController@payment');
Route::post('/paymentform', 'PaymentController@payment_process')->name('payment.store');

//soil view
Route::get('/soilview', 'ProgramController@soil_view');

Route::get('/invoice', 'invoice@invoice');

Route::get('/crvoice', 'invoice@crops_invoice');

Route::get('/crops_view', 'CropsSampleController@crops_details');

Route::get('/crops_payment', 'PaymentController@crops');
Route::post('/crinvoice', 'PaymentController@payment_crops')->name('crops_payment.store');

//supplier
Route::get('/info', 'SupplierController@supplier_info');
Route::post('/infostore', 'SupplierController@reg')->name('info.store');


Route::get('/supplier', 'invoice@supplier_show');
//assign supplier
Route::get('/assign/{id}', 'SupplierController@assign_supplier');


Route::get('/supplierassign', 'AssignSupplierController@supplier_view')->name('assign.store');

Route::get('/sampleview', 'SupplierController@farmer_sample');






//manager
Route::get('/man', 'ManagerController@manager_info');
Route::post('/manstore', 'ManagerController@reg')->name('man.store');




Route::get('/manager', 'AssignManagerController@manager_show');
Route::get('/assign/{id}', 'ManagerController@assign_manager');
Route::get('/samp', 'ManagerController@farmer_sample');


Route::get('/manassign', 'AssignManagerController@manager_view')->name('assign.store');

//Route::get('/sampleview', 'ManagerController@farmer_sample');


Route::get('/dash', 'SupplierController@dashboard');
