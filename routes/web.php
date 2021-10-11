<?php

use App\Http\Controllers\AdmnistratorController;
use App\Http\Controllers\ApproverController;
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
Route::get('/logout', [UserController::class, 'logout']);

Route::resource('/users', AdmnistratorController::class)->middleware('can:admin');

Route::resource('/materials', MaterialController::class)->middleware('can:admin');

Route::resource('/solicitor', SolicitorController::class)->middleware('can:solicitor');

Route::resource('/approver', ApproverController::class)->middleware('can:approver');
Route::get('/approver/aprove/{id}', [ApproverController::class, 'approve'])->middleware('can:approver');
Route::post('/approver/reprove/{id}', [ApproverController::class, 'reprove'])->middleware('can:approver');
