<?php

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

Auth::routes(['register' => false]);

Route::get('/', function () {
    return redirect('login');
});

Route::group(['prefix' => 'dashboard',  'middleware' => ['auth']], function () {
    Route::resource('users', 'Dashboard\UserController')->except(['show']);
    Route::resource('doctors', 'Dashboard\DoctorController')->except(['show']);
    Route::resource('patients', 'Dashboard\PatientController')->except(['show']);
    Route::resource('schedules', 'Dashboard\ScheduleController')->except(['show']);
});

