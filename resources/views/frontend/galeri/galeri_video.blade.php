@extends('frontend.layouts.app')
@section('content')

        <!--Team One Start-->
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
                    @foreach($galeri_video as $row)     
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
        <!--Team One End-->
          
            @endsection