@extends('frontend.layouts.app')
@section('content')

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">GALERI FOTO
                        </h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    
                    @foreach($galeri_foto as $row)  
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('frontend/galeri/'.$row->foto)}}" alt="">
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__info">
                                        <p class="team-one__sub-title">Co Founder</p>
                                        <h3 class="team-one__name"><a href="team.html">{{$row->judul}}</a></h3>
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
                    @endforeach
                    {{ $galeri_foto->links() }}

                </div>
            </div>
        </section>
        <!--Team One End-->
            @endsection