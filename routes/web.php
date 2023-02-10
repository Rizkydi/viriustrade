<?php

use App\Http\Controllers\appController;
use App\Http\Controllers\Authentication as Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardAdminController as admin;
use App\Http\Controllers\profileController;

// view controller landing
Route::controller(appController::class)->group(function(){
    Route::get('/', 'homepage')->name('homepages');
    Route::get('/hotitems', 'hotitems');
    Route::get('/chatting', 'chatting');
    Route::get('/itemsinfo', 'itemsinfo');
    Route::get('/offersinfo', 'offersinfo');
});
// profile user route controller
Route::controller(profileController::class)->group(function(){
    Route::get('/profileinfo', 'index');
});
// dashboard admin
// dashboard admin priv
Route::controller(admin::class)->group(function() {
    Route::get('admin/{id}', 'editprofile')->name('edituser');
    Route::get('admin', 'index')->name('backdashboard');
    Route::get('admin/gamecategory/all', 'gamecategory');
    Route::get('/delete/{id}', 'deleteaccountUser');
    Route::post('admin/{id}/change', 'upload')->name('upload.image');
});
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
Route::controller(SocialiteController::class)->group(function(){
    Route::get('/auth/{provider}', 'redirectToProvider')->name('redicect.socialite');
    Route::get('/auth/{provider}/callback', 'handleProvideCallback')->name('callback.socialite');
});
