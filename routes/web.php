<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping', function () {
    return 'PONG! Laravel Berhasil Menyala di Vercel!';
});

Route::get('/card-project', function () {
    return view('card_project');
});
