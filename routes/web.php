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
use App\Http\Controllers\Admin\BantuanAdminController;
use App\Http\Controllers\Admin\VerifOwnerAdminController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Owner\TransactionOwnerController;
use App\Http\Controllers\Owner\WaralabaOwnerController;
use App\Http\Controllers\Owner\CareerOwnerController;
use App\Http\Controllers\User\SavedJobController;

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
Route::
        namespace('App\Http\Controllers\User')->group(function () {
            Route::get('/', 'HomeController@index')->name('home');
            Route::get('/register-as', 'RegisterAsController@index')->name('registeras');

            Route::middleware(['auth'])->group(function () {

                Route::get('/waraedu', [ArticleController::class, 'getAll'])->name('waraedu');
                Route::get('/waraedu/{id}', [ArticleController::class, 'getDetail'])->name('waraedu-detail');

                Route::get('/waracareer', 'WaracareerController@getData')->name('waracareer');
                Route::get('/career/{id}', 'WaracareerController@show')->name('career.show');
                Route::get('/daftar/{id}', 'WaracareerController@daftar')->name('career.daftar');
                Route::post('/daftar/store-data', 'WaracareerController@store')->name('careerJob.store');
                Route::post('/save-job/{careerId}', [SavedJobController::class, 'saveJob'])->name('save.job');
                Route::get('/user/applications/{userId}', [SavedJobController::class, 'history'])->name('job.applications');

                Route::get('/warapartner', 'WarapartnerController@index')->name('warapartner');
                Route::post('/warapartner', 'WarapartnerController@store')->name('verified.warapartner');

                Route::get('/home', 'HomeController@index')->name('home.index');
                Route::get('/waralaba/{id}', [WaralabaController::class, 'show'])->name("waralaba");
                Route::get('/waralaba/{id}/checkout', [WaralabaController::class, 'checkout'])->name("checkout");
                Route::get('/waralaba/{id}/checkout/submit', [WaralabaController::class, 'show3'])->name("payment");
                Route::post('/waralaba/{id}/checkout/submit', [TransactionController::class, 'store']);
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

                // Admin CRUD User
                Route::get('/admin/user', [UserAdminController::class, 'index'])->name('admin.user');
                Route::get('/user/{id}/edit', [UserAdminController::class, 'edit'])->name('admin.user.edit');
                Route::put('/admin/user/{id}', [UserAdminController::class, 'update'])->name('admin.user.update');
                Route::delete('/admin/users/{id}', [UserAdminController::class, 'destroy'])->name('admin.user.destroy');

                // Admin CRUD Waralaba
                Route::get('/admin/waralaba', [WaralabaAdminController::class, 'index'])->name('admin.waralaba');
                Route::get('/admin/waralaba/create', [WaralabaAdminController::class, 'create'])->name('admin.waralaba.create.form');
                Route::post('/admin/waralaba/add', [WaralabaAdminController::class, 'store'])->name('admin.waralaba.store');
                Route::get('/admin/waralaba/{id}', [WaralabaAdminController::class, 'show'])->name('admin.waralaba.show');
                Route::get('/admin/waralaba/{id}/edit', [WaralabaAdminController::class, 'edit'])->name('admin.waralaba.edit');
                Route::delete('/admin/waralaba/delete/{id}', [WaralabaAdminController::class, 'destroy'])->name('admin.waralaba.destroy');
                Route::put('/admin/waralaba/{id}', [WaralabaAdminController::class, 'update'])->name('admin.waralaba.update');

                // Admin CRUD Verif Owner
                Route::get('/admin/verif-owner', [VerifOwnerAdminController::class, 'index'])->name('admin.verifowner');
                Route::get('/admin/verifowner/{id}/edit', [VerifOwnerAdminController::class, 'edit'])->name('admin.verifOwner.edit');
                Route::put('/admin/verifowner/{id}', [VerifOwnerAdminController::class, 'update'])->name('admin.verifOwner.update');
                Route::delete('/admin/verifowner/{id}', [VerifOwnerAdminController::class, 'destroy'])->name('admin.verifOwner.destroy');

                // Admin CRUD transaction
                Route::get('/admin/transaksi', [TransactionAdminController::class, 'index'])->name('admin.transactions');
                Route::get('/admin/invoice/{id}', [TransactionAdminController::class, 'show'])->name('admin.transactions.show');
                Route::get('/admin/transaction/{id}/edit', [TransactionAdminController::class, 'edit'])->name('admin.transactions.edit');
                Route::put('/admin/transactions/{id}', [TransactionAdminController::class, 'update'])->name('admin.transactions.update');
                Route::delete('/admin/transactions/{id}', [TransactionAdminController::class, 'destroy'])->name('admin.transactions.destroy');

                // Admin CRUD Article
                Route::get('/admin/artikel', [ArtikelAdminController::class, 'index'])->name('admin.artikel');
                Route::get('/admin/articles/{article}/edit', [ArtikelAdminController::class, 'edit'])->name('admin.articles.edit');
                Route::put('/admin/articles/{article}', [ArtikelAdminController::class, 'update'])->name('admin.articles.update');
                Route::delete('/admin/articles/{article}', [ArtikelAdminController::class, 'destroy'])->name('admin.articles.destroy');
                Route::get('/admin/articles/create', [ArtikelAdminController::class, 'create'])->name('admin.articles.create');
                Route::post('/admin/articles', [ArtikelAdminController::class, 'store'])->name('admin.articles.store');

                //Admin CRUD Waracareer
                Route::get('/admin/career', [CareerAdminController::class, 'index'])->name('admin.career');
                Route::get('/admin/careers/create', [CareerAdminController::class, 'create'])->name('admin.career.create');
                Route::post('/admin/careers', [CareerAdminController::class, 'store'])->name('admin.careers.store');
                Route::get('/admin/careers/{id}/edit', [CareerAdminController::class, 'edit'])->name('admin.careers.edit');
                Route::post('/admin/careers/{id}', [CareerAdminController::class, 'destroy'])->name('admin.careers.destroy');
                Route::delete('/admin/careers/{id}', [CareerAdminController::class, 'destroy'])->name('admin.careers.destroys');
                Route::put('/admin/careers/{id}/update', [CareerAdminController::class, 'update'])->name('admin.careers.update');

                // Admin Route Job Application
                Route::get('/admin/jobapp', [CareerAdminController::class, 'jobAppIndex'])->name('admin.jobApp');
                Route::get('/admin/jobapp/{id}/details', [CareerAdminController::class, 'jobAppDetails'])->name('admin.jobApp.details');
                Route::put('/admin/jobapp/{id}/update', [CareerAdminController::class, 'jobAppUpdate'])->name('admin.jobApp.update');
                Route::delete('/admin/jobapp/{id}/delete', [CareerAdminController::class, 'jobAppDelete'])->name('admin.jobApp.delete');

                //Admin RUD Bantuan
                Route::get('/admin/bantuan', [BantuanAdminController::class, 'index'])->name('admin.bantuan');
                Route::get('pesan/{id}/balas', [BantuanAdminController::class, 'balas'])->name('pesan.balas');
                Route::delete('/hapus-pesan/{id}', [BantuanAdminController::class, 'hapusPesan'])->name('pesan.hapus');

            });
        });
        Route::middleware(['auth', 'owner'])->group(function () {
            Route::get('/owner/dashboard', [OwnerController::class, 'dashboard'])->name('owner.dashboard');
            Route::get('/owner/profile', [OwnerController::class, 'editProfile'])->name('owner.profile');
            Route::put('/owner/profile', [OwnerController::class, 'updateProfile'])->name('owner.update-profile');


            Route::get('/owner/waralaba', [WaralabaOwnerController::class, 'index'])->name('owner.waralaba');
            Route::post('/owner/waralaba', [WaralabaOwnerController::class, 'store'])->name('owner.waralaba.store');
            Route::get('/owner/waralaba/create', [WaralabaOwnerController::class, 'create'])->name('owner.waralaba.create.form');
            Route::get('/owner/waralaba/{id}/edit', [WaralabaOwnerController::class, 'edit'])->name('owner.waralaba.edit');
            Route::put('/owner/waralaba/{id}/update', [WaralabaOwnerController::class, 'update'])->name('owner.waralaba.update');
            Route::delete('/owner/waralaba/delete/{id}', [WaralabaOwnerController::class, 'destroy'])->name('owner.waralaba.destroy');

            Route::get('/owner/transaksi', [TransactionOwnerController::class, 'index'])->name('owner.transactions');
            Route::get('/owner/invoice/{id}', [TransactionOwnerController::class, 'show'])->name('owner.transactions.show');
            Route::get('/owner/transaction/{id}/edit', [TransactionOwnerController::class, 'edit'])->name('owner.transactions.edit');
            Route::put('/owner/transactions/{id}', [TransactionOwnerController::class, 'update'])->name('owner.transactions.update');
            Route::delete('/owner/transactions/{id}', [TransactionOwnerController::class, 'destroy'])->name('owner.transactions.destroy');
            Route::post('/owner/transactions', [TransactionOwnerController::class, 'store'])->name('owner.transactions.store');


            Route::get('/owner/career', [CareerOwnerController::class, 'index'])->name('owner.career');
            Route::get('/owner/careers/create', [CareerOwnerController::class, 'create'])->name('owner.career.create');
            Route::post('/owner/careers', [CareerOwnerController::class, 'store'])->name('owner.careers.store');
            Route::get('/owner/careers/{id}/edit', [CareerOwnerController::class, 'edit'])->name('owner.careers.edit');
            Route::post('/owner/careers/{id}', [CareerOwnerController::class, 'destroy'])->name('owner.careers.destroy');
            Route::delete('/owner/careers/{id}', [CareerOwnerController::class, 'destroy'])->name('owner.careers.destroys');
            Route::put('/owner/careers/{id}/update', [CareerOwnerController::class, 'update'])->name('owner.careers.update');


            Route::get('/owner/jobapp/{id}/details', [CareerOwnerController::class, 'jobAppDetails'])->name('owner.jobApp.details');
            Route::delete('/owner/jobapp/{id}/delete', [CareerOwnerController::class, 'jobAppDelete'])->name('owner.jobApp.delete');
            Route::put('/owner/jobapp/{id}/update', [CareerOwnerController::class, 'jobAppUpdate'])->name('owner.jobApp.update');
        });
Auth::routes();
