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
    public function anasayfa()
    {
        $seo = DB::table("pages")->where("slug", "ana-sayfa")->first();
        $iletisim = DB::table("iletisims")->first();
        $slider = DB::table("pages")->where("ust_id", "34")->get();
        $slider_alti = DB::table("pages")->where("id", "37")->first();
        $menu = DB::table("pages")->where("ust_id",null)->get();
        $hizmetler = DB::table("pages")->where("ust_id","3")->get();
        //
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('anasayfa', compact('slider_alti', 'slider', 'iletisim','hizmetler'));
        echo view('includes/footer', compact('seo', 'menu',  'iletisim', 'settings'));
    }
    public function kurumsal()
    {
        $seo = DB::table("pages")->where("slug", "kurumsal")->first();
        $iletisim = DB::table("iletisims")->first();
        $slider = DB::table("pages")->where("ust_id", "34")->get();
        $slider_alti = DB::table("pages")->where("id", "37")->first();
        $menu = DB::table("pages")->where("ust_id",null)->get();
        //
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('hakkimizda', compact('slider_alti', 'seo','slider', 'iletisim'));
        echo view('includes/footer', compact('seo', 'menu',  'iletisim', 'settings'));
    }
    public function hizmetlerimiz()
    {
        $seo = DB::table("pages")->where("slug", "hizmetlerimiz")->first();
        $hizmetlerimiz = DB::table("pages")->where("ust_id", "3")->get();
        $iletisim = DB::table("iletisims")->first();
        $slider = DB::table("pages")->where("ust_id", "34")->get();
        $slider_alti = DB::table("pages")->where("id", "37")->first();
        $menu = DB::table("pages")->where("ust_id",null)->get();
        //
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('hizmetlerimiz', compact('slider_alti','hizmetlerimiz', 'seo','slider', 'iletisim'));
        echo view('includes/footer', compact('seo', 'menu',  'iletisim', 'settings'));
    }
    public function yazilarimiz()
    {
        $seo = DB::table("pages")->where("slug", "blog")->first();
        $yazilarimiz = DB::table("pages")->where("ust_id", "4")->get();
        $iletisim = DB::table("iletisims")->first();
        $menu = DB::table("pages")->where("ust_id",null)->get();
        //
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('yazilarimiz', compact('yazilarimiz', 'seo', 'iletisim'));
        echo view('includes/footer', compact('seo', 'menu',  'iletisim', 'settings'));
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
        $settings = DB::table("users")->first();

        echo view('includes/head', compact('menu', 'seo', 'iletisim','settings'));
        echo view('includes/breadcrumb', compact('seo'));
        echo view('search', compact('arama_sonuclar','iletisim', 'seo', 'calisma_alanlari', 'calisma_alanlari_cat', 'yazilarimiz', 'yazilarimiz_cat'));
        echo view('includes/footer', compact('son_blog_cek', 'seo', 'menu', 'iletisim','settings'));
    }
}
