<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class GaleriController extends Controller
{
    
    public function galeri_foto(){
        $galeri_foto =  DB::table('galeris')->orderBy('id','desc')->paginate(8);
 
        return view('frontend.galeri.galeri_foto',array(
        "galeri_foto"=>$galeri_foto));
    }
    public function galeri_video(){
        $galeri_video =  DB::table('video_kegiatans')->orderBy('id','desc')->paginate(8);
 
        return view('frontend.galeri.galeri_video',array(
        "galeri_video"=>$galeri_video));
    }
}
