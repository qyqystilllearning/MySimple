<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog', function() {
    $codes = [
        ["name" => "CHALLENGE1.sh", "type" => "bash", "id" => 1],
        ["name" => "DATASCIENCE.py", "type" => "python", "id" => 2],
    ];

    return view('catalog.index', ["greeting" => "hello", "codes" => $codes ]);
});

Route::get('/catalog/add', function () {
    return view('catalog.add');
});


Route::get('/catalog/{id}', function($id) {
    return view('catalog.show', ["id" => $id]);
});
