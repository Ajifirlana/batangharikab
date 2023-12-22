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

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(frontend/assets/images/backgrounds/main-slider-1-1.jpg);"></div>
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

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(frontend/assets/images/backgrounds/main-slider-1-2.jpg);"></div>
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

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one__shape-1 float-bob-y">
                <img src="{{asset('frontend/assets/images/shapes/about-one-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="{{asset('frontend/assets/images/resources/about-one-img-1.jpg')}}" alt="">
                                </div>
                                <div class="about-one__img-2">
                                    <img src="{{asset('frontend/assets/images/resources/about-one-img-2.jpg')}}" alt="">
                                </div>
                                <div class="about-one__experience">
                                    <div class="about-one__experience-count-box">
                                        <h3 class="odometer" data-count="35">00</h3>
                                    </div>
                                    <p class="about-one__experience-text">Years
                                        <br> Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">About Company</span>
                                <h2 class="section-title__title">World largest & trusted
                                    construction co.</h2>
                            </div>
                            <p class="about-one__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                tellus, aute irure ullamcorper mattis, pulvinar dapibus leo. Duis dolor in voluptate
                                dolore reprehenderit in velit esse nulla pariatur.</p>
                            <ul class="about-one__points-box list-unstyled">
                                <li>
                                    <div class="about-one__points-title">
                                        <p>Worldwide Manufacture</p>
                                    </div>
                                    <div class="about-one__points-content">
                                        <div class="about-one__points-icon">
                                            <span class="icon-planet-earth"></span>
                                        </div>
                                        <div class="about-one__points-text">
                                            <p>Duis dolor in simply free text available voluptate dolore reprehenderit
                                                in velit esse.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-one__points-title">
                                        <p>Quality Productions</p>
                                    </div>
                                    <div class="about-one__points-content">
                                        <div class="about-one__points-icon">
                                            <span class="icon-quality"></span>
                                        </div>
                                        <div class="about-one__points-text">
                                            <p>Duis dolor in simply free text available voluptate dolore reprehenderit
                                                in velit esse.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__btn-box">
                                <a href="about.html" class="about-one__btn thm-btn">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Company Fun Facts</span>
                    <h2 class="section-title__title">Indusry achivements</h2>
                </div>
                <div class="row">
                    <!--Counter One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="counter-one__single">
                            <div class="counter-one__icon-box">
                                <div class="counter-one__shape">
                                    <img src="{{asset('frontend/assets/images/shapes/counter-one-shape-1.png')}}" alt="">
                                </div>
                                <div class="counter-one__shape-2">
                                    <img src="{{asset('frontend/assets/images/shapes/counter-one-shape-2.png')}}" alt="">
                                </div>
                                <div class="counter-one__icon">
                                    <span class="icon-factory"></span>
                                </div>
                            </div>
                            <div class="counter-one__content-box">
                                <div class="counter-one__count-box count-box">
                                    <h3 class="count-text" data-stop="176" data-speed="1500">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                                <p class="counter-one__text">Chain of Factories</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="counter-one__single">
                            <div class="counter-one__icon-box">
                                <div class="counter-one__shape">
                                    <img src="{{asset('frontend/assets/images/shapes/counter-one-shape-1.png')}}" alt="">
                                </div>
                                <div class="counter-one__shape-2">
                                    <img src="{{asset('frontend/assets/images/shapes/counter-one-shape-2.png')}}" alt="">
                                </div>
                                <div class="counter-one__icon">
                                    <span class="icon-office"></span>
                                </div>
                            </div>
                            <div class="counter-one__content-box">
                                <div class="counter-one__count-box count-box">
                                    <h3 class="count-text" data-stop="800" data-speed="1500">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                                <p class="counter-one__text">Projects Completed</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="counter-one__single">
                            <div class="counter-one__icon-box">
                                <div class="counter-one__shape">
                                    <img src="{{asset('frontend/assets/images/shapes/counter-one-shape-1.png')}}" alt="">
                                </div>
                                <div class="counter-one__shape-2">
                                    <img src="{{asset('frontend/assets/images/shapes/counter-one-shape-2.png')}}" alt="">
                                </div>
                                <div class="counter-one__icon">
                                    <span class="icon-workers"></span>
                                </div>
                            </div>
                            <div class="counter-one__content-box">
                                <div class="counter-one__count-box count-box">
                                    <h3 class="count-text" data-stop="230" data-speed="1500">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                                <p class="counter-one__text">Expert Engineers</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__bg-shape-1 float-bob-y">
                <img src="{{asset('frontend/assets/images/shapes/services-one-shape-1.png')}}" alt="">
            </div>
            <div class="services-one__bg-shape-2 float-bob-x">
                <img src="{{asset('frontend/assets/images/shapes/services-one-shape-2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-left">
                    <span class="section-title__tagline">What We’re Offering</span>
                    <h2 class="section-title__title">We provide best services
                        <br> for construction</h2>
                </div>
                <div class="services-one__bottom">
                    <div class="services-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": false,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 3
                            },
                            "1200": {
                                "items": 3
                            }
                        }
                    }'>
                        <!--Services One Single Start-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{asset('frontend/assets/images/services/services-1-1.jpg')}}" alt="">
                                </div>
                                <div class="services-one__shape-1"></div>
                                <div class="services-one__icon">
                                    <span class="icon-engineering"></span>
                                </div>
                                <a href="repair-welding.html" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="mechanical-expert.html">Mechanical Experts</a>
                                </h3>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{asset('frontend/assets/images/services/services-1-2.jpg')}}" alt="">
                                </div>
                                <div class="services-one__shape-1"></div>
                                <div class="services-one__icon">
                                    <span class="icon-house"></span>
                                </div>
                                <a href="repair-welding.html" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="repair-welding.html">Repair and Welding</a>
                                </h3>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{asset('frontend/assets/images/services/services-1-3.jpg')}}" alt="">
                                </div>
                                <div class="services-one__shape-1"></div>
                                <div class="services-one__icon">
                                    <span class="icon-appartments"></span>
                                </div>
                                <a href="appartment-design.html" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="appartment-design.html">Appartment Design</a>
                                </h3>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{asset('frontend/assets/images/services/services-1-1.jpg')}}" alt="">
                                </div>
                                <div class="services-one__shape-1"></div>
                                <div class="services-one__icon">
                                    <span class="icon-engineering"></span>
                                </div>
                                <a href="mechanical-expert.html" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="mechanical-expert.html">Mechanical Experts</a>
                                </h3>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{asset('frontend/assets/images/services/services-1-2.jpg')}}" alt="">
                                </div>
                                <div class="services-one__shape-1"></div>
                                <div class="services-one__icon">
                                    <span class="icon-house"></span>
                                </div>
                                <a href="repair-welding.html" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="repair-welding.html">Repair and Welding</a>
                                </h3>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{asset('frontend/assets/images/services/services-1-3.jpg')}}" alt="">
                                </div>
                                <div class="services-one__shape-1"></div>
                                <div class="services-one__icon">
                                    <span class="icon-appartments"></span>
                                </div>
                                <a href="appartment-design.html" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="appartment-design.html">Appartment Design</a>
                                </h3>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{asset('frontend/assets/images/services/services-1-1.jpg')}}" alt="">
                                </div>
                                <div class="services-one__shape-1"></div>
                                <div class="services-one__icon">
                                    <span class="icon-engineering"></span>
                                </div>
                                <a href="mechanical-expert.html" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="mechanical-expert.html">Mechanical Experts</a>
                                </h3>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{asset('frontend/assets/images/services/services-1-2.jpg')}}" alt="">
                                </div>
                                <div class="services-one__shape-1"></div>
                                <div class="services-one__icon">
                                    <span class="icon-house"></span>
                                </div>
                                <a href="repair-welding.html" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="repair-welding.html">Repair and Welding</a>
                                </h3>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{asset('frontend/assets/images/services/services-1-3.jpg')}}" alt="">
                                </div>
                                <div class="services-one__shape-1"></div>
                                <div class="services-one__icon">
                                    <span class="icon-appartments"></span>
                                </div>
                                <a href="appartment-design.html" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="appartment-design.html">Appartment Design</a>
                                </h3>
                            </div>
                        </div>
                        <!--Services One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Project One Start-->
        <section class="project-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Checkout Our Recent Work</span>
                    <h2 class="section-title__title">Transforming the ideas and <br> visions for industries!</h2>
                </div>
                <div class="project-one__main-tab-box tabs-box">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="project-one__left">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#interiors" class="tab-btn">
                                        <p>Interiors</p>
                                        <span>05</span>
                                    </li>
                                    <li data-tab="#architecture" class="tab-btn active-btn">
                                        <p>Architecture</p>
                                        <span>03</span>
                                    </li>
                                    <li data-tab="#house-exterior" class="tab-btn">
                                        <p>House & Exterior</p>
                                        <span>10</span>
                                    </li>
                                    <li data-tab="#house-renovation" class="tab-btn">
                                        <p>House Renovation</p>
                                        <span>09</span>
                                    </li>
                                    <li data-tab="#building" class="tab-btn">
                                        <p>Building</p>
                                        <span>02</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="project-one__right">
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab" id="interiors">
                                        <div class="project-one__main-tab-content">
                                            <div class="project-one__carousel thm-owl__carousel owl-theme owl-carousel"
                                                data-owl-options='{
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
                                                        "items":2
                                                    },
                                                    "992":{
                                                        "items": 2
                                                    },
                                                    "1200":{
                                                        "items": 2
                                                    }
                                                }

                                            }'>
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-2.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-3.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-4.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-2.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab active-tab" id="architecture">
                                        <div class="project-one__main-tab-content">
                                            <div class="project-one__carousel thm-owl__carousel owl-theme owl-carousel"
                                                data-owl-options='{
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
                                                        "items":2
                                                    },
                                                    "992":{
                                                        "items": 2
                                                    },
                                                    "1200":{
                                                        "items": 2
                                                    }
                                                }

                                            }'>
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-2.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-3.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-4.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-2.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="house-exterior">
                                        <div class="project-one__main-tab-content">
                                            <div class="project-one__carousel thm-owl__carousel owl-theme owl-carousel"
                                                data-owl-options='{
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
                                                        "items":2
                                                    },
                                                    "992":{
                                                        "items": 2
                                                    },
                                                    "1200":{
                                                        "items": 2
                                                    }
                                                }

                                            }'>
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-2.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-3.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-4.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-2.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="house-renovation">
                                        <div class="project-one__main-tab-content">
                                            <div class="project-one__carousel thm-owl__carousel owl-theme owl-carousel"
                                                data-owl-options='{
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
                                                        "items":2
                                                    },
                                                    "992":{
                                                        "items": 2
                                                    },
                                                    "1200":{
                                                        "items": 2
                                                    }
                                                }

                                            }'>
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-2.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-3.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-4.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-2.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="building">
                                        <div class="project-one__main-tab-content">
                                            <div class="project-one__carousel thm-owl__carousel owl-theme owl-carousel"
                                                data-owl-options='{
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
                                                        "items":2
                                                    },
                                                    "992":{
                                                        "items": 2
                                                    },
                                                    "1200":{
                                                        "items": 2
                                                    }
                                                }

                                            }'>
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-2.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-3.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-4.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                                <!--Project One Single Start-->
                                                <div class="item">
                                                    <div class="project-one__single">
                                                        <div class="project-one__img-box">
                                                            <div class="project-one__img">
                                                                <img src="{{asset('frontend/assets/images/project/project-1-2.jpg')}}" alt="">
                                                            </div>
                                                            <div class="project-one__content-box">
                                                                <p class="project-one__sub-title">interiors</p>
                                                                <h4 class="project-one__title"><a
                                                                        href="project-details.html">Jelewrs
                                                                        Mutual <br>
                                                                        Mantinance</a></h4>
                                                                <div class="project-one__arrow">
                                                                    <a href="project-details.html"><span
                                                                            class="icon-right-arrow"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Project One Single End-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project One End-->

        <!--Trusted One Start-->
        <section class="trusted-one">
            <div class="trusted-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/trusted-one-bg.jpg);">
            </div>
            <div class="container">
                <div class="trusted-one__inner">
                    <div class="trusted-one__video-link">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="trusted-one__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                    <h3 class="trusted-one__title count-box">Trusted By Additional Than <span class="count-text"
                            data-stop="450000" data-speed="1500">00</span> <br>Upbeat Individuals</h3>
                    <div class="trusted-one__btn-box">
                        <a href="about.html" class="trusted-one__btn thm-btn">Discover more</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Trusted One End-->

        <!--Best Construction Start-->
        <section class="best-construction">
            <div class="best-construction__shape-1 float-bob-x">
                <img src="{{asset('frontend/assets/images/shapes/best-construction-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="best-construction__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">What Else We Do</span>
                                <h2 class="section-title__title">Best construction &
                                    building business</h2>
                            </div>
                            <h3 class="best-construction__title">committed to providing our customers with exceptional
                                service.</h3>
                            <p class="best-construction__text">Lorem Ipsum is simply dummy text of free available in
                                market the printing and typesetting industry has been the industry's standard dummy text
                                ever.</p>
                            <div class="best-construction__progress">
                                <div class="best-construction__progress-single">
                                    <h4 class="best-construction__progress-title">Construction</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="78%">
                                            <div class="count-text">78%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="best-construction__progress-single">
                                    <h4 class="best-construction__progress-title">Building</h4>
                                    <div class="bar marb-0">
                                        <div class="bar-inner count-bar" data-percent="60%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="best-construction__right">
                            <div class="best-construction__img-box">
                                <div class="best-construction__img">
                                    <img src="{{asset('frontend/assets/images/resources/best-construction-img-1.jpg')}}" alt="">
                                </div>
                                <div class="best-construction__name">
                                    <p>Austry Construction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Best Construction End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Experts Contractors</span>
                    <h2 class="section-title__title">Working with excellent
                        <br> our great team</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('frontend/assets/images/team/team-1-1.jpg')}}" alt="">
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__info">
                                        <p class="team-one__sub-title">Co Founder</p>
                                        <h3 class="team-one__name"><a href="team.html">Kevin Martin</a></h3>
                                    </div>
                                </div>
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single Start-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('frontend/assets/images/team/team-1-2.jpg')}}" alt="">
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__info">
                                        <p class="team-one__sub-title">Manager</p>
                                        <h3 class="team-one__name"><a href="team.html">Sarah Albert</a></h3>
                                    </div>
                                </div>
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single Start-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('frontend/assets/images/team/team-1-3.jpg')}}" alt="">
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__info">
                                        <p class="team-one__sub-title">Contractor</p>
                                        <h3 class="team-one__name"><a href="team.html">Mike Hardson</a></h3>
                                    </div>
                                </div>
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single Start-->
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="container">
                <div class="brand-one__title"></div>
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100,
                "slidesPerView": 5,
                "loop": true,
                "navigation": {
                    "nextEl": "#brand-one__swiper-button-next",
                    "prevEl": "#brand-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
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
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1-1.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1-2.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1-3.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1-4.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1-5.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1-1.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1-2.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1-3.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1-4.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1-5.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="brand-one__nav">
                    <div class="swiper-button-prev" id="brand-one__swiper-button-next">
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="swiper-button-next" id="brand-one__swiper-button-prev">
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

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
                                <span class="section-title__tagline">Read Their Feedbacks</span>
                                <h2 class="section-title__title">See what clients are talking about our industry</h2>
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
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="{{asset('frontend/assets/images/testimonial/testimonial-1-1.jpg')}}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <i class="fas fa-quote-left"></i>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__content">
                                                    <div class="testimonial-one__rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h3 class="testimonial-one__client-name">Donald Hardson</h3>
                                                    <p class="testimonial-one__client-sub-title">CEO - CO Founder</p>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Leverage agile frameworks to provide a
                                                robust
                                                synopsis for high level overviews. Iterative approaches to corporate
                                                strategy data foster to collaborative thinking.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="{{asset('frontend/assets/images/testimonial/testimonial-1-2.jpg')}}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <i class="fas fa-quote-left"></i>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__content">
                                                    <div class="testimonial-one__rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h3 class="testimonial-one__client-name">Christine Eve</h3>
                                                    <p class="testimonial-one__client-sub-title">CEO - CO Founder</p>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Leverage agile frameworks to provide a
                                                robust
                                                synopsis for high level overviews. Iterative approaches to corporate
                                                strategy data foster to collaborative thinking.</p>
                                        </div>
                                    </div>
                                </div>
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
                    <span class="section-title__tagline">Directly Blog Posts</span>
                    <h2 class="section-title__title">Latest news & articles
                        <br> from the posts</h2>
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
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{asset('frontend/assets/images/blog/news-1-2.jpg')}}" alt="">
                                </div>
                                <div class="news-one__date">
                                    <p>20 Aug</p>
                                </div>
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>by Christine</a>
                                    </li>
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title"><a href="news-details.html">Corporate strategy data foster
                                        to collaborative thinking.</a></h3>
                                <div class="news-one__bottom">
                                    <a href="news-details.html" class="news-one__read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{asset('frontend/assets/images/blog/news-1-3.jpg')}}" alt="">
                                </div>
                                <div class="news-one__date">
                                    <p>20 Aug</p>
                                </div>
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>by Christine</a>
                                    </li>
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title"><a href="news-details.html">Frameworks to provide a robust
                                        synopsis for high level overviews.</a></h3>
                                <div class="news-one__bottom">
                                    <a href="news-details.html" class="news-one__read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->

@endsection