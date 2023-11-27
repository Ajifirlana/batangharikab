<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use URL;
use DB;

class BeritaController extends Controller
{
    public function baca($id, $title, $tanggal){
      $video_kegiatan =  DB::table('video_kegiatan')->orderBy('id','desc')->offset(0)->limit(5)->get();
  $image_slider =  DB::table('slider')->orderBy('id','desc')->offset(0)->limit(5)->get();
      $berita = Berita::find($id);
   if (!$berita ){
       throw new HttpException(404);
   }
   $url =  URL::to("baca/".$berita->id."/".str_replace(' ','-',$berita->judul)."/".$berita->tanggal);
   if($berita->gambar){
     $gambar = URL::to('berita/'.$berita->gambar);
   }else{
     $gambar = URL::to('images/ppid-share.png');
   }
    
        return view('frontend.berita.read',array("route"=>"berita", 
        
        "berita"=>$berita,
        "video_kegiatan"=>$video_kegiatan,
        'image_slider'=>$image_slider));
    }
 
}
