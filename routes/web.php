<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'idx']);
Route::get('/Signin', [HomeController::class, 'signinidx']);
Route::get('/Login', [HomeController::class, 'loginidx']);
Route::post('/register', [AccountController::class, 'accidx']);
Route::post('/log', [AccountController::class, 'log']);
Route::get('/logout', [AccountController::class, 'out']);
Route::get('/user', [EbookController::class, 'book']);
Route::get('/more/{id}', [EbookController::class, 'urut']);
Route::get('/profile', [EbookController::class, 'priv']);




