<?php

use App\Http\Controllers\Contorller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as RoutingController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', function () {
    return view('homepage.index');
    });


Route::get('/latihan', [LatihanController::class, 'home']);
Route::get('/beranda', [LatihanController::class, 'beranda']);
Route::get('/homepage', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);
Route::get('/admin', [DashboardController::class, 'index']);


// Route group admin
Route::group(['prefix' => '/admin'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');

    //Route::group parent kategori
        Route::group(['prefix' => '/kategori'], function (){
            Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
            Route::get('/create', [KategoriController::class, 'create'])->name('create.kategori');
            Route::get('/edit', [KategoriController::class, 'edit'])->name('edit.kategori');

        });
        //Route::group parent produk
        Route::group(['prefix' => '/produk'], function (){
            Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
            Route::get('/create', [ProdukController::class, 'create'])->name('create.produk');
            Route::get('/show', [ProdukController::class, 'show'])->name('show.produk');
            Route::get('/edit', [ProdukController::class, 'edit'])->name('edit.produk');

        });

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');
});


// //Route Group
// Route::group(['prefix' => '/mahasiswa', 'as' => 'mahasiswa'],function() {
//     Route::get('/pendaftaran', function () {
//         $title = 'Pendaftaran';
//         $text = 'Halaman Pendaftaran';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

//     Route::get('ujian', function () {
//         $title = 'ujian';
//         $text = 'Halaman Ujian';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

//     Route::get('nilai', function () {
//         $title = 'Nilai';
//         $text = 'Halaman Nilai';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

// });

// Route::get('/', function () {
//     return view('welcome');
// });
