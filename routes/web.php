<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', function () {
    return 'Halaman About';
});

Route::get('/about/{search}', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/profil', App\Http\Controllers\ProfilController::class);



// Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::get('/user/tambah_user', [UserController::class, 'tambah'])->name('user.tambah');
// Route::post('/user/simpan_user', [UserController::class, 'simpan'])->name('user.simpan');
// Route::get('/user/ubah_user/{id}', [UserController::class, 'ubah'])->name('user.ubah');
// Route::post('/user/update_user/{id}', [UserController::class, 'update'])->name('user.update');

// Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
// Route::get('/produk/tambah_produk', [ProdukController::class, 'tambah'])->name('produk.tambah');
// Route::post('/produk/simpan_produk', [ProdukController::class, 'simpan'])->name('produk.simpan');
// Route::get('/produk/ubah_produk/{id}', [ProdukController::class, 'ubah'])->name('produk.ubah');
// Route::post('/produk/update_produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
