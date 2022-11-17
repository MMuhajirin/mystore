<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index ()
    {
        $data = array('tittle' => 'Produk');
        return view('produk.index', $data);
    }
    public function create()
    {
        $data = array('tittle' => 'Form Produk Baru');
        return view('produk.create', $data);
    }
    public function store(Request $request)
    {
        //
    }
    public function show()
    {
        $data = array('tittle' => 'Foto Produk');
        return view('produk.show', $data);
    }
    public function edit()
    {
        $data = array('tittle' => 'Form Edit Produk');
        return view('produk.edit', $data);
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
