<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CostomerController;
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

//Auth

Route::get('register', [RegisterController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');

//Admin

Route::get('admin-dashboard', [AdminDashboardController::class, 'index']);
Route::view('sales', 'Admin.sales');
Route::get('customers', [CostomerController::class, 'index']);

//User

Route::get('user-dashboard', [UserDashboardController::class, 'index']);
Route::get('prescription-history', [PrecriptionController::class, 'index']);
Route::view('upload-prescription', 'user.upload-prescription');
Route::get('prepared-quotation', [PreparedQuotationController::class, 'index']);
