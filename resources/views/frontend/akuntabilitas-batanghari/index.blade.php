@extends('frontend.layouts.app')
@section('content')

<style>
   .cropped1 {
    width: 70px; /* width of container */
    height: 73px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
.cropped2 {
    width: 570px; /* width of container */
    height: 436px; /* height of container */
    object-fit: cover;
    object-position: 20% 10%; /* try 20px 10px */ 
    border: 0px solid black;
}  
.galeri {
    width: 270px; /* width of container */
    height: 370px; /* height of container */
    object-fit: cover;
    border: 0px solid black;
}
</style>
        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                        <div class="news-details__content">
                                
                        <input type="date" name="tahun">
                                <div class="comment-one">
                                @foreach($anggaran as $row)
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <!-- <img src="{{asset('frontend/assets/images/blog/comment-1-1.jpg')}}" alt=""> -->
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>{{$row->judul}}</h3>
                                            <p>{{ Carbon\Carbon::parse($row->created_at)->format('d-M-Y') }}</p>
                                            <a  href="{{$row->link_download}}" class="thm-btn comment-one__btn">Download</a>
                                        </div>
                                    </div>

                                @endforeach   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                
                                @foreach($berita_terbaru as $berita)  
                                <?php
                                        $url = URL::to("baca/".$berita->id."/".str_replace(' ','-',$berita->judul)."/".$berita->tanggal);
                                        ?>  
                                <li>
                                        <div class="sidebar__post-image">
                                            <img   class="cropped1" src="{{asset('frontend/gambar-berita/'.$berita->gambar)}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>by Admin</span>
                                                <a href="{{route('read', ['id' =>$berita->id])}}">{{$berita->judul}}</a>
                                            </h3>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Details End-->
@endsection