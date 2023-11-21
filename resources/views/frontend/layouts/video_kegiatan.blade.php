
<div class="col-md-4">
<div class="widget_latst_item m-top-30">
                                <h2 class="text-uppercase"><strong>VIDEO</strong> KEGIATAN PEMERINTAH KAB. BATANG HARI</h2>    
                            </div><!-- End off widget item -->
                                </div>
            <div class="col-md-6">
                
<div class="widget_latst_item m-top-30">
            
@foreach($video_kegiatan as $row)     <div class="card-video">
                                                             
                                            <div class="widget_latst_item m-top-30">
                                        <div class="item_icon">
                        <img src="{{ asset('frontend/assets/images/ltst-img-1.jpg')}}" alt="" /></div>
                                        <div style="display: inline-block; width: 70%;">
                                        
                                        <h5><a href="{{$row->link}}">{{$row->judul}}</a></h5>
                                        <p>
                                            <a href="">21<sup>th</sup> July 2016</a></p>
                                        
                                    </div>
                                    </div>
                                   </div>@endforeach
                                   </div>
                                   </div>