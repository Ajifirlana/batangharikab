<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{
    function home(){
      $berita_terbaru =  DB::table('beritas')->orderBy('id','desc')->paginate(8);
      $website_skpds =  DB::table('website_skpds')->orderBy('id','desc')->offset(0)->limit(5)->get();
      $image_slider =  DB::table('sliders')->orderBy('id','desc')->offset(0)->limit(5)->get();
      $galeri =  DB::table('galeris')->orderBy('id','desc')->offset(0)->limit(8)->get();
     
       return view('frontend.home.index', array(
      'berita'=>$berita_terbaru,
      'website_skpd'=>$website_skpds,
        'image_slider'=>$image_slider,
        'galeri'=>$galeri,));
     }
     public function page($id){
      $page = Page::findOrfail($id);
      return view('frontend.home.page', array(
        'judul'=>$page->judul,
        'isi'=>$page->isi,
      'created_at'=>$page->created_at));
     }
}
