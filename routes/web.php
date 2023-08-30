<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\WelcomeController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
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
Route::get('/', [WelcomeController::class, 'index'])->name('home');

// *Zakat Sekarang
Route::group([
    'prefix' => 'zakat-sekarang',
    'as' => 'zakat-sekarang.',
    'namespace' => 'App\Http\Controllers',
    'controller' => 'ZakatSekarangController'
], function () {
    Route::get('/', 'index')->name('index');
    Route::get('{id_zakat_sekarang}', 'show')->name('show');
});

// *Zakat Produktif
Route::group([
    'prefix' => 'zakat-produktif',
    'as' => 'zakat-produktif.',
    'namespace' => 'App\Http\Controllers',
    'controller' => 'ZakatProduktifController'
], function () {
    Route::get('/', 'index')->name('index');
    Route::get('{id_zakat_produktif}', 'show')->name('show');
});

// *Zakat Market
Route::group([
    'prefix' => 'zakat-market',
    'as' => 'zakat-market.',
    'namespace' => 'App\Http\Controllers',
    'controller' => 'ZakatMarketController'
], function () {
    Route::get('/', 'index')->name('index');
    Route::get('{id_zakat_market}', 'show')->name('show');
});


// Route::view('admin/dashboard/zakat-sekarang', 'admin.zakat-sekarang.index');
// Route::view('admin/dashboard/zakat-produktif', 'admin.zakat-produktif.index');
// Route::view('admin/dashboard/zakat-market', 'admin.zakat-market.index');
// Route::view('admin/dashboard/pengguna', 'admin.users.index');
Route::view('admin/dashboard/muzaki', 'admin.users.muzaki.index')->name('dashboard.muzaki');
Route::view('admin/dashboard/mustahik', 'admin.users.mustahik.index')->name('dashboard.mustahik.index');
Route::view('admin/dashboard/mustahik/{id_mustahik}', 'admin.users.mustahik.show')->name('dashboard.mustahik.show');
Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');    
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');


    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});

Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin/dashboard',
    'as' => 'admin.dashboard.',
    'namespace' => 'App\Http\Controllers\Admin',
], function () {
    Route::controller(DashboardController::class)->group(function (){
        Route::get('/', 'index')->name('dashboard');
    });
    Route::controller(ZakatSekarangController::class)->group(function (){
        Route::get('zakat-sekarang', 'index')->name('zakat-sekarang.index');
        Route::get('zakat-sekarang/create', 'create')->name('zakat-sekarang.create');
    });
    Route::controller(ZakatProduktifController::class)->group(function (){
        Route::get('zakat-produktif', 'index')->name('zakat-produktif.index');
        Route::get('zakat-produktif/create', 'create')->name('zakat-produktif.create');
        
        Route::post('zakat-produktif/store', 'store')->name('zakat-produktif.store');
    });
    Route::controller(ZakatMarketController::class)->group(function (){
        Route::get('zakat-market', 'index')->name('zakat-market.index');
    });
    Route::controller(UserController::class)->group(function (){
        Route::get('pengguna', 'index')->name('pengguna.index');
    });
});
Route::fallback(function () {
    return view('errors.404');
});
