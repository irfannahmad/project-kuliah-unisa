<?php

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

Route::get('/mataKuliah', function () {
    return view('mataKuliah.create');
});
Route::post('/mataKuliah', [MataKuliahController::class, 'store'])->name('mataKuliah');
Route::get('/data-matakuliah', [MataKuliahController::class, 'index'])->name('mataKuliah.index');
Route::get('/mataKuliah/{mataKuliah}/edit', [MataKuliahController::class, 'edit'])->name('mataKuliah.edit');
Route::put('/mataKuliah/{mataKuliah}', [MataKuliahController::class, 'update'])->name('mataKuliah.update');
Route::delete('/mataKuliah/{mataKuliah}', [MataKuliahController::class, 'destroy'])->name('mataKuliah.destroy');
