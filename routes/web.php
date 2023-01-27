<?php

use App\Http\Controllers\appController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', [appController::class, 'appChat']);  
// Route::redirect('admin','/');
// 
// 

Route::get('/virustrade', [appController::class, 'landingpage']);
Route::get('/kategori', [appController::class, 'kategori']);
Route::get('/login', [appController::class, 'login']);
Route::get('/register', [appController::class, 'register']);
Route::get('/forgot', [appController::class, 'forgotpassword']);
Route::get('/', [appController::class, 'homepage']);
Route::get('/hotitems', [appController::class, 'hotitems']);
Route::get('/profileinfo', [appController::class, 'profileinfo']);
Route::get('/chatting', [appController::class, 'chatting']);
Route::get('/itemsinfo', [appController::class, 'itemsinfo']);
Route::get('/offersinfo', [appController::class, 'offersinfo']);

// redirect
Route::redirect('admin','/virustrade');
Route::redirect('Admin','/virustrade');