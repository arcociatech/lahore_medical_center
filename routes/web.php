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

Auth::routes();

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



Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin_dashboard','AdminPanelController@admin_dashboard');

    // Route::get('/home','AdminPanelController@admin_dashboard');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*
*Blog Route
*
*/
Route::group(['prefix' => 'blog'], function () {
    Route::get('/create','BlogController@create');
    Route::get('/index','BlogController@index');
    Route::post('/','BlogController@store');
    Route::get('/edit/{id}','BlogController@edit');
    Route::put('/edit/{id}','BlogController@update');//update
    Route::delete('/{id}','BlogController@destroy');//delete
});