<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function() {
    echo 'Estou na página de contato';
});

Route::get('sobre', function() {
    echo 'Estou na página sobre';
});

Route::get('/produtos', function() {
    echo 'Estou na página de produtos';
});
