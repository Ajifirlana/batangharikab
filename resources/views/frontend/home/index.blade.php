@extends('frontend.layouts.app')
@section('content')

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

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                <a href="{{url('berita')}}">
                <span class="section-title__tagline">Indeks Berita</span></a> 
                <h2 class="section-title__title">Berita Batanghari</h2>
                    
                </div>
                <div class="row">
                    
                    @foreach($berita as $row)  
                    <?php
                                        $url = URL::to("baca/".$row->id."/".str_replace(' ','-',$row->judul)."/".$row->tanggal);
                                        ?>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{asset('frontend/assets/images/blog/news-1-1.jpg')}}" alt="">
                                </div>
                                <div class="news-one__date">
                                    <p>{{$row->tanggal}}</p>
                                </div>
                               
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title"><a href="<?= $url ?>">{{$row->judul}}</a></h3>
                              
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $berita->links() }}
                  
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->
        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__bg"
                style="background-image: url(assets/images/backgrounds/testimonial-one-bg.png);"></div>
            <div class="testimonial-one__shape-1"
                style="background-image: url(assets/images/shapes/testimonial-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                            <span class="section-title__tagline">Website SKPD.</span>
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
                                                   <a href="{{$row->link}}"><img src="{{asset('frontend/website-skpd/'.$row->foto)}}" alt="">
                                                   </a> 
                            
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
                <img src="assets/images/shapes/services-two-shape-1.png" alt="">
            </div>
            <div class="services-two__shape-2 float-bob-y">
                <img src="assets/images/shapes/services-two-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="services-two__top">
                
                <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-two__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Foto terbaru dan terkini terkait kegiatan dan program-program yang dilakukan oleh Pemerintah Batanghari</span>
                                    <h2 class="section-title__title">Galeri Batanghari</h2>
                                </div>
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
                                    <img src="{{asset('frontend/galeri/'.$row->foto)}}" alt="">
                                </div>
                            </div>
                            <div class="services-two__content">
                                <h3 class="services-two__title">{{$row->judul}}</h3>
                              
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--Services Two End-->


@endsection