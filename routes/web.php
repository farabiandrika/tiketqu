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

//halaman hompage
Route::get('/', 'PagesController@homepage')->name('/');
Route::get('/free', 'PagesController@free');

Auth::routes();
Auth::routes(['verify' => true]);

Route::prefix('/admin')->name('admin.')->group(function () {
    //All the admin routes will be defined here...
    Route::get('/', 'AdminController@index')->name('home');

    Route::namespace('Auth')->group(function () {
        //Login Routes
        Route::get('/sawadikapp', 'AdminLoginController@showLoginForm');
        Route::post('/sawadikapp', 'AdminLoginController@login')->name('login');
        Route::post('/logout', 'AdminLoginController@logout')->name('logout');
    });

    //Pembayaran
    Route::get('/konfirmasi-pembayaran', 'AdminController@konfirmasipembayaran');
    Route::get('changeStatusTransaksi', 'TransaksiController@changeStatusTransaksi');

    //Manajemen Event
    Route::get('/konfirmasi-event', 'AdminController@indexManajemenEvent');
    Route::get('/event-berlalu', 'AdminController@indexEventBerlalu');
    Route::post('/updateevent', 'EventController@updateEvent');
    Route::get('tiket/delete', 'EventController@deleteTiket');
});

//halaman user
Route::group(['middleware' => 'disablepreventback'], function () {
    Auth::routes();
    //user
    Route::get('/home', 'HomeController@index')->name('home');
    Route::patch('update/{user}', 'UserController@update');
    Route::patch('update_status/{user}', 'UserController@status');
    Route::patch('update_foto/{user}', 'UserController@ufoto');


    //Event
    Route::resource('event', 'EventController');
    Route::get('/buat-event', 'EventController@indexBuatEvent');
    Route::post('/buat-event', 'EventController@store')->name('buat-event.store');
    Route::get('changeStatusEvent', 'EventController@changeStatusEvent');
    Route::get('/getevent', 'EventController@getEventById');
    Route::post('/editEvent', 'EventController@updateEvent')->name('editEvent');
    Route::get('tiket/delete', 'EventController@deleteTiket');
    Route::get('/eventku', 'EventController@telahBuatEvent');

    Route::get('/edit-eventku/{id}', 'EventController@edit');

    //Transaksi
    Route::post('/transaksi', 'TransaksiController@storetransaksi')->name('transaksi.store');
    Route::get('/mbayar/{id}', 'TransaksiController@mbayar')->name('proses.transaksi');
    Route::post('/transaksis', 'TransaksiController@updatetransaksi')->name('transaksi.update');
    Route::get('/keranjang', 'UserController@lihattransaksi')->name('keranjang');
    Route::get('batal/{id}', 'TransaksiController@delete');
});

Route::group(['middleware' => 'disablepreventback'], function () {
    //halaman detail tiket
    Route::get('/detail/{id}', 'PagesController@detail');
});

//Reset Passwords for candidates
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
