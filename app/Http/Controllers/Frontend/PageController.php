<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use DB;use Carbon\Carbon;

use App\Models\Berita;
use App\Models\StatistikPengunjung;

class PageController extends Controller
{
function home(){
      
$today = Carbon::now()->format('d');
$bulan_ini = Carbon::now()->format('m');

$statistik_pengunjung = StatistikPengunjung::find(1);

$tambah = $statistik_pengunjung->dilihat + 1;

$tgl_db = $statistik_pengunjung->created_at->format('d');
$bulan_db = $statistik_pengunjung->created_at->format('m');
$hari_ini = $statistik_pengunjung->hari_ini;
$bulan_ini_db = $statistik_pengunjung->bulan_ini;

if ($today != $tgl_db) {
    $hari_ini = 1;
} else {
    $hari_ini += 1;
}

if ($bulan_ini != $bulan_db) {
    $bulan_ini_db = $bulan_ini;
    $bulan_ini = 1;
} else {
    $bulan_ini = $bulan_ini_db + 1;
}

$statistik_pengunjung->update([
    'dilihat' => $tambah,
    'hari_ini' => $hari_ini,
    'bulan_ini' => $bulan_ini,
    'created_at' => Carbon::now()
]);
      $berita_terbaru =  DB::table('beritas')->orderBy('id','desc')->paginate(8);
      $website_skpds =  DB::table('website_skpds')->orderBy('id','desc')->offset(0)->limit(5)->get();
      $image_slider =  DB::table('sliders')->orderBy('id','desc')->offset(0)->limit(5)->get();
      $galeri =  DB::table('galeris')->orderBy('id','desc')->offset(0)->limit(4)->get();
      $video =  DB::table('video_kegiatans')->orderBy('id','desc')->offset(0)->limit(8)->get();
      $latestRecord = Berita::latest('created_at')->first();
      $berita_terbaru_new = Berita::latest()->skip(1)->take(2)->get();
      $infografis =  DB::table('infografis')->orderBy('id','desc')->offset(0)->limit(4)->get();
        
     // return $latestRecord;
     
       return view('frontend.home.index', array(
      'berita'=>$berita_terbaru,
      'berita_terbaru_new'=>$berita_terbaru_new,
      'latestRecord'=>$latestRecord,
      'website_skpd'=>$website_skpds,
      'infografis'=>$infografis,
        'image_slider'=>$image_slider,
        'galeri'=>$galeri,
        'video'=>$video,
      ));
}
     public function page($slug){
      
     
      $page = Page::where('slug', $slug)->firstOrFail();
     // $berita_terbaru =  DB::table('beritas')->orderBy('id','desc')->offset(0)->limit(5)->get();
      $berita_terbaru =  Berita::orderBy('created_at','desc')->offset(0)->limit(5)->get();
      return view('frontend.home.page', array(
        'slug' =>$slug,
        'judul'=>$page->judul,
        'isi'=>$page->isi,
      'created_at'=>$page->created_at,
      'berita_terbaru'=>$berita_terbaru,));
     }

     public function downloadFile($file)
    {
        $myFile = public_path("frontend/infografis/file/".$file);
        $headers = ['Content-Type: application/pdf'];
        //dd($myFile);
       // $newName = 'itsolutionstuff-pdf-file-'.time().'.pdf';
      
        return response()->download($myFile);
    }

    public function show($file)
    {
       $myFile = public_path("frontend/infografis/file/".$file);
       
        
       return response()->file($myFile,['content-type'=>'application/pdf']);

    }

    public function index(){
      //$berita =  Berita::orderBy('created_at','desc')->paginate(8);
      $infografis =  DB::table('infografis')->orderBy('id','desc')->get();
      return view('frontend.infografis.index',array("infografis"=>$infografis));
    }

    private function getPageContent($slug)
    {
        // Fetch page content from the database or other sources
        // This is just a placeholder function
        return "Content for page {$slug}";
    }


}
