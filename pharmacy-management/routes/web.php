<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CostomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PrecriptionController;
use App\Http\Controllers\PreparedQuotationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UploadedPrescriptionsController;
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

Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('store', [RegisterController::class, 'store']);
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('authenticate', [LoginController::class, 'store']);

Route::get('logout', [LoginController::class, 'logout']);

//Admin

Route::get('admin-dashboard', [AdminDashboardController::class, 'index']);
Route::view('sales', 'Admin.sales');
Route::get('customers', [CostomerController::class, 'index']);
Route::get('medicine-list', [MedicineController::class, 'index']);
Route::get('accept', [AdminDashboardController::class, 'accept']);
Route::get('reject', [AdminDashboardController::class, 'reject']);
Route::get('pending', [AdminDashboardController::class, 'pending']);
Route::view('add-medicine', 'Admin.add-medicine');
Route::get('prescription-list', [PrecriptionController::class, 'show']);
Route::get('uploaded-prescriptions', [UploadedPrescriptionsController::class, 'index']);


//User

Route::get('user-dashboard', [UserDashboardController::class, 'index']);
Route::get('prescription-history', [PrecriptionController::class, 'index']);
Route::view('upload-prescription', 'user.upload-prescription');
Route::get('prepared-quotation', [PreparedQuotationController::class, 'index']);
Route::post('precription-store', [PrecriptionController::class, 'store']);
