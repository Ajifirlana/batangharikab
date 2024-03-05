@extends('frontend.layouts.app')
@section('content')
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
        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                            "effect": "fade",
                            "pagination": {
                            "el": "#main-slider-pagination",
                            "type": "bullets",
                            "clickable": true
                            },
                            "navigation": {
                            "nextEl": "#main-slider__swiper-button-next",
                            "prevEl": "#main-slider__swiper-button-prev"
                            },
                            "autoplay": {
                            "delay": 5000
                            }}'>
                <div class="swiper-wrapper">
                    @foreach($image_slider as $row)
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(frontend/slider-image/{{$row->foto}});"></div>
                            <!-- <div class="image-layer"
                            style="background-image: url(frontend/assets/images/backgrounds/main-slider-1-1.jpg);"></div>
                         -->
                            <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">{{$row->judul}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>


        <section class="news-two">
            <div class="news-two__shape-1" style="background-image: url(frontend/assets/images/shapes/news-two-shape-1.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                <a href="{{url('berita')}}">
                <span class="section-title__tagline">Indeks Berita</span></a> 
                <h2 class="section-title__title">Berita Batanghari</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
                             
                               
                        <div class="news-two__left">
   
                            <div class="news-two__left-img">
                            
                            <img   style="width: 570px; height: 436px; object-fit: none;"  src="{{asset('frontend/gambar-berita/'.$latestRecord->gambar)}}"alt="">
                          
                                <div class="news-two__left-img-content">
                                    <ul class="news-two__left-meta list-unstyled">
                                        <li>
                                        <a href="{{route('read', ['id' => $latestRecord->id])}}"><i class="fas fa-user-circle"></i>by Admin</a>
                                        </li>
                                        <li>
                                        <a href="{{route('read', ['id' => $latestRecord->id])}}"><i class="fas fa-comments"></i>{{$latestRecord->tanggal}}</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-two__left-title"><a href="{{route('read', ['id' => $latestRecord->id])}}">{{ substr($latestRecord->judul,0,50) }} ...!</a></h3>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-two__right">
                            <ul class="list-unstyled news-two__list">
                            @foreach($berita_terbaru_new as $row)  
                                      
                                <li>
                                    <div class="news-two__single">
                                        <div class="news-two__img">
                                            <img class="cropped1"   src="{{asset('frontend/gambar-berita/'.$row->gambar)}}"alt="">
                                        </div>
                                        <div class="news-two__content">
                                            <ul class="news-two__meta list-unstyled">
                                                <li>
                                                    <a href="{{route('read', ['id' => $row->id])}}"><i class="fas fa-user-circle"></i>by
                                                        Admin</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('read', ['id' => $row->id])}}"><i class="fas fa-comments"></i>{{$row->tanggal}}</a>
                                                </li>
                                            </ul>
                                            <h3 class="news-two__title">  <a href="{{route('read', ['id' => $row->id])}}">{{ substr($row->judul,0,50) }} ...</a></h3>
                                        </div>
                                    </div>
                                </li>
                                @endforeach  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--News One Start-->
        <section class="team-two">
            <div class="team-two__shape-2" style="background-image: url(frontend/assets/images/shapes/team-two-shape-2.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                <a href="{{url('infografis')}}">
                    <span class="section-title__tagline">Index Infografis</span></a> 
                    <h2 class="section-title__title">Infografis Batanghari</h2>
                </div>
                <div class="row">
                @foreach($infografis as $row)  
                    <!--Team Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                <img src="{{asset('frontend/infografis/foto/'.$row->gambar)}}"alt="">
                                </div>
                                <ul class="list-unstyled team-two__social">
                                    <li><a href="{{ route('downloadFile',$row->file) }}"><i class="fas fa-download"></i></a></li>
                                  
                                    <li><a  target="_blank" href="{{ route('show',$row->file) }}"><i class="fab far fa-eye"></i></a></li>
                                  
                                </ul>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__name"><a href="team.html">{{$row->judul}}</a></h3>
                                <p class="team-two__sub-title"></p>
                                <ul class="list-unstyled team-two__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                  
                @endforeach   
                    <!--Team Two Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->
        <!--Testimonial One Start-->

      

        



        <section class="testimonial-one">
            <div class="testimonial-one__bg"
                style="background-image: url(/assets/images/backgrounds/testimonial-one-bg.png);"></div>
            <div class="testimonial-one__shape-1"
                style="background-image: url(frontend/assets/images/shapes/testimonial-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                            <a href="{{url('website-skpd')}}"><span class="section-title__tagline">Indeks Website SKPD </span></a>
                            <h2 class="section-title__title">Website SKPD</h2>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel"
                                data-owl-options='{
                                "items": 1,
                                "margin": 30,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": 6000,
                                "nav":true,
                                "dots":false,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive":{
                                    "0":{
                                        "items":1
                                    },
                                    "768":{
                                        "items":1
                                    },
                                    "992":{
                                        "items": 1
                                    },
                                    "1200":{
                                        "items": 1.185555
                                    }
                                }

                            }'>
                                <!--Testimonial One Single Start-->
                               @foreach($website_skpd as $row) 
                               <div class="item">
                                   

                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                <a href="{{$row->link}}"><img src="{{asset('frontend/website-skpd/'.$row->foto)}}" alt="">
                                                   </a>
                                                   
                                                </div>
                                                <div class="testimonial-one__content">
                                                   
                                                    <h3 class="testimonial-one__client-name">{{$row->judul}}</h3>
                                                    <p class="testimonial-one__client-sub-title">{{$row->opd}}</p>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">{{$row->keterangan}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->
        <!--Services Two Start-->
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
                    @foreach($galeri as $row)     
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
        <!--Services Two End-->

        <section class="project-two">
            <div class="project-two__shape-1 float-bob-x">
                <img src="{{ asset('frontend/assets/images/shapes/project-two-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                <a href="{{url('galeri-video')}}"><span class="section-title__tagline">Indeks Video </span></a>
                    <h2 class="section-title__title">Video Batanghari</h2>
                </div>
                <div class="project-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 1,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":1
                        },
                        "992":{
                            "items": 1
                        },
                        "1200":{
                            "items": 1
                        }
                    }

                }'>
                    <!--Project Two Single Start-->
                    @foreach($video as $row)     
                    <div class="item">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{asset('frontend/video/'.$row->foto)}}" alt="">
                                <div class="project-two__arrow">
                                <a href="{{ $row->link }}" target="_blank"><br><span class="fa fa-solid fa-play"></span></a>
                                </div>
                            </div>
                            <div class="project-two__content">
                                <p class="project-two__sub-title">{{$row->judul}}</p>
                               
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Project Two Single End-->
                </div>
            </div>
        </section>

        <section class="brand-two">
            <div class="container">
                <h4 class="brand-two__title">Aplikasi Terkait</h4>
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                    @foreach($website_skpd as $row) 
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/assets/images/brand/brand-2-1.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                    @endforeach 
                    </div>
                </div>
            </div>
        </section>

      


@endsection