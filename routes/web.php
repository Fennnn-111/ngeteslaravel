<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('home', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil', [
        'nama'  => 'Andi Ahmad Surya',
        'nim'   => '0123456789',
        'kelas' => 'TRM-00',
        'prodi' => 'Teknologi Rekayasa Multimedia',
    ]);
});

Route::get('/profil2', function () {
    return view('profil2', [
        'nama'  => 'Ciko',
        'nim'   => 'nim',
        'kelas' => 'TRM-04',
        'prodi' => 'Teknologi Rekayasa Multimedia',
    ]);
});

