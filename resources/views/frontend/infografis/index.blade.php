@extends('frontend.layouts.app')
@section('content')

<style>
    .infografis {
    width: 270px; /* width of container */
    height: 370px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
</style>

        <!--Team One Start-->
        <section class="team-two">
            <div class="team-two__shape-2" style="background-image: url(frontend/assets/images/shapes/team-two-shape-2.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                {{ Breadcrumbs::render('infografis') }}
                    <h2 class="section-title__title">Infografis Batanghari</h2>
                </div>
                <div class="row">
                @foreach($infografis as $row)  
                    <!--Team Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                <img class="infografis" src="{{asset('frontend/infografis/foto/'.$row->gambar)}}"alt="">
                                </div>
                                <ul class="list-unstyled team-two__social">
                                    <li><a href="{{ route('downloadFile',$row->file) }}"><i class="fas fa-download"></i></a></li>
                                  
                                    <li><a  target="_blank" href="{{ route('show',$row->file) }}"><i class="fab far fa-eye"></i></a></li>
                                  
                                </ul>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__name"><a href="team.html">{{$row->judul}}</a></h3>
                                <p class="team-two__sub-title"></p>
                                <ul class="list-unstyled team-two__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                  
                @endforeach   
                    <!--Team Two Single End-->
                </div>
            </div>
        <!--Team One End-->
          
            @endsection