<?php

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

Route::get('/', 'HomeController@index')->name('home.index');


Route::get('/DataGereja', 'DataGerejaController@index')->name('DataGereja.index');
Route::get('/Renungan', 'RenunganController@index')->name('Renungan.index');
Route::get('/Tentang', 'TentangController@index')->name('Tentang.index');

Route::middleware(['beforeauth'])->group(function () {
    Route::get('/login', 'AuthController@index')->name('auth.index');
    Route::post('/login', 'AuthController@login')->name('auth.login');
});
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/logout', 'AuthController@logout')->name('auth.logout');
    Route::get('/BeritaGereja', 'BeritaController@index')->name('BeritaGereja.index');
    Route::get('/Berita', 'BeritaController@show')->name('Berita.index');
    Route::get('/tambah-berita', 'BeritaController@create')->name('Berita.create');
    Route::post('/tambah-berita', 'BeritaController@store')->name('Berita.store');
    Route::get('/ubah-berita/{id}', 'BeritaController@edit')->name('Berita.edit');
    Route::post('/ubah-berita/{id}', 'BeritaController@update')->name('Berita.update');
    Route::prefix('pendeta')->group(function () {
        Route::get('/', 'HomeController@dhasboard')->name('Home.index');
        Route::get('/', 'HomeController@dhasboard')->name('pendeta.index');
        Route::get("/data/keluarga", 'PendetaController@datakeluarga')->name('pendeta.datakeluarga');
        Route::get("/data/keluarga/add", 'PendetaController@formkeluarga')->name('pendeta.formkeluarga');
        Route::post("/data/keluarga/add", 'PendetaController@formkeluargaprocess')->name('pendeta.formkeluarga');
        Route::get("/data/keluarga/{id}", 'PendetaController@detailkeluarga')->name('pendeta.detailkeluarga');
        Route::get("/data/jemaat/add/{idKeluarga}", 'PendetaController@formjemaat')->name('pendeta.formjemaat');
        Route::post("/data/jemaat/add/{idKeluarga}", 'PendetaController@formjemaatprocess')->name('pendeta.formjemaat');
        Route::get("/data/keuangan", 'KeuanganController@index')->name('pendeta.datakeuangan');
        Route::get("/data/keuangan/nonaktif", 'KeuanganController@index2')->name('pendeta.datakeuangannonaktif');
        Route::get("/data/keuangan/add", 'KeuanganController@formkeuangan')->name('pendeta.formtambahkeuangan');
        Route::post("/data/keuangan/add", 'KeuanganController@formkeuanganprocess')->name('pendeta.formtambahkeuangan');
        Route::get("/data/keuangan/edit/{id}", 'KeuanganController@ubahkeuangan')->name('pendeta.formubahkeuangan');
        Route::post("/data/keuangan/update/{id}", 'KeuanganController@updatekeuangan')->name('pendeta.formupdatekeuangan');
        Route::get("/data/keuangan/edit/status/{id}", 'KeuanganController@ubahstatuskeuangan')->name('pendeta.formubahstatus');
        Route::get("/data/keuangan/edit/status/nonaktif/{id}", 'KeuanganController@ubahstatuskeuangan2')->name('pendeta.formubahstatus2');
        Route::get("/data/dana-pemasukan", 'KeuanganController@pemasukan')->name('pendeta.danapemasukan');
        Route::get("/data/dana-pengeluaran", 'KeuanganController@pengeluaran')->name('pendeta.danapengeluaran');
        Route::get("/data/laporan-keuangan", 'KeuanganController@laporan')->name('pendeta.laporankeuangan');
        Route::get("/data/laporan-keuangan/nonaktif", 'KeuanganController@laporan2')->name('pendeta.laporankeuangannonaktif');
        Route::get("/data/laporan-keuangan/edit/status/{id}", 'KeuanganController@ubahstatuslaporan')->name('pendeta.formubahstatuslaporan');
        Route::get("/data/laporan-keuangan/edit/status/nonaktif/{id}", 'KeuanganController@ubahstatuslaporan2')->name('pendeta.formubahstatuslaporan2');
        Route::get("/data/laporan-keuangan/add", 'KeuanganController@laporankeuangan')->name('pendeta.formtambahlaporankeuangan');
        Route::post("/data/laporan-keuangan/add", 'KeuanganController@laporankeuanganprocess')->name('pendeta.formtambahlaporankeuangan');
        Route::get("/data/laporan-keuangan/edit/{id}", 'KeuanganController@ubahlaporankeuangan')->name('pendeta.formubahlaporankeuangan');
        Route::post("/data/laporan-keuangan/update/{id}", 'KeuanganController@ubahlaporankeuanganprocess')->name('pendeta.formubahlaporankeuangan');
        Route::get("/data/laporan-keuangan/cari-mingguan", 'KeuanganController@carilaporanmingguan')->name('pendeta.formcarilaporanmingguan');
        Route::get("/data/laporan-keuangan/cari-mingguan/", 'KeuanganController@processcarilaporanmingguan')->name('pendeta.formcarilaporanmingguan');
        Route::get("/data/laporan-keuangan/cari-bulanan", 'KeuanganController@carilaporanbulanan')->name('pendeta.formcarilaporanbulanan');
        Route::get("/data/laporan-keuangan/cari-bulanan/", 'KeuanganController@processcarilaporanbulanan')->name('pendeta.formcarilaporanbulanan');
        Route::get("/data/laporan-keuangan/cari-tahunan", 'KeuanganController@carilaporantahunan')->name('pendeta.formcarilaporantahunan');
        Route::get("/data/laporan-keuangan/cari-tahunan/", 'KeuanganController@processcarilaporantahunan')->name('pendeta.formcarilaporantahunan');
        Route::get("/data/laporan-keuangan-mingguan/{tanggal_awal}/{tanggal_akhir}/{id}", 'KeuanganController@laporanmingguan')->name('pendeta.laporanmingguan');
        Route::get("/data/laporan-keuangan-bulanan/{tanggal_awal}/{tanggal_akhir}/{id}", 'KeuanganController@laporanbulanan')->name('pendeta.laporanbulanan');
        Route::get("/data/laporan-keuangan-tahunan/{tanggal_awal}/{tanggal_akhir}/{id}", 'KeuanganController@laporantahunan')->name('pendeta.laporantahunan');
    });
    Route::prefix('Tatausaha')->group(function () {
        Route::get('/pelayangereja', 'TataUsahaController@index')->name('Tatausaha.index');
    });
});
Route::fallback(function () {
    abort(404);
});
