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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/liste_preinscription', 'PreinscriptionController@index')->name('liste_preinscription');
Route::get('/liste_preinscription/{id}','PreinscriptionController@creation_compte')->name('creation_compte');
Route::get('/etudiantsInscrits', 'EtudiantsInscritsController@index')->name('etudiantsInscrits');
Route::get('/configuration', 'configurationController@index')->name('configuration');
Route::get('/absences', 'absencesController@index')->name('absences');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

