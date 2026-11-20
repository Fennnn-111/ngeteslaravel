<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'  => 'Sendy Prayogo',
        'kelas' => 'TSM-00',
        'nim'   => '0123456789',
    ]);
});

Route::view('/contact', 'pages.contact');

// satu controller bisa memiliki beberapa method (perintah)
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::post('/product/store', [ProductController::class, 'store']);;
Route::post('/product', [ProductController::class, 'store']);
