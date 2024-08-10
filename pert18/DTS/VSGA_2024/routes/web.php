<?php

use App\Http\Controllers\PageControllerSatu;
use App\Http\Controllers\pengajarController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello VSGA';
});

Route::get('/world', function () {
    return 'hello dunia';
});

Route::get('/', function () {
    return 'selamat datang';
});

Route::get('/about', function () {
    return 'NIM: 2231740005, Nama: Erinthia Dinda Pratiwi';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya adalah ' . $name;
});

Route::get('/posts/{post}/{comment}', function ($post, $comment) {
    return 'Pos ke-' . $post . ' dengan komentar ke-' . $comment;
});

Route::get('/kodebarang/{jenis?}/{merek?}', function ($jk='k01',$mrk='nokia') {
    return "kode barang " . $jk . " dan nama barang " .$mrk;
});

Route::get('about', function () {
    return view ('about');
})->name('about');

Route::get('tampil', function () {
    return view ('tampil');
})->name('tampil');

Route::get('/pesandisini', function () {
    return '<h1> Pesan Disini </h1>';
});
Route::redirect('/contact', '/pesandisini');

// Route::get('/polinema/dosen', function () {
//     return '<h1> Daftar nama dosen </h1>';
// });

// Route::get('/polinema/tendik', function () {
//     return '<h1> Daftar nama tendik </h1>';
// });

// Route::get('/polinema/jurusan', function () {
//     return '<h1> Daftar nama jurusan </h1>';
// });

// Route::prefix('/polinema')->group (function () {
//     Route::get('/dosen', function () {
//         echo '<h1> Daftar nama dosen </h1>';
//     });

//     Route::get('/tendik', function () {
//         echo '<h1> Daftar nama tendik </h1>';
//     });

//     Route::get('/jurusan', function () {
//         echo '<h1> Daftar nama jurusan </h1>';
//     });
// });

Route::prefix('/admin')->group (function () {
    Route::get('/dosen', function () {
        echo '<h1> Daftar nama dosen </h1>';
    });

    Route::get('/tendik', function () {
        echo '<h1> Daftar nama tendik </h1>';
    });

    Route::get('/jurusan', function () {
        echo '<h1> Daftar nama jurusan </h1>';
    });
});

Route::fallback(function () {
    return "Maaf, halaman tidak ditemukan";
});
Route::get('daftar-dosen', [pengajarController::class, 'daftarPengajar']);
Route::get('tabel-dosen', [pengajarController::class, 'tabelPengajar']);
Route::get('blog-dosen', [pengajarController::class, 'blogPengajar']);

Route:: get('pasar-buah', [PageControllerSatu::class, 'satu']);
