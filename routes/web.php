<?php

use App\Http\Controllers\loginController;
use App\Http\Middleware\LoginCheck;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/',[loginController::class, 'index'])->name('index');


Route::middleware('auth')->group(function(){
    Route::get('/user_dashboard',[loginController::class,'user_dashboard'])->name('user.profile');
    Route::get('/admin_dashboard',[loginController::class,'admin_dash'])->name('admin.dash');
});
Route::post('/login',[loginController::class,'login_validate'])->name('login.validate');
Route::middleware('user.login.check')->group(function(){
});

Route::get('/logout',[loginController::class,'logout'])->name('logout');


Route::get('/user_registration',[loginController::class, 'register'])->name('user.registration');
Route::post('/user_registration',[loginController::class, 'register_store']);

Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::view('/login','login')->name('login');
    });

    Route::group(['middleware' => 'admin.auth'], function(){
        
    });
});