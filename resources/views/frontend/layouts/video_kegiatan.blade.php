
<div class="col-md-6">
<div class="widget_latst_item m-top-30">
                                <h2 class="text-white text-uppercase">VIDEO KEGIATAN PEMERINTAH KAB. BATANG HARI</h2>
                                </div><!-- End off widget item -->
                                </div>
            <div class="col-md-4">
                
<div class="widget_latst_item m-top-30">
            <div class="card-video">
                                
            @foreach($video_kegiatan as $row)                                  
                                            <div class="widget_latst_item m-top-30">
                                        <div class="item_icon">
                        <img src="{{ asset('frontend/assets/images/ltst-img-1.jpg')}}" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                        
                                        <div class="f_item_text">    
                                        <a href="{{$row->link}}">{{$row->judul}}</a>
                                        <p>
                                            <a href="">21<sup>th</sup> July 2016</a></p>
                                        </div>
                                    </div>
                                    </div>
                                   @endforeach
                                   </div></div>
                                   </div>