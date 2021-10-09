<?php

use App\Http\Controllers\AdmnistratorController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SolicitorController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'login']);

Route::post('/auth', [UserController::class, 'auth'])->name('auth.user');

Route::resource('/users', AdmnistratorController::class);

Route::resource('/materials', MaterialController::class);

Route::resource('/solicitor', SolicitorController::class);
