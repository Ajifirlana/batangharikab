<?php

namespace App\Http\Controllers\admin;

use App\Utils\ApiResponse;
use App\Models\Infografis;
use Illuminate\Http\Request;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Services\FileUploadService;
use App\Http\Controllers\Controller;


class InfografisController extends Controller
{

   protected $fileUploadService;
    public function __construct(FileUploadService $fileUploadService)
    {
       $this->middleware('auth');
       $this->middleware('permission:read youtube|edit skpd|delete youtube', ['only' => ['index','show']]);
       $this->middleware('permission:create youtube', ['only' => ['create','store']]);
       $this->middleware('permission:edit youtube', ['only' => ['edit','update']]);
       $this->middleware('permission:delete youtube', ['only' => ['destroy']]);
       $this->fileUploadService = $fileUploadService;
    }

    use ApiResponse;

    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data Infografis';
       $data = Infografis::all();
     //return $data;
       if (request()->ajax()) {
          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
                return view('app.infografis.action', compact('data'));
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.infografis.index', $x, compact(['data']));
    }

    public function store(Request $request){

       try {

          //  $imageName = time().'.'.$request->foto->extension();  

          //  $fileName = time().'.'.$request->file->extension();  

            $tanggal_new = $request->input('tanggal');

         

           // Parse the date using Carbon
           $parsedDate = Carbon::parse($tanggal_new);
   
           // Format the date as needed
           $foto = $request->file('foto');
           $file_pdf = $request->file('file');
           $formattedDate = $parsedDate->format('Y-m-d'); //
           $foto = $this->fileUploadService->uploadFile($foto);
           $file_pdf = $this->fileUploadService->uploadFile($file_pdf);
    

                        Infografis::updateOrCreate(
                           ['id'           => $request->id_info],
                           [ 
                              'judul'      => $request->judul,
                              'tanggal'    => $formattedDate,
                              'gambar'       => $foto,
                              'file'       => $file_pdf,
            
                           ]
                        );

                  // $request->foto->move(public_path('frontend/infografis/foto'), $imageName);
                  // $request->file->move(public_path('frontend/infografis/file'), $fileName);
         
                  if ($request->id_info) 
                  return $this->success('Berhasil Mengubah Data');
                  else 
                  return $this->success('Berhasil Menginput Data');

      } catch (\Throwable $th) {
                  return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
      }      


    }

   //  public function store(Request $request)
   //  {
   //     try {
   //      //simpan foto ke lokal
   //    //    $request->validate([
   //    //       'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   //    //   ]);
    
   //    //   $imageName = time().'.'.$request->image->extension();  
   //    //   $request->image->move(public_path('frontend\galeri'), $imageName);


   //        if($request->file('foto')==null){
   //          Infografis::updateOrCreate(
   //              ['id'           => $request->id],
   //              [
   //                 'judul'      => $request->judul,
   //                 'tanggal'    =>  $request->tanggal,
   //                 'gambar'       => $request->tanggal,
   //                 'file'       => $request->tanggal,
 
   //              ]
   //           );
    
   //           if ($request->id)  return $this->success('Berhasil Mengubah Data');
   //           else return $this->success('Berhasil Menginput Data');
 
   //        }
   //        //simpan foto ke firebase api
   //        $image_path = $request->file('foto')->getPathname();
   //        $file_pdf = $request->file('file_pdf')->getPathname();
   //       //  $nama_gambar = time() . '_' . $request->file('foto')->getClientOriginalName();
   //       //  $image_mime = $request->file('foto')->getmimeType();
   //       //  $image_org  = $request->file('foto')->getClientOriginalName();
   //       //  $url ="https://api-storage.batangharikab.go.id/submit-upload";
   //       //  $publicKey="eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2OTg5Njg1OTcsImlzcyI6IiouYmF0YW5naGFyaWthYi5nby5pZCIsImp0aSI6IjA4Y2YzMWNmLTdmZWUtNGE3ZS1hN2NjLWMxNDAyYWQ2NjNkOCIsInN1YiI6ImIwMTAwZGU3LTkwYmUtNGM2NC05ZmM3LWFjZjZlOTdiOTUxYyJ9.U7QiUQXHGqKnBG3aKRd1tmrhvKoTMJZO9-63KTMNEs8QDOMPVCiGNu7r4GCqHq-EJRo6vsvOtryisXI52HfckA";
   //       //  $client = new \GuzzleHttp\Client();
   //       //  $response = $client->request("POST",$url,[
   //       //    "headers"   => ["Authorization" => "Bearer {$publicKey}"],
   //       //    "multipart" => [
   //       //           [
   //       //           'name'     => 'file',
   //       //           'filename' => $nama_gambar,
   //       //           'Mime-Type'=> $image_mime,
   //       //           'contents' => fopen( $image_path, 'r' ),
   //       //           ],
   //       //      ]
 
   //       //  ]);
   //       //  $response=   $response->getBody();
   //       //  $responsdata = json_decode($response,true);
   //       //  $url=$responsdata['data']['url'];
   //        Infografis::updateOrCreate(
   //          ['id'           => $request->id],
   //          [
   //             'judul'      => $request->keterangan,
   //             'tanggal'    =>  $request->tanggal,
   //             'gambar'       => $image_path,
   //             'file'       => $file_pdf,

   //          ]
   //       );
 
   //        if ($request->id)  return $this->success('Berhasil Mengubah Data');
   //        else return $this->success('Berhasil Menginput Data');
   //     } catch (\Throwable $th) {
   //       return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
   //     }
   //  }

    public function edit($id)
    {

    //  dd($id);
      $skpd = Infografis::where('id', $id)->first();
 
       return $this->success('Data INFOGRAFIS', $skpd);
    }

    public function destroy(Infografis $WebsiteSkpd,Request $request)
    {
       try {

          $id=$request->id;
          $record = Infografis::find($id);
          $record->delete();
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
       }
    }
}
