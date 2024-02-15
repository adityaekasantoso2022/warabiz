<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\WaralabaController;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\TransactionController;
use App\Http\Controllers\User\FormController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\WaralabaAdminController;
use App\Http\Controllers\Admin\TransactionAdminController;
use App\Http\Controllers\Admin\ArtikelAdminController;
use App\Http\Controllers\Admin\CareerAdminController;
use App\Http\Controllers\Admin\UserAdminController;







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
    Route::middleware(['auth'])->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/waraedu', [ArticleController::class, 'getAll'])->name('waraedu');
        Route::get('/waraedu/{id}', [ArticleController::class, 'getDetail'])->name('waraedu-detail');
        Route::get('/waracareer', 'WaracareerController@getData')->name('waracareer');
        Route::get('/warapartner', 'WarapartnerController@index')->name('warapartner');
        Route::get('/home', 'HomeController@index')->name('home.index');
        Route::get('/waralaba/{id}', [WaralabaController::class, 'show'])->name("waralaba");
        Route::get('/waralaba/{id}/checkout', [WaralabaController::class, 'checkout'])->name("checkout");
        Route::get('/waralaba/{id}/checkout/submit', [WaralabaController::class, 'show3'])->name("payment"); //yang lama
        Route::post('/waralaba/{id}/checkout/submit', [TransactionController::class, 'store']); //yang lama
        Route::get('/sukses', 'SuksesController@index')->name('sukses');
        Route::post('/transaction/store', [TransactionController::class, 'store'])->name('transaction');
        Route::get('/transaction/history', [TransactionController::class, 'transactionHistory'])->name('transaction.history');
        Route::get('/transaction/history/{transactionId}', [TransactionController::class, 'showDetail'])->name('transaction.detail');
        Route::get('/user/edit-profile', [ProfileController::class, 'editProfile'])->name('user.edit-profile');
        Route::put('/user/update-profile', [ProfileController::class, 'updateProfile'])->name('user.update-profile');
        Route::get('/bantuan', function () {
            return view('pages.user.bantuan');
        })->name('bantuan');
        Route::post('/submit-form', [FormController::class, 'store'])->name('submit.form');

    });
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/admin/user', [UserAdminController::class, 'index'])->name('admin.user');
        Route::get('/user/{id}/edit', [UserAdminController::class, 'edit'])->name('admin.user.edit');
        Route::put('/admin/user/{id}', [UserAdminController::class, 'update'])->name('admin.user.update');

        Route::get('/admin/waralaba', [WaralabaAdminController::class, 'index'])->name('admin.waralaba');
        Route::get('/admin/transaksi', [TransactionAdminController::class, 'index'])->name('admin.transaksi');
        Route::get('/admin/artikel', [ArtikelAdminController::class, 'index'])->name('admin.artikel');
        Route::get('/admin/career', [CareerAdminController::class, 'index'])->name('admin.career');
    });

});

Auth::routes();
