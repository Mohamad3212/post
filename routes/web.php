<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.post');
});

Route::get('/create', function () {
    return view('pages.create');
})->name('create');;

Route::get('/create', function () {
    return view('pages.edit');
})->name('edit');;
