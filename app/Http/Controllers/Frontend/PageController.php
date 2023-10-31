<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return view('home');
     }
     function slider(){
        $gallery = DB::table('gallery_photo')->orderby('id_gallery','desc')->paginate(10);
        $titlepage = "Gallery Photo ";
        return view('gallery.list',compact('gallery','titlepage'));
      }

}
