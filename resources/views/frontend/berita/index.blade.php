@extends('frontend.layouts.app')
@section('content')

<section id="action" class="business bg-grey roomy-40">
</section>
<section id="action" class="business bg-grey roomy-40">
                <div class="container">
                    
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase"><strong>Berita</strong></h2>    
                            
                        </div>
                        <div class="row">
                        
                        <div class="maine_action">

                        @foreach($berita as $row)  
                                                <div class="col-md-3">
                                                <?php
                                        $url = URL::to("baca/".$row->id."/".str_replace(' ','-',$row->judul)."/".$row->tanggal);
                                        ?>
                                                <div class="card-video">
                                                <h5><a href="<?= $url ?>">{{$row->judul}}</a></h5>
                                                    
                                   </div>
                    </div>@endforeach  
                    
                                   </div>
                          
                    </div>         
                    <div align="center">
                    {{ $berita->links() }}

                    </div>
                </div>
            </section>                            
           
            @endsection