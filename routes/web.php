<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Yonetim\AnaKategoriController as YoneticiAnaKategori;
use \App\Http\Controllers\Yonetim\AltKategoriController as YoneticiAltKategori;
use \App\Http\Controllers\Yonetim\UrunlerController as YoneticiUrunler;

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

 Route::group(['prefix' => 'yonetim/urunler/laravel-filemanager', 'middleware' => ['web']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });


Route::group(['prefix' => 'yonetim', 'as' => 'yonetim.'], function () {
    Route::get('/anasayfa', function () {
        return view('yonetim.anasayfa');
    })->name('anasayfa');
    Route::resource('anakategori', YoneticiAnaKategori::class);
    Route::resource('altkategori', YoneticiAltKategori::class);
    Route::resource('urunler', YoneticiUrunler::class);
});
