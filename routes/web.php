<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\doctorcontroller;

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
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Admin_login', function () {
    return view('Admin_login');
});

Route::get('/AdminDashboard', function () {
    return view('AdminDashboard');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/del_doc', function () {
    return view('del_doc');
});

Route::get('/doc_register', function () {
    return view('doc_register');
});

Route::get('/doctor_list','doctorcontroller@doctor_list');

Route::get('/login', function () {
    return view('login');
});

Route::get('/make_appointments', function () {
    return view('make_appointments');
});
Route::get('/reschedule','doctorcontroller@reshedule' );
Route::get('/signup', function () {
    return view('signup');
});
Route::get ('/Update_appointments' , function(){
    return view('Update_appointments');
});
Route::post('/signup','doctorcontroller@store');
Route::post('/login','doctorcontroller@login');
Route::post('/logout','doctorcontroller@logout');
Route::post('/doc_register','doctorcontroller@register');
Route::post('/Contact','doctorcontroller@contact');
Route::post('/make_appointments','doctorcontroller@appointment');
Route::get('delete/{id}','doctorcontroller@destroy');
Route::get('delete2/{id}','doctorcontroller@destroy_doc');
Route::get('update/{id}','doctorcontroller@update');
Route::post('/Update_appointments1/{id}','doctorcontroller@update1');
Route::get('update2/{id}','doctorcontroller@update2');
Route::post('/Update_doctor1/{id}','doctorcontroller@doctor_update');
Route::get('/request','doctorcontroller@xmlhttprequest');