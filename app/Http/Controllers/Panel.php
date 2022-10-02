<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\User;
use App\Models\Iletisim_upload;
use App\Models\Pages_kapak;
use App\Models\Iletisim;
use App\Models\Favicons;
use App\Models\Pages_upload;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Panel extends Controller
{
  public function admin_logincheck(Request $request)
  {
    if (Auth::attempt([
      'email' => $request->email,
      'password' => $request->password
    ])) {
      return redirect()->route('panel');
    }
    return redirect()->route('login')->withErrors("Email veya Şifre Hatalı");
  }
  public function logout(Request $request)
  {
    Auth::logout();
    return redirect()->route('login');
  }
  public function sayfa_ekle(Request $request)
  {
    $page = new Page;
    $page->baslik = $request->baslik;
    $page->slug = Str::slug($request->baslik);
    $page->save();
    return back();
  }
  public function alt_kategori_ekle(Request $request)
  {
    $page = new Page;
    $page->baslik = $request->baslik;
    $page->ust_id = $request->id;
    $page->slug = Str::slug($request->baslik);
    $page->save();
    return back();
  }
  public function update(Request $request, $id)
  {
    $page = Page::find($id);

    // resim ekleme

    $images = $request->file('dosya');

    if ($images) {

      $page->baslik = $request->baslik;
      $page->text1 = $request->text1;
      $page->text2 = $request->text2;
      $page->text3 = $request->text3;
      $page->text4 = $request->text4;
      $page->text5 = $request->text5;
      $page->text6 = $request->text6;
      $page->text7 = $request->text7;
      $page->text8 = $request->text8;
      $page->text9 = $request->text9;
      $page->text10 = $request->text10;
      $page->ozet = $request->ozet;
      $page->icerik = $request->icerik;
      $page->slug = Str::slug($request->baslik);

      $new_name = rand() . '.' . $images->getClientOriginalExtension();
      $images->move(public_path('uploads'), $new_name);
      $page->gosterim_resmi = $new_name;

      $page->save();
      return back();
    } else {

      $page->baslik = $request->baslik;
      $page->text1 = $request->text1;
      $page->text2 = $request->text2;
      $page->text3 = $request->text3;
      $page->text4 = $request->text4;
      $page->text5 = $request->text5;
      $page->text6 = $request->text6;
      $page->text7 = $request->text7;
      $page->text8 = $request->text8;
      $page->text9 = $request->text9;
      $page->text10 = $request->text10;
      $page->ozet = $request->ozet;
      $page->icerik = $request->icerik;
      $page->slug = Str::slug($request->baslik);

      $page->save();
      return back();
    }
  }
  public function sayfa_resim_update(Request $request)
  {
    $images = $request->file('dosya');
    $new_name = rand() . '.' . $images->getClientOriginalExtension();
    $images->move(public_path('uploads'), $new_name);
    $pages_uploads = new Pages_upload();
    $pages_uploads->dosya = $new_name;
    $pages_uploads->gelen_id = $request->id;
    $pages_uploads->save();
    return back();
  }
  public function seo_sayfa_update(Request $request, $id)
  {
    $page = Page::find($id);
    $page->title = $request->title;
    $page->desc = $request->desc;
    $page->save();
    return back();
  }
  public function seo_iletisim_update(Request $request, $id)
  {
    $iletisims = iletisim::find($id);
    $iletisims->title = $request->title;
    $iletisims->desc = $request->desc;
    $iletisims->save();
    return back();
  }
  public function seo_default_update(Request $request, $id)
  {
    $users = User::find($id);
    $users->title = $request->title;
    $users->desc = $request->desc;
    $users->save();
    return back();
  }
  public function iletisim_update(Request $request, $id)
  {
    $iletisim = Iletisim::find($id);

    $images = $request->file('dosya');

    if ($images) {

      $iletisim->baslik = $request->baslik;
      $iletisim->adres = $request->adres;
      $iletisim->tel1 = $request->tel1;
      $iletisim->tel2 = $request->tel2;
      $iletisim->tel3 = $request->tel3;
      $iletisim->fax = $request->fax;
      $iletisim->mail = $request->mail;
      $iletisim->facebook = $request->facebook;
      $iletisim->twitter = $request->twitter;
      $iletisim->instagram = $request->instagram;
      $iletisim->google = $request->google;
      $iletisim->whatsapp = $request->whatsapp;
      $iletisim->ar_id = $request->ar_id;

      $new_name = rand() . '.' . $images->getClientOriginalExtension();
      $images->move(public_path('uploads'), $new_name);
      $iletisim->gosterim_resmi = $new_name;

      $iletisim->save();
      return back();
    } else {

      $iletisim->baslik = $request->baslik;
      $iletisim->adres = $request->adres;
      $iletisim->tel1 = $request->tel1;
      $iletisim->tel2 = $request->tel2;
      $iletisim->tel3 = $request->tel3;
      $iletisim->fax = $request->fax;
      $iletisim->mail = $request->mail;
      $iletisim->facebook = $request->facebook;
      $iletisim->twitter = $request->twitter;
      $iletisim->instagram = $request->instagram;
      $iletisim->google = $request->google;
      $iletisim->whatsapp = $request->whatsapp;
      $iletisim->ar_id = $request->ar_id;
      $iletisim->save();
      return back();
    }
  }
  public function delete(Request $request, $id)
  {
    $page = Page::find($id);
    $page->baslik = $request->baslik;
    $page->slug = Str::slug($request->baslik);
    $page->delete();
    return back();
  }
  public function kayit_guncelle(Request $request, $id)
  {
    $users = User::find($id);
    $users->email = $request->email;
    $users->password = bcrypt($request->password);
    $users->save();
    return back();
  }
  public function logo(Request $request, $id)
  {
    $users = User::find($id);

    $logo = $request->file('logo');
    $logo2 = $request->file('logo2');
    $favicon = $request->file('favicon');

    if ($logo) {
      $new_name = rand() . '.' . $logo->getClientOriginalExtension();
      $logo->move(public_path('uploads'), $new_name);
      $users->logo = $new_name;
      $users->save();
      return back();
    } else if ($logo2) {
      $new_name = rand() . '.' . $logo2->getClientOriginalExtension();
      $logo2->move(public_path('uploads'), $new_name);
      $users->logo2 = $new_name;
      $users->save();
      return back();
    } else if ($favicon) {
      $new_name = rand() . '.' . $favicon->getClientOriginalExtension();
      $favicon->move(public_path('uploads'), $new_name);
      $users->favicon = $new_name;
      $users->save();
      return back();
    } else {
      $logo = $request->file('logo');
      $logo2 = $request->file('logo2');
      $favicon = $request->file('favicon');
      $new_name = rand() . '.' . $logo->getClientOriginalExtension();
      $logo->move(public_path('uploads'), $new_name);
      $users->logo = $new_name;
      $new_name = rand() . '.' . $logo2->getClientOriginalExtension();
      $logo2->move(public_path('uploads'), $new_name);
      $users->logo2 = $new_name;
      $new_name = rand() . '.' . $favicon->getClientOriginalExtension();
      $favicon->move(public_path('uploads'), $new_name);
      $users->favicon = $new_name;
      $users->save();
      return back();
    }
  }
  public function sayfalari_sil(Request $request, $id)
  {
    DB::table('pages')->where("ust_id", $id)->delete();
    DB::table('pages')->where("id", $id)->delete();
    return back();
  }
  public function resmi_sil(Request $request, $id)
  {
    $onceki_resim = DB::table('pages_uploads')->where('id', $id)->first()->dosya;
    $pages_uploads = Pages_upload::find($id);
    File::Delete("uploads/" . $onceki_resim);
    DB::table('pages_uploads')->where("id", $id)->delete();
    return back();
  }
  public function sayfalari_sifirla()
  {
    DB::table('pages')->truncate();
    return back();
  }
  public function sayfa_getir()
  {
    $data = DB::table('pages')->get();
    return view('panel/menu', compact('data'));
  }
  public function panel()
  {
    return view('panel/index');
  }
  public function ayarlar()
  {
    $data = DB::table("users")->first();
    return view('panel/ayarlar', compact('data'));
  }
  public function sayfa($id)
  {
    $data = DB::table("pages")->where("id", $id)->first();
    $alt_data = DB::table("pages")->where("ust_id", $id)->get();
    return view('panel/sayfa', compact('data','alt_data'));
  }
  public function iletisim()
  {
    $data = DB::table("iletisims")->first();
    return view('panel/iletisim', compact('data'));
  }
  public function page_edit_get($id)
  {
    $data = DB::table("pages")->where("id", $id)->get();
    return view('panel.pageupdate', compact('data'));
  }
}
