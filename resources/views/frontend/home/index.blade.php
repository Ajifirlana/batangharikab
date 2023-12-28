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

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(frontend/assets/images/backgrounds/main-slider-1-3.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Build Everything <br> with Passion</h2>
                                        <p class="main-slider__text">There are many of passages of lorem Ipsum, but the
                                            majori have suffered <br> alteration in some form.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


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
                            <span class="section-title__tagline">Temukan foto terbaru dan terkini terkait kegiatan dan program-program yang dilakukan oleh Pemerintah Batanghari.</span>
                            <h2 class="section-title__title">Galeri Batanghari</h2>
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
                               @foreach($galeri as $row) 
                               <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="{{asset('frontend/galeri/'.$row->foto)}}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <i class="fas fa-quote-left"></i>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__content">
                                                    
                                                    <h3 class="testimonial-one__client-name">{{$row->judul}}</h3>
                                                    </div>
                                            </div>
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

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
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
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>{{$row->tanggal}}</a>
                                    </li>
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title"><a href="<?= $url ?>">{{$row->judul}}</a></h3>
                                <div class="news-one__bottom">
                                    <a href="news-details.html" class="news-one__read-more">Read More</a>
                                </div>
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

@endsection