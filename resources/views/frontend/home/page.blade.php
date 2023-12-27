@extends('frontend.layouts.app')
@section('content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset('frontend/assets/images/backgrounds/page-header-bg.jpg')}})">
            </div>

            <div class="container">
                <div class="page-header__inner">
                    <h2>{{$judul}}</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>/</span></li>
                            <li>{{$judul}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                           
                            <div class="news-details__content">
        
                                <h3 class="news-details__title">{{$judul}}</h3>
                                <p class="news-details__text-1">
                                <?php echo $isi;?>
                                </p>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Details End-->

            @endsection