<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog', [CodesController::class, 'index']);

Route::get('/catalog/add', function () {
    return view('catalog.add');
});


Route::get('/catalog/{id}', function($id) {
    return view('catalog.show', ["id" => $id]);
});
