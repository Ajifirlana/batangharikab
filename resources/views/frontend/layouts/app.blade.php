<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>@yield("pagetitle") .:: Situs Pemerintah Kabupaten Batanghari | Bumi Serentak Bak Regam ::.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}"> 
        <link rel="stylesheet" href="{{asset('frontend/assets/css/slick/slick.css')}}"> 
        <link rel="stylesheet" href="{{asset('frontend/assets/css/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootsnav.css')}}">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="{{asset('frontend/assets/css/xsslider.css')}}">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.css')}}" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
        <!--<link rel="stylesheet" href="{{asset('frontend/assets/css/colors/maron.css')}}">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" />

        <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


       <!-- Preloader -->
       <!-- <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div> -->
        <!--End off Preloader -->

        <div class="culmn">
            <!--Home page style-->

            @include("frontend.layouts.menu")
            <!--Home Sections-->
            @include("frontend.layouts.slider_image")
                  
            
	  			@yield('content')
            <!--Brand Section-->
          
            <!--Featured Section-->
            <!--Call to  action section-->

    <footer id="contact" class="footer action-lage bg-black p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                <h5 class="text-white">Kontak Kami</h5>
                                    <div class="widget_ab_item m-top-30">
                                                                          <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Location</h6>
                                            <p>
                                            {{$setting->alamat}}</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <p>{{$setting->telepon}}</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p>youremail@mail.com</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_latest sm-m-top-50">
                                    <h5 class="text-white">Peta Kabupaten</h5>
                                    <div class="widget_latst_item m-top-30">
                                    <img src="{{ asset('logo/peta-jambi.gif')}}" alt="" />
                                        
                                        <div class="widget_latst_item_text">
                                            <p>Download Peta Batanghari</p>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                       
                                        <div class="widget_latst_item_text">
                                            <p>Download Peta Prov. Jambi</p>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                     
                                        <div class="widget_latst_item_text">
                                            <p>Lihat Peta Batanghari</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <h5 class="text-white">SITUS TERKAIT</h5>
                                    <ul class="m-top-20">
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i>Badan Kepegawaian Negara</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i>Kementerian Kominfo</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i>Kementerian Dalam Negeri</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i>Kementerian PAN & RB</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i>Kementerian Ristek</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i>Website Balai Pengkajian Teknologi Pertanian (BPTP) Jambi</a></li>
                                    </ul>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                                <h5 class="text-white">Sosial Media</h5>
                                   <div align="center">
                                            <img src="{{ asset('logo/icon.gif')}}" width="50px" height="100px"  alt="" />
                                        
                                    </div>
                                    <ul class="list-inline m-top-20">
                                        <li>-  <a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a>  - </li>
                                    </ul>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                  
                    <div class="col-md-12 p-top-20">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                        Copyright 2023
                            by 
                            <a target="_blank" href="https://themewagon.com/">Dinas Komunikasi dan Informatika Kab. Batang Hari
                </a> 
                All Right Reserverd
                        </p>
                    </div>


                </div>
            </footer>




        </div>

        <!-- JS includes -->

        <script src="{{ asset('frontend/assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{ asset('frontend/assets/css/slick/slick.js')}}"></script>
        <script src="{{ asset('frontend/assets/css/slick/slick.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.collapse.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/bootsnav.js')}}"></script>



        <script src="{{ asset('frontend/assets/js/plugins.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

    </body>
</html>

