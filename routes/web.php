<?php

use App\Http\Controllers\appController;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\profileController;

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

// Route::get('/', [appController::class, 'appChat']);  
// Route::redirect('admin','/');
// 
// 

Route::get('/virustrade', [appController::class, 'landingpage']);
Route::get('/kategori', [appController::class, 'kategori']);
Route::get('/login', [appController::class, 'login']);
Route::get('/register', [appController::class, 'register'])->name('registration');
Route::get('/forgot', [appController::class, 'forgotpassword']);
Route::get('/', [appController::class, 'homepage'])->name('homepages');
Route::get('/hotitems', [appController::class, 'hotitems']);
Route::get('/profileinfo', [profileController::class, 'index']);
Route::get('/chatting', [appController::class, 'chatting']);
Route::get('/itemsinfo', [appController::class, 'itemsinfo']);
Route::get('/offersinfo', [appController::class, 'offersinfo']);
Route::get('/dashboard-admin', [appController::class, 'dashboard']);
Route::get('/edit-profile', [appController::class, 'editprofile']);

// redirect
Route::redirect('admin','/virustrade');
Route::redirect('Admin','/virustrade');


Route::controller(Auth::class)->group(function(){

    // Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_logins')->name('sample.validate_login');

});

/**
 * socialite auth
 */
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider'])->name('redicect.socialite');
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback'])->name('callback.socialite');