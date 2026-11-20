<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Sendy Prayogo',
            'Budi Santoso',
            'Siti Rahma',
            'Andi Wijaya',
        ];

        return view('pages.mahasiswa', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
}