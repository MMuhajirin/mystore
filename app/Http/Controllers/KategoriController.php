<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index() {
        $data = array('tittle' => 'Kategori');
        return view('Kategori.index', $data);
    }
}
