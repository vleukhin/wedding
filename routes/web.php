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

Route::as('login')->post('login', 'Auth\LoginController@login');
Route::as('login.form')->get('login', 'Auth\LoginController@showLoginForm');
Route::as('logout')->get('logout', 'Auth\LoginController@logout');

Route::middleware(['auth'])
    ->prefix('admin')
    ->namespace('Admin')
    ->as('admin.')
    ->group(function () {
        Route::as('index')->get('/', 'IndexController@index');

        Route::as('invites.')->group(function (){
            Route::as('index')->get('/invites', 'InvitesController@index');
        });
    });