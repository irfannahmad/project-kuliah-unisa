<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\sendInformationController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/matakuliah', function () {
        return view('matakuliah.create');
    });
    Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah');
    Route::get('/data-matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/matakuliah/{matakuliah}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
    Route::put('/matakuliah/{matakuliah}', [MataKuliahController::class, 'update'])->name('matakuliah.update');
    Route::delete('/matakuliah/{matakuliah}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('postLogin')->middleware('throttle:login');

Route::get('/data-mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/create-mahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::get('/store-mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/edit-mahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::get('/update-mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/delete-mahasiswa/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');

// Mail
Route::get('/send-mail', [sendInformationController::class, 'index']);
Route::get('/send-mail-to-users', [sendInformationController::class, 'sendEmailInformation']);
