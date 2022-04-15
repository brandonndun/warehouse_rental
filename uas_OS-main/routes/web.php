<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiwayatController; 
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
//     return view('welcome2');
// });
Route::get('/', function () {
    if (session()->has('user')) {
        return redirect('/login_done');
    }
    return redirect('/no_login');
});
Route::get('/login_done', [RiwayatController::class, 'login_done']);
Route::get('/no_login', [RiwayatController::class, 'no_login']);

Route::post('/loginselesai','App\Http\Controllers\RiwayatController@logindata');
Route::post('/daftar1','App\Http\Controllers\RiwayatController@regis_data');
Route::get('/Sewa', function () {
    return view('Sewa');
});
Route::get('/logout', function () {
    session()->pull('user');
    session()->pull('nama');
    return redirect('/');
});

Route::get('/update','App\Http\Controllers\RiwayatController@update_pass');
Route::get('/invoice/{id_invoice}','App\Http\Controllers\RiwayatController@detailinv');
Route::get('/Riwayat','App\Http\Controllers\RiwayatController@Riwayat');
Route::get('/Transaksi2/{harga}/{namagudang}/{unitgudang}/{tahun}','App\Http\Controllers\RiwayatController@transaksi');
Route::get('/insert/{namagudang}/{unitgudang}/{tahun}/{harga}','App\Http\Controllers\RiwayatController@invoice');
Route::get('/Hubungi', function () {
    return view('Hubungi');
});
Route::get('/Hubungi2', function () {
    return view('Hubungi2');
});
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/LupaPass', function () {
    return view('LupaPass');
});
Route::get('/Keranjang', function () {
    return view('Keranjang');
});
Route::get('/Footer', function () {
    return view('Footer');
});
Route::get('/Daftar', function () {
    return view('Daftar');
});
Route::get('/Konfirmasi', function () {
    return view('Konfirmasi');
});
// Route::get('/Transaksi2', function () {
//     return view('Transaksi');
// });
Route::get('/Invoice', function () {
    return view('Invoice');
});
Route::get('/TentangKami', function () {
    return view('TentangKami');
});
Route::get('/TentangKami2', function () {
    return view('TentangKami2');
});
Route::get('/Profile', function () {
    return view('Profile');
});
Route::get('/Invoice', function () {
    return view('Invoice');
});
// Route::get('/DetailProduk/{UNIT_NO}', function () {
//     return view('DetailProduk');
// });
Route::get('/DetailProduk2/{UNIT_NO}', [RiwayatController::class, 'detail_produk']);

Route::get('/ubahharga/{UNIT_NO}', [RiwayatController::class, 'ubah_harga']);