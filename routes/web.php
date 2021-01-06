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
Route::get('department', 'MedicalController@department');
Route::get('patients_services', 'MedicalController@patients_services');
Route::get('patients_appointment', 'MedicalController@patients_appointment');
Route::get('patients_our_doctor', 'MedicalController@patients_our_doctor');
Route::get('patients_pricing', 'MedicalController@patients_pricing');
Route::get('blogs', 'MedicalController@blog');
Route::get('blog-detail/{id}', 'MedicalController@blog_detail');
Route::get('contact', 'MedicalController@contact');
Route::get('shahida-husain-tarar', 'MedicalController@doctor1');
Route::get('muhammad-afzal-ch', 'MedicalController@doctor2');
Route::get('muhammad-anas', 'MedicalController@doctor3');
Route::get('fouzia', 'MedicalController@doctor4');
Route::get('anam-shareef', 'MedicalController@doctor5');
Route::get('machinery', 'MedicalController@machinery');


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
    Route::get('/','BlogController@index');
    Route::post('/','BlogController@store');
    Route::get('/edit/{id}','BlogController@edit');
    Route::put('/edit/{id}','BlogController@update');//update
    Route::delete('/{id}','BlogController@destroy');//delete
});



/*
*Notice Board Route
*
*/
Route::group(['prefix' => 'notice_board'], function () {
    Route::get('/create','NoticeBoardController@create');
    Route::get('/','NoticeBoardController@index');
    Route::post('/','NoticeBoardController@store');
    Route::get('/edit/{id}','NoticeBoardController@edit');
    Route::put('/edit/{id}','NoticeBoardController@update');//update
    Route::delete('/{id}','NoticeBoardController@destroy');//delete
});
