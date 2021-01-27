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
Route::get('/index-operator', function () {
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
Route::get('/homepage', 'SupplierController@sup_mainpage');
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
Route::get('/assignmanager/{id}', 'ManagerController@assign_manager');
Route::get('/samp', 'ManagerController@farmer_sample');


Route::get('/manassign', 'AssignManagerController@manager_view')->name('assigncrops.store');

Route::get('/sample_crops', 'ManagerController@farmer_sample');

Route::get('/agri_view', 'ManagerController@agri_mainpage');
Route::get('/dash', 'SupplierController@dashboard');
//crops-disease
Route::get('/disease', 'CropsDiseaseController@disease_form');
Route::post('/disinfo', 'DiseaseController@disease_sample')->name('disease.store');

Route::get('/crops_report/{id}', 'DiseaseController@disease_view');
//disease input
Route::get('/assigned/{id}', 'ManagerController@crops_report');

Route::get('/rep', 'CropsDiseaseController@dashboard');

Route::get('/delivery/{id}', 'AssignSupplierController@delivery_status')->name('delivery.store');


//assign tester
Route::get('/deliverysample', 'AssignTesterController@tester_view')->name('tester.store');
//tester
Route::get('/tester', 'TesterController@tester_info');
Route::post('/testtore', 'TesterController@reg')->name('test.store');
Route::get('/assigntester/{id}', 'TesterController@assign_tester');

Route::get('/testview', 'TesterController@tester_sample');




//operator
Route::get('/operator', 'OperatorController@operator_info');
Route::post('/opttore', 'OperatorController@reg')->name('oper.store');



//administrator
Route::get('/admin', 'ProgramController@show_admin');
Route::get('/view_tester', 'TesterController@view_tester');
Route::get('/view_operator', 'OperatorController@view_operator');
Route::get('/view_supplier', 'SupplierController@view_supplier');
Route::get('/view_manager', 'ManagerController@view_manager');
Route::get('/samplesoil', 'ProgramController@soil_sample');
Route::get('/samplecrops', 'ProgramController@crops_sample');

Route::get('/testerhome', 'TesterController@view_homepage');

Route::get('/report/{id}', 'ReportController@make_report');

//////make result of soil
Route::get('/make_result/{id}', 'ResultController@result_form');


//make report
Route::get('/report', 'ResultController@result_form');
Route::post('/reportstore', 'ResultController@make_result')->name('makeresult.store');
Route::get('/delete-operator/{id}', 'OperatorController@delete_operator');
Route::get('/delete-supplier/{id}', 'SupplierController@delete_supplier');
Route::get('/delete-tester/{id}', 'TesterController@delete_tester');
Route::get('/delete-manager/{id}', 'ManagerController@delete_manager');


Route::get('view_invoice', 'invoice@invoice_details');

//login
Route::get('/sytemlogin', 'ProgramController@view_login');

