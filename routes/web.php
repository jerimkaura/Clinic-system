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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('patients', 'PatientController');

Route::resource('staff', 'StaffController');

Route::resource('departments', 'DepartmentsController');

Route::resource('roles', 'RolesController');

Route::resource('notifications', 'NotificationsController');

Route::resource('appointments', 'AppointmentsController');

Route::resource('users', 'UserController');

Route::resource('hospitals', 'HospitalController');