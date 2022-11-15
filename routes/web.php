<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\FrontendController;
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


Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'homePage')->name('home.get');
});


Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'getLoginPage')->name('login.get')->middleware('guest');
    Route::post('login', 'postLogin')->name('login.post')->middleware('guest');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:super_admin|admin']],function(){

    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard', 'getDashboardPage')->name('admin.dashboard');
    });


});

Route::controller(ProductController::class)->group(function(){
    Route::post('/image-upload', 'store')->name('image.upload');
});


