<?php 
use Carbon\Carbon;

$today = Carbon::today()->toDateString();
$currentMonth = Carbon::now();
      $setting = DB::table('settings')->first();
     $statistik = DB::table('statistik_pengunjungs')->first();
      ?>
      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> .:: Situs Pemerintah Kabupaten Batanghari | Bumi Serentak Bak Regam ::. </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/logo/logo.gif')}}" />
   
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
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/color-2.css')}}" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BLDPNV2BE2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BLDPNV2BE2');
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
</head>


<body>



    <div class="preloader">
        <div class="preloader__image"></div>
    </div> 
    <!-- /.preloader -->




    <div class="page-wrapper">
        <header    background-color: #000000; class="main-header-two">
            <div class="main-header-two__top">
                <div class="main-header-two__top-wrapper">
                    <div class="main-header-two__top-inner">
                        <div class="main-header-two__top-left">
                            <ul class="list-unstyled main-header-two__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="{{$setting->email}}">{{$setting->email}}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="text">
                                        <p>{{$setting->alamat}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header-two__top-right">
                            <div class="main-header-two__social">
                                <a href="{{ $setting->tiktok }}"><i class="fab fa-brands fa-tiktok"></i></a>
                                <a target="blank" href="https://www.facebook.com/profile.php?id=100075924655501"><i class="fab fa-facebook"></i></a>
                                <a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="main-menu main-menu-two">
                <div class="main-menu-two__wrapper">
                    <div class="main-menu-two__wrapper-inner">
                        <div class="main-menu-two__left">
                            <div class="main-menu-two__logo">
                                <a href="{{url('/')}}"><img src="{{ asset('frontend/assets/images/resources/logo-bth.png')}}" alt=""></a>
                            </div>
                            <div class="main-menu-two__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                <li class="dropdown">
                                            <a href="{{url('/')}}">Tentang Batanghari</a>
                                            <ul>
                                            <li class="dropdown">
                                                <a href="{{url('page/profil-batanghari')}}">Profil Batanghari</a>
                                            <ul>
                                            <li><a href="{{url('page/sejarah')}}">Sejarah Batanghari</a></li>
                                            <li><a href="{{url('page/arti-lambang')}}">Arti Lambang</a></li>
                                            <li><a href="{{url('page/kondisi-demografi')}}">Kondisi Demografi</a></li>
                                            <li><a href="{{url('page/peta-batanghari')}}">Peta Batanghari</a></li>
                                            <li><a href="{{url('page/visi-dan-misi')}}">Visi & Misi</a></li>
                                             
                                            </ul>
                                            </li>
                                                <li><a href="{{url('page/pemerintah-batanghari')}}">Pemerintahan Batanghari</a></li>
                                                <li><a href="{{url('page/akuntabiltas-pemerintahan')}}">Akuntabiltas Pemerintahan</a></li>
                                                <li><a href="{{url('page/akuntabiltas-pelaporan')}}">Akuntabiltas Pelaporan</a></li>
                                                <li><a href="{{url('page/apbd-batanghari')}}">APBD Batanghari</a></li>
                                                
                                            </ul>
                                        </li>
                                    
                                        
                                        <li class="dropdown">
                                            <a href="{{url('/')}}">Layanan Publik</a>
                                            <ul>
                                            <li class="dropdown">
                                                <a>Pendidikan</a>
                                            <ul>
                                            <li><a href="https://ppdb.batangharikab.go.id/">PPDB</a></li>
                                
                                            </ul>
                                            </li>
                                                
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Informasi Publik</a>
                                            <ul>
                                            <li><a href="{{url('berita')}}">Berita</a></li>
                                                <li><a href="{{url('galeri-foto')}}">Galeri Foto</a></li>
                                                <li><a href="{{url('galeri-video')}}">Galeri Video</a></li>
                                                    
                                            </ul>
                                        </li>
                                        
                                        <li><a href="https://ppid.batangharikab.go.id">PPID</a></li>
                                      
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu-two__right">
                            <div class="main-menu-two__search-cart-btn-box">
                                <div class="main-menu-two__search-box">
                                    <a href="#" class="main-menu-two__search search-toggler icon-magnifying-glass"></a>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        @yield('content')
        
        
        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href=""><img src="{{asset('frontend/logo/logo-menu.png')}}" height="50px" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">Batanghari adalah kabupaten yang terletak di bagian tengah provinsi Jambi, Indonesia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-8 col-md-8 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Statistik Pengunjung</h4>
                                </div>
                
                               <ul class="footer-widget__links-list list-unstyled">
                                <li>{{$statistik->hari_ini}} x Hari ini</li>
                                <li>{{$statistik->bulan_ini}} x Bulan ini</li>
                                 <li>{{$statistik->dilihat}}  x Semua</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Contact</h4>
                                </div>
                                <p class="footer-widget__contact-text">{{$setting->alamat}}</p>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="{{$setting->email}}">{{$setting->email}}</a></p>
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
                        <div class="col-xl-2 col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__newsletter">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Media Sosial</h4>
                                </div>
                                <div class="site-footer__social">
                                    <a href="{{ $setting->tiktok }}"><i class="fab fa-brands fa-tiktok"></i></a>
                                    <a href="{{ $setting->facebook }}"><i class="fab fa-facebook"></i></a>
                                   
                                    <a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <p class="site-footer__bottom-text">©<?= date('Y')?> <a href="#">Pemerintah Kabupaten Batang Hari</a></p>
                    <ul class="list-unstyled site-footer__bottom-menu">
                        <li><a href="about">Help</a></li>
                        <li><a href="about">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{asset('frontend/logo/logo-menu.png')}}" width="130"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:{{ $setting->telepon }}">{{ $setting->telepon }}</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
               
                                    <a href="{{ $setting->tiktok }}"><i class="fab fa-brands fa-tiktok"></i></a>
                                    <a href="{{ $setting->facebook }}"><i class="fab fa-facebook"></i></a>
                                   
                                    <a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                                
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