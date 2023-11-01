<?php
  $setting = DB::table('setting')->first();
  ?>
  
@include("frontend.head")
<div class="culmn">
            <!--Home page style-->

            @include("frontend.menu")
            <!--Home Sections-->

            <section id="home" class="home">
            <div class="overlay"></div>
                
            </section> <!--End off Home Sections-->

 <!--Featured Section-->
 <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_text">
                                        <h3><i class="fa fa-arrow-circle-right"></i>Profil SKPD</h3>

                                        @include("frontend.profilskpd")
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-8">
                                <div class="features_item sm-m-top-30">
                                   
                                    <div class="f_item_text">
                                    <h3></i>{{$berita->judul}}</h3> 
                                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i> Posted On: {{$berita->tanggal}}<i class="fa fa-eye"></i> Dilihat: {{$berita->dibaca}} Kali</li>
                      
                      </ul> 
                        <img width="100%" src = "{{asset('berita/'.$berita->gambar)}}" class="img-responsive">
                           <div class = "caption">{{$berita->title_gambar}}</div>
                  
                           <?php echo $berita->isi;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->

           



   <!--Call to  action section-->
            <section id="action" class="action bg-primary roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="maine_action">
                            <div class="col-md-6">
                                <h3 class="text-white text-uppercase">Video Kegiatan Pemerintah Kab. Batang Hari</h3>
                               </div>
                            <div class="col-md-4">
                                <div class="card-video">
                                <div class="action_btn text-left sm-text-center">
                                    
                                    <h6><i class="fa fa-quote-left"></i>
                                    <a href="">OK</a></h6>
                                </div>
                                </div>

                                <div class="card-video">
                                <div class="action_btn text-left sm-text-center">
                                    
                                    <h6><i class="fa fa-quote-left"></i>
                                    <a href="">OK</a></h6>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include("frontend.footer")
