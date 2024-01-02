<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MataKuliahController;
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

// belum memakai template
Route::get('/mataKuliah', function () {
    return view('mataKuliah.create');
});
Route::post('/mataKuliah', [MataKuliahController::class, 'store'])->name('mataKuliah');
Route::get('/data-matakuliah', [MataKuliahController::class, 'index'])->name('mataKuliah.index');
Route::get('/mataKuliah/{mataKuliah}/edit', [MataKuliahController::class, 'edit'])->name('mataKuliah.edit');
Route::put('/mataKuliah/{mataKuliah}', [MataKuliahController::class, 'update'])->name('mataKuliah.update');
Route::delete('/mataKuliah/{mataKuliah}', [MataKuliahController::class, 'destroy'])->name('mataKuliah.destroy');

// setelah memakai template
// middleware (update)
Route::group(["middleware" => "auth"], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard');
    Route::get('/dashboard/{mataKuliah}/edit', [DashboardController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboard/{mataKuliah}', [DashboardController::class, 'update'])->name('dashboard.update');
    Route::delete('/dashboard/{mataKuliah}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
});

// login
Route::get("/", [AuthController::class, "login"])->name("login");
Route::post("/postLogin", [AuthController::class, "postLogin"])->name("postLogin")->middleware("throttle:login");
Route::get('/logout', function () {
    return view('login');
});
