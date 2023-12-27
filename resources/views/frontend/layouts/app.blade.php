<?php 
      $setting = DB::table('settings')->get();
      ?>
      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> .:: Situs Pemerintah Kabupaten Batanghari | Bumi Serentak Bak Regam ::. </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="austry HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/austry-icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/austry.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/austry-responsive.css')}}" />
</head>

<body>



    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->




    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__top">
                <div class="main-header__top-wrapper">
                    <div class="main-header__top-inner">
                        <div class="main-header__top-left">
                            <p class="main-header__top-text"></p>
                            <div class="main-header__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="main-header__top-right">
                            <ul class="list-unstyled main-header__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a ></a></a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__btn">
                        <a href="contact">Get a free quote</a>
                    </div>
                    <div class="main-menu__call">
                        <div class="main-menu__call-icon">
                            <span class="icon-phone-ringing"></span>
                        </div>
                        <div class="main-menu__call-content">
                            <p class="main-menu__call-sub-title">Call Anytime</p>
                            <h5 class="main-menu__call-number"><a href="tel:{{$setting->telepon}}">{{$setting->telepon}}</a></h5>
                        </div>
                    </div>
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__wrapper-inner-content">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="{{url('/')}}"><img src="{{asset('frontend/assets/images/resources/logo-1.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown">
                                            <a href="{{url('/')}}">Tentang Batanghari</a>
                                            <ul>
                                            <li class="dropdown">
                                                <a href="2">Profil Batanghari</a>
                                            <ul>
                                            <li><a href="3">Sejarah Batanghari</a></li>
                                            <li><a href="#">Arti Lambang</a></li>
                                            <li><a href="#">Kondisi Demografi</a></li>
                                            <li><a href="#">Peta Batanghari</a></li>
                                
                                            </ul>
                                            </li>
                                                <li><a href="3">Pemerintahan Batanghari</a></li>
                                                <li><a href="4">Akuntabiltas Pemerintahan</a></li>
                                                <li><a href="5">Akuntabiltas Pelaporan</a></li>
                                                <li><a href="6">APBD Batanghari</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                                    <a href="#">Layanan Publik</a>
                                                    <ul>
                                                        <li><a href="2">Header Two</a></li>
                                                        <li><a href="3">Header Three</a></li>
                                                        <li><a href="4">Home Four</a></li>
                                                        <li><a href="5">Home Five</a></li>
                                                        <li><a href="6">Home Six</a></li>
                                                    </ul>
                                                </li>
                                        <li class="dropdown">
                                            <a href="#">Informasi Publik</a>
                                            <ul>
                                            <li><a href="{{url('berita')}}">Berita</a></li>
                                                <li><a href="{{url('galeri-foto')}}">Galeri Foto</a></li>
                                                <li><a href="{{url('galeri-video')}}">Galeri Video</a></li>
                                                <li><a href="{{url('page/1')}}">Visi & Misi</a></li>
                                                    
                                            </ul>
                                        </li>
                                        
                                        <li><a href="https://ppid.batangharikab.go.id">PPID</a></li>
                                             
                                    </ul>
                                </div>
                                <!-- <div class="main-menu__search-cart-box">
                                    <div class="main-menu__search-box">
                                        <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                    </div>
                                    <div class="main-menu__cart-box">
                                        <a href="#" class="main-menu__cart icon-shopping-cart"></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Main Slider End-->
        @yield('content')
        
        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__img">
                <img src="{{asset('frontend/assets/images/resources/site-footer-img-1.jpg')}}" alt="">
            </div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href=""><img src="{{asset('frontend/assets/images/resources/footer-logo.png')}}" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">There are many of simple lorem available for
                                        not, but the majority alteration.</p>
                                </div>
                                <div class="footer-widget__about-btn-box">
                                    <a href="contact" class="footer-widget__about-btn thm-btn">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Links</h4>
                                </div>
                                <ul class="footer-widget__links-list list-unstyled">
                                    <li><a href="about">About</a></li>
                                    <li><a href="team">Meet Our Team</a></li>
                                    <li><a href="news">News & Media</a></li>
                                    <li><a href="projects-1">Our Projects</a></li>
                                    <li><a href="contact">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Contact</h4>
                                </div>
                                <p class="footer-widget__contact-text"></p>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a ></a></a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:{{$setting->telepon}}">{{$setting->telepon}}</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__newsletter">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Newsletter</h4>
                                </div>
                                <div class="footer-widget__newsletter-form-box">
                                    <form class="footer-widget__newsletter-form mc-form" data-url="MC_FORM_URL">
                                        <div class="footer-widget__newsletter-form-input-box">
                                            <input type="email" placeholder="Email Address" name="EMAIL">
                                            <button type="submit" class="footer-widget__newsletter-btn"><img
                                                    src="{{ asset('frontend/assets/images/icon/paper-plan-icon.png')}}" alt=""></button>
                                        </div>
                                    </form>
                                    <div class="mc-form__response"></div>
                                </div>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <p class="site-footer__bottom-text">© Copyright 2023 by <a href="#">Diskominfo Batanghari</a></p>
                    <ul class="list-unstyled site-footer__bottom-menu">
                        <li><a href="about">Help</a></li>
                        <li><a href="about">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="" aria-label="logo image"><img src="{{asset('frontend/assets/images/resources/logo-1.png')}}" width="130"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a ></a></a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset('frontend/assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/wow/wow.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/circleType/jquery.circleType.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/vendors/sidebar-content/jquery-sidebar-content.js')}}"></script>




    <!-- template js -->
    <script src="{{ asset('frontend/assets/js/austry.js')}}"></script>
</body>

</html>