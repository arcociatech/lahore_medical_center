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

Route::get('/', 'MedicalController@home');
Route::get('department/index', 'MedicalController@department');
Route::get('patients_services/index', 'MedicalController@patients_services');
Route::get('patients_appointment/index', 'MedicalController@patients_appointment');
Route::get('patients_our_doctor/index', 'MedicalController@patients_our_doctor');
Route::get('patients_pricing/index', 'MedicalController@patients_pricing');
Route::get('blog/index', 'MedicalController@blog');
Route::get('contact/index', 'MedicalController@contact');
Route::get('shahida-husain-tarar/', 'MedicalController@doctor1');
Route::get('muhammad-afzal-ch/', 'MedicalController@doctor2');


//Contact Route

Route::group(['prefix' => 'contact'], function () {
    Route::get('/create','ContactController@create');
    Route::post('/','ContactController@store');
});
