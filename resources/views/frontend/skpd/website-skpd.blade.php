@extends('frontend.layouts.app')
@section('content')

        <!--Team One Start-->
        <section style="background-color:#7eb441;" class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <h2  style="color:white;" class="section-title__title">WEBSITE SKPD
                        </h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    
                    @foreach($website_skpds as $row)  
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
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
                        </div>
                    </div>
                    @endforeach
                    {{ $website_skpds->links() }}

                </div>
            </div>
        </section>
        <!--Team One End-->
            @endsection