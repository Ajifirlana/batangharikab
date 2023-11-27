@extends('frontend.layouts.app')
@section('content')

<section id="action" class="business bg-grey roomy-40">
</section>
<section id="action" class="action bg-primary roomy-40">
                <div class="container">
                    
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase"><strong>VIDEO</strong> KEGIATAN PEMERINTAH KAB. BATANG HARI</h2>    
                            
                        </div>
                        <div class="row">
                        
                        <div class="maine_action">

                        @foreach($galeri_foto as $row)  
                                                <div class="col-md-3">
                                                <img src="{{asset('frontend/galeri/'.$row->foto)}}" alt="" />
                                                         <!-- <h5><a href="">{{$row->judul}}</a></h5> -->
                                                    
                    </div>@endforeach  
                        

                                   </div>
                    </div>
                </div>
            </section>                            
           
            @endsection