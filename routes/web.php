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
    return view('customer/create');
});

Route::post('cs', 'CsController@login')->name('proceed-login');
Route::get('/create', 'CustomerController@createStep1')->name('customer.create.step.one');
Route::post('/create', 'CustomerController@PostcreateStep1')->name('customer.create.step.one.post');
Route::get('/create2', 'CustomerController@createStep2')->name('customer.create.step.two');
Route::post('/create2', 'CustomerController@PostcreateStep2')->name('customer.create.step.two.post');
Route::get('/create3', 'CustomerController@createStep3')->name('customer.create.step.three');
Route::post('/create3', 'CustomerController@PostcreateStep3')->name('customer.create.step.three.post');
Route::get('/create4', 'CustomerController@createStep4')->name('customer.create.step.four');
Route::post('/create4', 'CustomerController@PostcreateStep4')->name('customer.create.step.four.post');
Route::get('/create5', 'CustomerController@createStep5')->name('customer.create.step.five');
Route::post('/create5', 'CustomerController@PostcreateStep5')->name('customer.create.step.five.post');
Route::get('/create6', 'CustomerController@createStep6')->name('customer.create.step.six');
Route::post('/create6', 'CustomerController@PostcreateStep6')->name('customer.create.step.six.post');
Route::get('/create7', 'CustomerController@createStep7')->name('customer.create.step.seven');
Route::post('/create7', 'CustomerController@PostcreateStep7')->name('customer.create.step.seven.post');
Route::get('/store', 'CustomerController@store')->name('customer.create.step.eight');
Route::post('/posting', 'CustomerController@posting')->name('customer.create.step.posting');

Route::get('/cs', function () {
    return view('cs/login');
});

    Route::get('logout', 'CsController@logout')->name('logout');


    Route::post('/action', function () {
    return view('action');
});


    Route::get('/cs/dashboard', 'CsController@dashboard')->name('cs.dashboard');
    Route::get('/cs/customer', 'CsController@customer')->name('cs.dashboard.customer');
    Route::get('/cs/edit/{id}', 'CsController@edit')->name('cs.dashboard.edit');
    Route::patch('/cs/editpost/{id}', 'CsController@editpost')->name('cs.dashboard.editpost');
    Route::delete('/cs/hapus/{id}', 'CsController@destroy')->name('cs.dashboard.hapus');
    Route::patch('/cs/verifikasi/{id}', 'CsController@verifikasi')->name('cs.dashboard.verifikasi');
    Route::patch('/cs/tolak/{id}', 'CsController@tolak')->name('cs.dashboard.tolak');
    Route::get('/cs/user/users','UserController@index')->name('cs.user.users');
    Route::get('/cs/user/create','UserController@create')->name('cs.user.create');
  //  Route::get('/cs/user/users','UserController@create')->name('cs.user.users');
    Route::get('/cs/user/source','UserController@source')->name('cs.user.source');
    Route::get('/cs/user/{id}/edit','UserController@edit')->name('cs.user.edit');
    Route::get('/cs/user/{id}/show','UserController@show')->name('cs.user.show');
    Route::get('/cs/user/{id}/destroy','UserController@destroy')->name('cs.user.destroy');
    Route::post('/cs/user/store','UserController@store')->name('cs.user.store');
    Route::post('/cs/user/{id}/update','UserController@update')->name('cs.user.update');
    Route::get('/cs/user/change','UserController@change')->name('cs.user.change');
    Route::post('/cs/user/updatePassword','UserController@updatePassword')->name('cs.user.updatePassword');

Route::get('/welcome', function () {
    return view('welcome');
});


