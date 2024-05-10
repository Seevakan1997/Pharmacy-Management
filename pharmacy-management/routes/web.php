<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrecriptionController;
use App\Http\Controllers\PreparedQuotationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [RegisterController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');



Route::get('user-dashboard', [UserDashboardController::class, 'index']);
Route::get('prescription-history', [PrecriptionController::class, 'index']);
Route::view('upload-prescription', 'user.upload-prescription');
Route::get('prepared-quotation', [PreparedQuotationController::class, 'index']);
