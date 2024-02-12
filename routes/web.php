<?php

use App\Mail\Admin\ConfirmationTransaction;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

Route::namespace('App\Http\Controllers\User')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::middleware(['auth'])->group(function () {
        Route::get('/waraedu', 'WaraeduController@index')->name('waraedu');
    });
    Route::middleware(['auth'])->group(function () {
        Route::get('/waracareer', 'WaracareerController@getData')->name('waracareer');
    });
    Route::middleware(['auth'])->group(function () {
        Route::get('/warapartner', 'WarapartnerController@index')->name('warapartner');
    });
    Route::middleware(['auth'])->group(function () {
        Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
    });
    Route::get('/bantuan', function () {
        return view('pages.user.bantuan');
    })->name('bantuan');
    
    // Route home
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/home/{training:slug}', 'TrainingController@show')->name('training.show');
});

Auth::routes();
