<?php

use Illuminate\Support\Facades\Route;

// Route untuk root URL
Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/feat-1radnextinternet', function () {
    return view('feat-1radnextinternet');
});

Route::get('/feat-2privatepeering', function () {
    return view('feat-2privatepeering');
});

Route::get('/feat-3privatesecurity', function () {
    return view('feat-3privatesecurity');
});

Route::get('/feat-6enzyhome', function () {
    return view('feat-6enzyhome');
});

Route::get('/feat-7sisteminformasiakademik', function () {
    return view('feat-7sisteminformasiakademik');
});

Route::get('/feat-8akademidigital', function () {
    return view('feat-8akademidigital');
});

Route::get('/feat-9zonakonten', function () {
    return view('feat-9zonakonten');
});

Route::get('/feat-10huris', function () {
    return view('feat-10huris');
});

Route::get('/feat-11excelneo', function () {
    return view('feat-11excelneo');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/carabayar', function () {
    return view('carabayar');
});

Route::get('/beritaradnet', function () {
    return view('beritaradnet');
});

Route::get('/vidioradnet', function () {
    return view('vidioradnet');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});






