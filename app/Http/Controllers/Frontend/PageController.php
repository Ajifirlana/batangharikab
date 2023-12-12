<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{
    function home(){
      $berita_terbaru =  DB::table('berita')->orderBy('tanggal','desc')->offset(0)->limit(8)->get();
      $video_kegiatan =  DB::table('video_kegiatans')->orderBy('id','desc')->offset(0)->limit(5)->get();
      $image_slider =  DB::table('sliders')->orderBy('id','desc')->offset(0)->limit(5)->get();
      $galeri =  DB::table('galeris')->orderBy('id','desc')->offset(0)->limit(5)->get();
     
       return view('frontend.home.index', array(
      'berita_terbaru'=>$berita_terbaru,
        'video_kegiatan'=>$video_kegiatan,
        'image_slider'=>$image_slider,
        'galeri'=>$galeri,));
     }

}
