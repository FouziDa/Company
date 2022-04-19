<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add', [App\Http\Controllers\CompanyController::class, 'add']);
Route::post('/store', [App\Http\Controllers\CompanyController::class, 'store']);
Route::get('/update/{id}', [App\Http\Controllers\CompanyController::class, 'update']);
Route::post('/save/{id}', [App\Http\Controllers\CompanyController::class, 'save']);
Route::get('/delete/{id}', [App\Http\Controllers\CompanyController::class, 'delete']);


