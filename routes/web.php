<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodesController;

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/catalog', [CodesController::class, 'index'])->name('catalog.index');
Route::get('/catalog/add', [CodesController::class, 'add'])->name('codes.add'); 
Route::get('/catalog/{id}', [CodesController::class, 'show'])->name('codes.show');
Route::post('/codes', [CodesController::class, 'store'])->name('codes.store');
Route::delete('/catalog/{id}', [CodesController::class, 'destroy'])->name('codes.destroy'); 