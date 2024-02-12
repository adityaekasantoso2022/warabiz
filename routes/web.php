<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\WaralabaController;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\TransactionController;
use App\Http\Controllers\User\FormController;


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

    //Route Home
    Route::get('/', 'HomeController@index')->name('home');

    //Route Waraedu
    Route::middleware(['auth'])->group(function () {
        Route::get('/waraedu', [ArticleController::class, 'getAll'])->name('waraedu');
        Route::get('/waraedu/{id}', [ArticleController::class, 'getDetail'])->name('waraedu-detail');
    });

    //Route Waracareer
    Route::middleware(['auth'])->group(function () {
        Route::get('/waracareer', 'WaracareerController@index')->name('waracareer');
    });

    //Route Warapartner
    Route::middleware(['auth'])->group(function () {
        Route::get('/warapartner', 'WarapartnerController@index')->name('warapartner');
    });

    //Route Tracking Pesanan
    Route::get('/tracking', function () {
        return view('pages.user.tracking');
    })->name('tracking');

    // Route home
    Route::get('/home', 'HomeController@index')->name('home.index');

    //Toute Detail Waralaba
    Route::middleware(['auth'])->group(function () {
        Route::get('/waralaba/{id}', [WaralabaController::class, 'show'])->name("waralaba");

    });

    //Route Pembayaran
    Route::middleware(['auth'])->group(function () {
        Route::get('/waralaba/{id}/checkout', [WaralabaController::class, 'checkout'])->name("checkout");
    });

    //Route Kirim
    Route::middleware(['auth'])->group(function () {
        Route::get('/waralaba/{id}/checkout/submit', [WaralabaController::class, 'show3'])->name("payment"); //yang lama
        Route::post('/waralaba/{id}/checkout/submit', [TransactionController::class, 'store']); //yang lama
    });


    //Route Pesanan Sukses
    Route::middleware(['auth'])->group(function () {
        Route::get('/sukses', 'SuksesController@index')->name('sukses');
    });

    // Route Bantuan
    Route::get('/bantuan', function () {
        return view('pages.user.bantuan');
    })->name('bantuan');

    //Route Submit Pertanayan
    Route::post('/submit-form', [FormController::class, 'store'])->name('submit.form');

    //Route Submit Transaksi
    Route::post('/transaction/store', [TransactionController::class, 'store'])->name('transaction');
});

Auth::routes();
