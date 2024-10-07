<?php

use App\Http\Controllers\CompetenciesController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\CompetenciesMaterialsController;
use Illuminate\Support\Facades\Route;
use App\Models\Competence;

Route::get('/', function () {
    return view('course');
});

Route::get('/first', function () {
    return view('task');
});

Route::get('/course', [CompetenciesController::class, 'index'])->name('course');
Route::post('/materi/store', [MaterialsController::class, 'store'])->name('materi.store');
Route::post('/kompetensi/store', [CompetenciesController::class, 'store'])->name('kompetensi.store');

// Route untuk menampilkan form edit materi dan kompetensi
Route::get('/materi/edit/{id}', [MaterialsController::class, 'edit'])->name('materi.edit');
Route::get('/kompetensi/edit/{id}', [CompetenciesController::class, 'edit'])->name('kompetensi.edit');

// Route untuk menyimpan perubahan yang telah diedit
Route::put('/materi/update/{id}', [MaterialsController::class, 'update'])->name('materi.update');
Route::put('/kompetensi/update/{id}', [CompetenciesController::class, 'update'])->name('kompetensi.update');

Route::get('/relasi', [CompetenciesMaterialsController::class, 'index'])->name('relasi');