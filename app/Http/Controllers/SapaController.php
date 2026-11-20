<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Ahmad Surya';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}
