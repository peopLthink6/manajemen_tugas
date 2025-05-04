<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;


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
})->name('welcome');

Route::middleware('isLogin')->group(function(){
 // Login
Route::get('auth.login', [AuthController::class, 'login'])->name('login');
Route::post('auth.login', [AuthController::class, 'loginProses'])->name('loginProses');   
});


//Logout
Route::get('auth.logout',[AuthController::class, 'logout'])->name('logout');

Route::middleware('isAdmin')->group(function(){
Route::get('user', [UserController::class, 'index'])->name('user');
});

Route::get('tugas', [TugasController::class, 'index'])->name('tugas');
Route::get('tugas/pdf', [TugasController::class, 'pdf'])->name('tugasPdf');

Route::middleware('checkLogin')->group(function(){
        // User
        Route::get('user', [UserController::class, 'index'])->name('user');
        Route::get('user/create', [UserController::class, 'create'])->name('userCreate');
        Route::post('user/store', [UserController::class, 'store'])->name('userStore');
        Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('userEdit');
        Route::post('user/update/{id}', [UserController::class, 'update'])->name('userUpdate');
        Route::get('user/destroy/{id}', [UserController::class, 'destroy'])->name('userDestroy');
        Route::get('user/excel', [UserController::class, 'excel'])->name('userExcel');
        Route::get('user/pdf', [UserController::class, 'pdf'])->name('userPdf');
    
        // Tugas
        Route::get('tugas/create', [TugasController::class, 'create'])->name('tugasCreate');
        Route::post('tugas/store', [TugasController::class, 'store'])->name('tugasStore');
        Route::get('tugas/edit/{id}', [TugasController::class, 'edit'])->name('tugasEdit');
        Route::post('tugas/update/{id}', [TugasController::class, 'update'])->name('tugasUpdate');
        Route::delete('tugas/destroy/{id}', [TugasController::class, 'destroy'])->name('tugasDestroy');
        Route::get('tugas/excel', [TugasController::class, 'excel'])->name('tugasExcel');
        Route::get('tugas/pdf', [TugasController::class, 'pdf'])->name('tugasPdf');
// Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

});

