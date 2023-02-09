<?php

use App\Http\Controllers\appController;
use App\Http\Controllers\Authentication as Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\profileController;

// view controller landing
Route::get('/', [appController::class, 'homepage'])->name('homepages');
Route::get('/hotitems', [appController::class, 'hotitems']);
Route::get('/profileinfo', [profileController::class, 'index']);
Route::get('/chatting', [appController::class, 'chatting']);
Route::get('/itemsinfo', [appController::class, 'itemsinfo']);
Route::get('/offersinfo', [appController::class, 'offersinfo']);
// dashboard admin
Route::get('/dashboard-admin', [appController::class, 'dashboard']);
Route::get('/edit-profile', [appController::class, 'editprofile']);
// login register
Route::controller(Auth::class)->group(function() {
    Route::get('login', 'login');
    Route::get('register', 'register')->name('registration');
    Route::get('forgot', 'forgotpassword');
});
// validation login register
Route::controller(Auth::class)->group(function(){
    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');
    Route::post('validate_login', 'validate_logins')->name('sample.validate_login');
});
/**
 * socialite auth
 */
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider'])->name('redicect.socialite');
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback'])->name('callback.socialite');