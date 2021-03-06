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

Route::get('invite/QoRN73XK0VH0aAa9', function () {
    return view('nn');
});

Route::as('login')->post('login', 'Auth\LoginController@login');
Route::as('login.form')->get('login', 'Auth\LoginController@showLoginForm');
Route::as('logout')->get('logout', 'Auth\LoginController@logout');

Route::as('invite')->get('invite/{invite_uid}', 'FrontController@showInvite');
Route::as('survey')
    ->name('survey')
    ->post('invite/{invite_uid}', 'FrontController@saveSurvey');