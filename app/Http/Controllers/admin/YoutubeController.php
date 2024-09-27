<?php

namespace App\Http\Controllers\admin;

use App\Utils\ApiResponse;
use App\Models\VideoKegiatan;
use Illuminate\Http\Request;
use App\Services\FileUploadService;
use Spatie\ResponseCache\Facades\ResponseCache;

use App\Http\Controllers\Controller;


class YoutubeController extends Controller
{
   protected $fileUploadService;
   public function __construct(FileUploadService $fileUploadService)
   {
      $this->middleware('auth');
      $this->middleware('permission:read youtube|edit youtube|delete youtube', ['only' => ['index','show']]);
      $this->middleware('permission:create youtube', ['only' => ['create','store']]);
      $this->middleware('permission:update youtube', ['only' => ['edit','update']]);
      $this->middleware('permission:delete youtube', ['only' => ['destroy']]);
      $this->fileUploadService = $fileUploadService;
   }

    use ApiResponse;

    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data Youtube';
       $data = VideoKegiatan::all();
 
       if (request()->ajax()) {

          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
                return view('app.youtube.action', compact('data'));
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.youtube.index', $x, compact(['data']));
    }



    public function store(Request $request){

      try {

        // $imageName = time().'.'.$request->file->extension(); 
         $file = $request->file('file');
         $foto = $file ? $this->fileUploadService->uploadFile($file) : null;

         // Prepare data for update or create
         $data = [
            'judul' => $request->judul,
            'link'  => $request->link,
         ];

         if ($foto) {
            $data['foto'] = $foto;
         }

         // Update or create the VideoKegiatan entry
         VideoKegiatan::updateOrCreate(['id' => $request->id_youtube], $data);

         // Return success message
         $message = $request->id_youtube ? 'Berhasil Mengubah Data' : 'Berhasil Menginput Data';
         return $this->success($message);


      
 

    } catch (\Throwable $th) {
      return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
    }

    }

   //  public function store(Request $request)
   //  {
   //     try {
   //        if($request->file('file')==null){
   //          VideoKegiatan::updateOrCreate(
   //              ['id'               => $request->id_youtube],
   //              [
   //                 'judul'           => $request->judul,
   //                 'link'           => $request->link,
 
   //              ]
   //           );
    
   //           if ($request->id_youtube)  return $this->success('Berhasil Mengubah Data');
   //           else return $this->success('Berhasil Menginput Data');
 
   //        }

   //        $image_path = $request->file('file')->getPathname();
   //        $nama_gambar = time() . '_' . $request->file('file')->getClientOriginalName();
   //        $image_mime = $request->file('file')->getmimeType();
   //        $image_org  = $request->file('file')->getClientOriginalName();
   //        $url ="https://api-storage.batangharikab.go.id/submit-upload";
   //        $publicKey="eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2OTg5Njg1OTcsImlzcyI6IiouYmF0YW5naGFyaWthYi5nby5pZCIsImp0aSI6IjA4Y2YzMWNmLTdmZWUtNGE3ZS1hN2NjLWMxNDAyYWQ2NjNkOCIsInN1YiI6ImIwMTAwZGU3LTkwYmUtNGM2NC05ZmM3LWFjZjZlOTdiOTUxYyJ9.U7QiUQXHGqKnBG3aKRd1tmrhvKoTMJZO9-63KTMNEs8QDOMPVCiGNu7r4GCqHq-EJRo6vsvOtryisXI52HfckA";
   //        $client = new \GuzzleHttp\Client();
   //        $response = $client->request("POST",$url,[
   //          "headers"   => ["Authorization" => "Bearer {$publicKey}"],
   //          "multipart" => [
   //                 [
   //                 'name'     => 'file',
   //                 'filename' => $nama_gambar,
   //                 'Mime-Type'=> $image_mime,
   //                 'contents' => fopen( $image_path, 'r' ),
   //                 ],
   //            ]
 
   //        ]);
   //        $response=   $response->getBody();
   //        $responsdata = json_decode($response,true);
   //        $url=$responsdata['data']['url'];
   //        VideoKegiatan::updateOrCreate(
   //           ['id'               => $request->id_youtube],
   //           [
   //              'judul'      => $request->judul,
   //              'link'      => $request->link,
   //              'foto'            => $url,
            
   //           ]
   //        );
 
   //        if ($request->id)  return $this->success('Berhasil Mengubah Data');
   //        else return $this->success('Berhasil Menginput Data');
   //     } catch (\Throwable $th) {
   //       return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
   //     }
   //  }

    public function edit($id)
    {

    //  dd($id);
      $youtube = VideoKegiatan::where('id', $id)->first();
 
       return $this->success('Data SKPD', $youtube);
    }
    public function destroy(VideoKegiatan $WebsiteSkpd,Request $request)
    {
       try {

          $id=$request->id;
          $record = VideoKegiatan::find($id);
          $record->delete();
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
       }
    }

}
