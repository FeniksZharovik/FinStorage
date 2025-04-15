<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LaporanController;

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

Route::get('/', [FileController::class, 'index'])->name('home');

Route::get('/upload', [FileController::class, 'showForm'])->name('file.form');
Route::post('/upload', [FileController::class, 'upload'])->name('file.upload');

Route::get('/laporan-pdf', [LaporanController::class, 'generatePDF']);
