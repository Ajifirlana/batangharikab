<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Utils\ApiResponse;
use App\Models\Berita;
use Illuminate\Http\Request;
use Spatie\ResponseCache\Facades\ResponseCache;


class BeritaBackandController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:read berita_back|edit berita_back|delete berita_back', ['only' => ['index','show']]);
       $this->middleware('permission:create berita_back', ['only' => ['create','store']]);
       $this->middleware('permission:edit berita_back', ['only' => ['edit','update']]);
       $this->middleware('permission:delete berita_back', ['only' => ['destroy']]);

    }

    use ApiResponse;

    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data Berita';
       $data = Berita::all();
 
       if (request()->ajax()) {
          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
                return view('app.berita.action', compact('data'));
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.berita.index', $x, compact(['data']));
    }

    public function create()
    {
      $x['title']    = 'Data Berita';
       return view('app.berita.tambah-berita',$x);
    }

    public function store(Request $request)
   {
      try {

      $content = $request->body;
       $dom = new \DomDocument();
       $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
       $imageFile = $dom->getElementsByTagName('img');
 
       foreach($imageFile as $item => $image){
           $data = $image->getAttribute('src');
           list($type, $data) = explode(';', $data);
           list(, $data)      = explode(',', $data);
           $imgeData = base64_decode($data);
           $image_name= "/uploads/" . time().$item.'.png';
           $path = public_path() . $image_name;
           file_put_contents($path, $imgeData);
           
           $image->removeAttribute('src');
           $image->setAttribute('src', $image_name);
        }
 
       $content = $dom->saveHTML();
       
      
       
         if($request->file('file')==null){
            Berita::updateOrCreate(
               ['id'               => $request->id],
               [
                  'judul'           => $request->judul,
                  'isi'            => $content,
                  'tanggal'         => $request->tanggal,
                  'tittle_gambar'   => $request->judul_foto,

               ]
            );
   
            if ($request->id)  return $this->success('Berhasil Mengubah Data');
            else return $this->success('Berhasil Menginput Data');

         }

       //  $image_path = $request->file('file')->getPathname();
         $image_path = $request->file('file')->getPathname();
         $nama_gambar = time() . '_' . $request->file('file')->getClientOriginalName();
         $image_mime = $request->file('file')->getmimeType();
         $image_org  = $request->file('file')->getClientOriginalName();
         $url ="https://api-storage.batangharikab.go.id/submit-upload";
         $publicKey="eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2OTg5Njg1OTcsImlzcyI6IiouYmF0YW5naGFyaWthYi5nby5pZCIsImp0aSI6IjA4Y2YzMWNmLTdmZWUtNGE3ZS1hN2NjLWMxNDAyYWQ2NjNkOCIsInN1YiI6ImIwMTAwZGU3LTkwYmUtNGM2NC05ZmM3LWFjZjZlOTdiOTUxYyJ9.U7QiUQXHGqKnBG3aKRd1tmrhvKoTMJZO9-63KTMNEs8QDOMPVCiGNu7r4GCqHq-EJRo6vsvOtryisXI52HfckA";
         $client = new \GuzzleHttp\Client();
         $response = $client->request("POST",$url,[
           "headers"   => ["Authorization" => "Bearer {$publicKey}"],
           "multipart" => [
                  [
                  'name'     => 'file',
                  'filename' => $nama_gambar,
                  'Mime-Type'=> $image_mime,
                  'contents' => fopen( $image_path, 'r' ),
                  ],
             ]

         ]);
         $response=   $response->getBody();
         $responsdata = json_decode($response,true);
         $url=$responsdata['data']['url'];
         // $fileModel = new Pegawai;
         // if($request->file()) {
         //    $image_path = $request->file->getClientOriginalName();
         //    $name_uniqe =   now()->timestamp . '.' . $request->file('file')->getClientOriginalExtension();
         //     //$fileName = time().'_'.$request->file();
         //     $filePath = $request->file('file')->storeAs('uploads', $name_uniqe, 'public');
         //    // $fileModel->nama = time().'_'.$request->file->getClientOriginalName();
         //     $fileModel->nama = '/storage/' . $filePath;
         
         // }
       slider::updateOrCreate(
            ['id'               => $request->id],
            [
               'keterangan'      => $request->keterangan,
               'foto'            => $url,
               'teks'            => $content,
            ]
         );

         if ($request->id)  return $this->success('Berhasil Mengubah Data');
         else return $this->success('Berhasil Menginput Data');
      } catch (\Throwable $th) {
        return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
      }
   }

   public function edit(Berita $berita)
   {

      $x['title']    = 'Edit Berita';
      return view('app.berita.tambah-berita',$x, compact('berita'));
   }

   public function destroy(Berita $Berita)
   {
      try {
         dd( $Berita);
        $Berita->delete();


         return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
      }
   }

   

}
