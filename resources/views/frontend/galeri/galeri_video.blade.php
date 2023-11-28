@extends('frontend.layouts.app')
@section('content')

<section id="action" class="business bg-grey roomy-40">
</section>
<section id="action" class="action bg-primary roomy-40">
                <div class="container">
                    
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase"><strong>GALERI VIDEO</strong></h2>    
                            
                        </div>
                        <div class="row">
                        
                        <div class="maine_action">

                        @foreach($galeri_video as $row)  
                                                <div class="col-md-3">
                                                    
                                                <div class="card-video">
                                                <h5><a href="{{$row->link}}" target="_blank">{{ substr($row->judul,0,30) }} ...!</a></h5>
                                                 
                                   </div>   
                    </div>@endforeach  
                    
                                   </div>
                          
                    </div>         
                    <div align="center">
                    {{ $galeri_video->links() }}

                    </div>
                </div>
            </section>                            
           
            @endsection