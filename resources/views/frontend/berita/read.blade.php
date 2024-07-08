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
            {{ Breadcrumbs::render('berita.read', $berita['id'], $title) }}
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img class="cropped2" src="{{asset('frontend/gambar-berita/'.$berita->gambar)}}" alt="">
                                <div class="news-details__date">
                                    <p>{{$berita->tanggal}}</p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href="news-details.html"><i class="fas fa-user-circle"></i> by Admin </a>
                                    </li>
                                </ul>
                                <h3 class="news-details__title">{{$berita->judul}}</h3>
                                <p class="news-details__text-1">
                                <?php echo $berita->isi;?>
                                </p>

                                <div class="news-details__bottom">
                                    <p class="news-details__tags">
                                        <span>Berbagi Berita</span>
                                        
                                       

                                       
                                        <button id="facebook-share"><i class="fab fa-facebook"></i> Facebook</button>
                                       
                                        
                                       
                                    </p>
                                    
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
                                                        class="fas fa-user-circle"></i>by Admin <bold>| </bold>{{$berita->tanggal}}</span>
                                                <a href="{{route('read', ['id' =>$berita->id,'title'=>$berita->judul])}}">{{$berita->judul}}</a>
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

  <script>

        document.addEventListener("DOMContentLoaded", function() {
            // The URL you want to share
            var shareUrl = window.location.href;
            var shareTitle = "Berita Kabupaten Batanghari"; // Title of the news

            // Function to open a new window for sharing
            function openShareWindow(shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400');
            }

            // Event listener for the share button

            document.getElementById('facebook-share').addEventListener('click', function() {
                var facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}&quote=${encodeURIComponent(shareTitle)}`;
                    openShareWindow(facebookUrl);
                });
        
        });



  </script>