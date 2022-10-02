<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function ana()
    {
        $seo = DB::table("pages")->where("slug", "ana-sayfa")->first();
        $iletisim = DB::table("iletisims")->first();
        $slider = DB::table("pages")->where("ust_id", "28")->get();
        $menu = DB::table("pages")->get();
        //
        $uclu_alan = Db::table('pages')->where("ust_id", 23)->get();
        $calisma_alanlari = Db::table('pages')->where("id", 3)->first();
        $calisma_alanlari_cat = Db::table('pages')->where("ust_id", 3)->get();
        $yazilarimiz = Db::table('pages')->where("ust_id", 4)->first();
        $yazilarimiz_cat = Db::table('pages')->where("ust_id", 4)->get();
        $son_blog_cek = Db::table('pages')->where("ust_id", 4)->limit(4)->get();
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('anasayfa', compact('uclu_alan', 'slider', 'calisma_alanlari', 'calisma_alanlari_cat', 'iletisim', 'yazilarimiz', 'yazilarimiz_cat'));
        echo view('includes/footer', compact('son_blog_cek', 'seo', 'menu',  'iletisim', 'settings'));
    }
    public function anasayfa()
    {
        $seo = DB::table("pages")->where("slug", "ana-sayfa")->first();
        $iletisim = DB::table("iletisims")->first();
        $slider = DB::table("pages")->where("ust_id", "28")->get();
        $menu = DB::table("pages")->get();
        //
        $uclu_alan = Db::table('pages')->where("ust_id", 23)->get();
        $calisma_alanlari = Db::table('pages')->where("id", 3)->first();
        $calisma_alanlari_cat = Db::table('pages')->where("ust_id", 3)->get();
        $yazilarimiz = Db::table('pages')->where("ust_id", 4)->first();
        $yazilarimiz_cat = Db::table('pages')->where("ust_id", 4)->get();
        $son_blog_cek = Db::table('pages')->where("ust_id", 4)->limit(4)->get();
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('anasayfa', compact('uclu_alan', 'slider', 'calisma_alanlari', 'calisma_alanlari_cat', 'iletisim', 'yazilarimiz', 'yazilarimiz_cat'));
        echo view('includes/footer', compact('son_blog_cek', 'seo', 'menu',  'iletisim', 'settings'));
    }
    public function hakkimizda()
    {
        $seo = DB::table("pages")->where("slug", "hakkimizda")->first();
        $iletisim = DB::table("iletisims")->first();
        $menu = DB::table("pages")->get();
        //
        $calisma_alanlari = Db::table('pages')->where("id", 3)->first();
        $calisma_alanlari_cat = Db::table('pages')->where("ust_id", 3)->get();
        $yazilarimiz = Db::table('pages')->where("ust_id", 4)->first();
        $yazilarimiz_cat = Db::table('pages')->where("ust_id", 4)->get();
        $son_blog_cek = Db::table('pages')->where("ust_id", 4)->limit(4)->get();
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('includes/breadcrumb', compact('seo'));
        echo view('hakkimizda', compact('seo', 'calisma_alanlari', 'calisma_alanlari_cat', 'yazilarimiz', 'yazilarimiz_cat'));
        echo view('includes/footer', compact('son_blog_cek', 'seo', 'menu',  'iletisim', 'settings'));
    }
    public function ekibimiz()
    {
        $seo = DB::table("pages")->where("slug", "ekibimiz")->first();
        $iletisim = DB::table("iletisims")->first();
        $menu = DB::table("pages")->get();
        //
        $calisma_alanlari = Db::table('pages')->where("id", 3)->first();
        $calisma_alanlari_cat = Db::table('pages')->where("ust_id", 3)->get();
        $yazilarimiz = Db::table('pages')->where("ust_id", 4)->first();
        $yazilarimiz_cat = Db::table('pages')->where("ust_id", 4)->get();
        $son_blog_cek = Db::table('pages')->where("ust_id", 4)->limit(4)->get();
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('includes/breadcrumb', compact('seo'));
        echo view('ekibimiz', compact('seo', 'calisma_alanlari', 'calisma_alanlari_cat', 'yazilarimiz', 'yazilarimiz_cat'));
        echo view('includes/footer', compact('son_blog_cek', 'seo', 'menu',  'iletisim', 'settings'));
    }
    public function calisma_alanlarimiz()
    {
        $seo = DB::table("pages")->where("slug", "calisma-alanlarimiz")->first();
        $iletisim = DB::table("iletisims")->first();
        $menu = DB::table("pages")->get();
        //
        $calisma_alanlari = Db::table('pages')->where("id", 3)->first();
        $calisma_alanlari_cat = Db::table('pages')->where("ust_id", 3)->get();
        $yazilarimiz = Db::table('pages')->where("ust_id", 4)->first();
        $yazilarimiz_cat = Db::table('pages')->where("ust_id", 4)->get();
        $son_blog_cek = Db::table('pages')->where("ust_id", 4)->limit(4)->get();
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('includes/breadcrumb', compact('seo'));
        echo view('hizmetlerimiz', compact('seo', 'calisma_alanlari', 'calisma_alanlari_cat', 'yazilarimiz', 'yazilarimiz_cat'));
        echo view('includes/footer', compact('son_blog_cek', 'seo', 'menu',  'iletisim', 'settings'));
    }
    public function yazilarimiz()
    {
        $seo = DB::table("pages")->where("slug", "yazilarimiz")->first();
        $iletisim = DB::table("iletisims")->first();
        $menu = DB::table("pages")->get();
        //
        $calisma_alanlari = Db::table('pages')->where("id", 3)->first();
        $calisma_alanlari_cat = Db::table('pages')->where("ust_id", 3)->get();
        $yazilarimiz = Db::table('pages')->where("ust_id", 4)->first();
        $yazilarimiz_cat = Db::table('pages')->where("ust_id", 4)->get();
        $son_blog_cek = Db::table('pages')->where("ust_id", 4)->limit(4)->get();
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('includes/breadcrumb', compact('seo'));
        echo view('yazilarimiz', compact('seo', 'calisma_alanlari', 'calisma_alanlari_cat', 'yazilarimiz', 'yazilarimiz_cat'));
        echo view('includes/footer', compact('son_blog_cek', 'seo', 'menu',  'iletisim', 'settings'));
    }
    public function iletisim()
    {
        $seo = DB::table("pages")->where("slug", "iletisim")->first();
        $iletisim = DB::table("iletisims")->first();
        $menu = DB::table("pages")->get();
        //
        $calisma_alanlari = Db::table('pages')->where("id", 3)->first();
        $calisma_alanlari_cat = Db::table('pages')->where("ust_id", 3)->get();
        $yazilarimiz = Db::table('pages')->where("ust_id", 4)->first();
        $yazilarimiz_cat = Db::table('pages')->where("ust_id", 4)->get();
        $son_blog_cek = Db::table('pages')->where("ust_id", 4)->limit(4)->get();
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo', 'iletisim'));
        echo view('includes/breadcrumb', compact('seo'));
        echo view('iletisim', compact('iletisim', 'seo', 'calisma_alanlari', 'calisma_alanlari_cat', 'yazilarimiz', 'yazilarimiz_cat'));
        echo view('includes/footer', compact('son_blog_cek', 'seo', 'menu', 'iletisim'));
    }
    public function search(Request $request)
    {
        $aranan = $request->search;
        $seo = (object)[
            "title"=>"test",
            "desc"=>"test",
            "baslik"=>"test",
            "gosterim_resmi"=>"test"
        ];
        $arama_sonuclar = DB::table("pages")->where('baslik','LIKE', "%$aranan%")->orWhere('icerik','LIKE', "$aranan%")->orWhere('icerik','LIKE', "%$aranan%")->get();
        $iletisim = DB::table("iletisims")->first();
        $menu = DB::table("pages")->get();
        //
        $calisma_alanlari = Db::table('pages')->where("id", 3)->first();
        $calisma_alanlari_cat = Db::table('pages')->where("ust_id", 3)->get();
        $yazilarimiz = Db::table('pages')->where("ust_id", 4)->first();
        $yazilarimiz_cat = Db::table('pages')->where("ust_id", 4)->get();
        $son_blog_cek = Db::table('pages')->where("ust_id", 4)->limit(4)->get();
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo', 'iletisim','settings'));
        echo view('includes/breadcrumb', compact('seo'));
        echo view('search', compact('arama_sonuclar','iletisim', 'seo', 'calisma_alanlari', 'calisma_alanlari_cat', 'yazilarimiz', 'yazilarimiz_cat'));
        echo view('includes/footer', compact('son_blog_cek', 'seo', 'menu', 'iletisim','settings'));
    }
}
