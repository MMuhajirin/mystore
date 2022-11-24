<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = array('tittle' => 'Transaksi');
        return view('transaksi.index', $data);
    }
    public function create()
    {
        $data = array('tittle' => 'Transaksi');
        return view('transaksi.create', $data);
    }
    public function store(Request $request)
    {
        //
    }
    public function show()
    {
        $data = array('tittle' => 'Detail Transaksi');
        return view('transaksi.show', $data);
    }
    public function edit()
    {
        $data = array('tittle' => 'Form Edit Transaksi');
        return view('transaksi.edit', $data);
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
