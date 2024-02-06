<?php

use App\Mail\Admin\ConfirmationTransaction;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\WaralabaController;



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
    Route::get('/home', [User\HomeController::class, 'index'])->name('home');
    Route::middleware(['auth'])->group(function () {
        Route::get('/payment', 'PaymentController@index')->name('payment');
    });
    Route::middleware(['auth'])->group(function () {
        Route::get('/checkout', 'CheckoutController@index')->name('checkout');
    });


    Route::middleware(['auth'])->group(function () {
        Route::get('/waraedu', 'WaraeduController@index')->name('waraedu');
    });
    Route::middleware(['auth'])->group(function () {
        Route::get('/waracareer', 'WaracareerController@index')->name('waracareer');
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

    Route::middleware(['auth'])->group(function () {
        Route::get('/detail', 'User\DetailController@index')->name('detail');
    });

    Route::get('/waralaba/{id}', [WaralabaController::class, 'show'])->name("waralaba");

    

});

Auth::routes();
