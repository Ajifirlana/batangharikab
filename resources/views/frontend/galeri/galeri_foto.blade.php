<style>
   .cropped1 {
    width: 210px; /* width of container */
    height: 203px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
.cropped2 {
    width: 210px; /* width of container */
    height: 203px; /* height of container */
    object-fit: cover;
    object-position: 20% 10%; /* try 20px 10px */ 
    border: 0px solid black;
}  
.galeri {
    width: 270px; /* width of container */
    height: 370px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
</style>
@extends('frontend.layouts.app')
@section('content')

        <!--Team One Start-->
           <section class="services-two">
            <div class="services-two__shape-1 float-bob-x">
                <img src="{{ asset('frontend/assets/images/shapes/services-two-shape-1.png')}}" alt="">
            </div>
            <div class="services-two__shape-2 float-bob-y">
                <img src="{{ asset('frontend/assets/images/shapes/services-two-shape-2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="services-two__top">
                
                <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-two__left">
                                <div class="section-title text-left">
                                <a href="{{url('galeri-foto')}}"><span class="section-title__tagline">Indeks Galeri </span></a>
                                    <h2 class="section-title__title">Galeri Batanghari</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-two__right">
                                <p class="services-two__text">Foto terbaru dan terkini terkait kegiatan dan program-program yang dilakukan oleh Pemerintah Batanghari</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($galeri_foto as $row)     
                    <!--Services Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-two__single">
                            <div class="services-two__img-box">
                                
                                <div class="services-two__img">
                                    <img class="galeri"  src="{{asset('frontend/galeri/'.$row->foto)}}" alt="">
                                </div>
                               
                            </div>
                            <div class="services-two__content">
                            <h3 class="project-two__sub-title"><a href="#">{{$row->judul}}</a></h3>
                             
                              
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        
        <!--Team One End-->
 @endsection