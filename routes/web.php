<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Http\Middleware\isUsers;
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

// site önyüz işlemleri

Route::get('ana-sayfa',[Controller::class,'anasayfa'])->name('anasayfa');
Route::get('kurumsal',[Controller::class,'kurumsal'])->name('kurumsal');
Route::get('ekibimiz',[Controller::class,'ekibimiz'])->name('ekibimiz');
Route::get('blog',[Controller::class,'yazilarimiz'])->name('yazilarimiz');
Route::get('hizmetlerimiz',[Controller::class,'hizmetlerimiz'])->name('hizmetlerimiz');
Route::get('galeri',[Controller::class,'galeri'])->name('galeri');
Route::get('iletisim',[Controller::class,'iletisim'])->name('iletisim');
Route::get('/',[Controller::class,'anasayfa'])->name('anasayfa');
Route::post('arama_sonuclari',[Controller::class,'search'])->name('search');

// site önyüz işlmeleri


///////////////////////////////// alt kısım panel ile ilgili  /////////////////////////////////////////////////////

Route::get('/panel/login', function () {
    return view('panel/login');
});

//Login İşlemleri
Route::post('/panel/login',[Panel::class,'login'])->name('login');
Route::post('/panel/admin_logincheck',[Panel::class,'admin_logincheck'])->name('admin_logincheck');

//Panel İşlemleri
Route::group(['prefix' => '/panel','middleware' => 'auth'], function () {
    Route::get('logout',[Panel::class,'logout'])->name('logout');
    Route::get('/',[Panel::class,'panel'])->name('panel');
    Route::get('ayarlar',[Panel::class,'ayarlar'])->name('ayarlar');
    Route::post('menu/sayfa_ekle',[Panel::class,'sayfa_ekle'])->name('sayfa_ekle');
    Route::post('alt_kategori_ekle',[Panel::class,'alt_kategori_ekle'])->name('alt_kategori_ekle');
    Route::post('ilk_kayit',[Panel::class,'ilk_kayit'])->name('ilk_kayit');
    Route::post('sayfa-guncelleme/{id}',[Panel::class,'update'])->name('update');
    Route::get('kayit-guncelleme/{id}',[Panel::class,'kayit_guncelle'])->name('kayit_guncelle');
    Route::post('sayfa-resim-guncelleme',[Panel::class,'sayfa_resim_update'])->name('sayfa_resim_update');
    Route::get('sayfa-seo-guncelleme/{id}',[Panel::class,'seo_sayfa_update'])->name('seo_sayfa_update');
    Route::get('iletisim-seo-guncelleme/{id}',[Panel::class,'seo_iletisim_update'])->name('seo_iletisim_update');
    Route::get('default-seo-guncelleme/{id}',[Panel::class,'seo_default_update'])->name('seo_default_update');
    Route::post('iletisim-guncelleme/{id}',[Panel::class,'iletisim_update'])->name('iletisim_update');
    Route::get('delete/{id}',[Panel::class,'delete'])->name('delete');
    Route::get('sayfalari_sil/{id}',[Panel::class,'sayfalari_sil'])->name('sayfalari_sil');
    Route::get('resmi_sil/{id}',[Panel::class,'resmi_sil'])->name('resmi_sil');
    Route::post('logo/{id}',[Panel::class,'logo'])->name('logo');
    Route::get('menu',[Panel::class,'sayfa_getir'])->name('sayfa_getir');
    Route::get('sayfalari_sifirla',[Panel::class,'sayfalari_sifirla'])->name('sayfalari_sifirla');
    Route::get('sayfa/{id}',[Panel::class,'sayfa'])->name('sayfa');
    Route::get('iletisim',[Panel::class,'iletisim'])->name('iletisim');
});
