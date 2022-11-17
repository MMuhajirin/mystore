<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }

    public function about()
    {
        $data = array('title' => 'Halaman Tentang Kami');
        return view('homepage.about', $data);
    }

    public function kontak()
    {
        $data = array('title' => 'Halaman Kontak');
        return view('homepage.kontak', $data);
    }

    public function kategori()
    {
        $data = array('title' => 'Halaman Kategori Produc');
        return view('homepage.kategori', $data);
    }

    public function pendaftaran()
    {
        $title = 'Pendaftaran';
        $text = 'Halaman Pendaftaran';
        return view('mahsiswa.pendaftaran', compact('title', 'text'));
    }

    public function ujian()
    {
        $title = 'Ujian';
        $text = 'Halaman Ujian';
        return view('mahsiswa.ujian', compact('title', 'text'));
    }

    public function nilai()
    {
        $title = 'Nilai';
        $text = 'Halaman Nilai';
        return view('mahsiswa.nilai', compact('title','text'));
    }
}
