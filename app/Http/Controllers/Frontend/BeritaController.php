<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use URL;


class BeritaController extends Controller
{
    public function baca($id, $title, $tanggal){
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
   

   $title = array('judul'=>$berita->judul,'isi'=>$berita->isi,'url'=>$url,'gambar'=>$gambar);
  
   $berita->dibaca = $berita->dibaca + 1;
   $berita->save();
        return view('frontend.berita.read',array("route"=>"berita", "berita"=>$berita));
    }
 
}
