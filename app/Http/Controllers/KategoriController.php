<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index()
    {
        $data = array('tittle' => 'Kategori Produk');
        return view('kategori.index', $data);
    }
    public function create()
    {
        $data = array('tittle' => 'Form Kategori');
        return view('kategori.create', $data);
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
    //
    }
    public function edit()
    {
    $data = array('tittle' => 'Form Edit Kategori');
    return view('kategori.edit', $data);
    }
    public function update(Request $request, $id)
    {
    //
    }
    public function destroy($id)
    {
    //
    }

}
