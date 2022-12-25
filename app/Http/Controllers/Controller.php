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
        $seo = Page::where("slug", "ana-sayfa")->first();
        $iletisim = Iletisim::first();
        $slider = Page::where("ust_id", "34")->get();
        $slider_alti = Page::where("id", "37")->first();
        $menu = Page::where("ust_id",null)->get();
        $hizmetler = Page::where("ust_id","3")->get();
        //
        $settings = User::first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('anasayfa', compact('slider_alti', 'slider', 'iletisim','hizmetler'));
        echo view('includes/footer', compact('seo', 'menu',  'iletisim', 'settings'));
    }
    public function kurumsal()
    {
        $seo = Page::where("slug", "kurumsal")->first();
        $iletisim = Iletisim::first();
        $slider = Page::where("ust_id", "34")->get();
        $slider_alti = Page::where("id", "37")->first();
        $menu = Page::where("ust_id",null)->get();
        //
        $settings = User::first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('hakkimizda', compact('slider_alti', 'seo','slider', 'iletisim'));
        echo view('includes/footer', compact('seo', 'menu',  'iletisim', 'settings'));
    }
    public function hizmetlerimiz()
    {
        $seo = Page::where("slug", "hizmetlerimiz")->first();
        $hizmetlerimiz = Page::where("ust_id", "3")->get();
        $iletisim = Iletisim::first();
        $slider = Page::where("ust_id", "34")->get();
        $slider_alti = Page::where("id", "37")->first();
        $menu = Page::where("ust_id",null)->get();
        //
        $settings = User::first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('hizmetlerimiz', compact('slider_alti','hizmetlerimiz', 'seo','slider', 'iletisim'));
        echo view('includes/footer', compact('seo', 'menu',  'iletisim', 'settings'));
    }
    public function yazilarimiz()
    {
        $seo = Page::where("slug", "blog")->first();
        $yazilarimiz = Page::where("ust_id", "4")->get();
        $iletisim = Iletisim::first();
        $menu = Page::where("ust_id",null)->get();
        //
        $settings = User::first();

        echo view('includes/head', compact('menu', 'seo',  'iletisim', 'settings'));
        echo view('yazilarimiz', compact('yazilarimiz', 'seo', 'iletisim'));
        echo view('includes/footer', compact('seo', 'menu',  'iletisim', 'settings'));
    }
    public function iletisim()
    {
        $seo = Page::where("slug", "iletisim")->first();
        $iletisim = Iletisim::first();
        $menu = Page::get();
        //
        $calisma_alanlari = Page::where("id", 3)->first();
        $calisma_alanlari_cat = Page::where("ust_id", 3)->get();
        $yazilarimiz = Page::where("ust_id", 4)->first();
        $yazilarimiz_cat = Page::where("ust_id", 4)->get();
        $son_blog_cek = Page::where("ust_id", 4)->limit(4)->get();
        $settings = User::first();

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
        $arama_sonuclar = Page::where('baslik','LIKE', "%$aranan%")->orWhere('icerik','LIKE', "$aranan%")->orWhere('icerik','LIKE', "%$aranan%")->get();
        $iletisim = Iletisim::first();
        $menu = Page::get();
        //
        $settings = User::first();

        echo view('includes/head', compact('menu', 'seo', 'iletisim','settings'));
        echo view('includes/breadcrumb', compact('seo'));
        echo view('search', compact('arama_sonuclar','iletisim', 'seo', 'calisma_alanlari', 'calisma_alanlari_cat', 'yazilarimiz', 'yazilarimiz_cat'));
        echo view('includes/footer', compact('son_blog_cek', 'seo', 'menu', 'iletisim','settings'));
    }
}
