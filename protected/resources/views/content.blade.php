@extends('master')
    @section('pages-content')
      

    <div class="col-lg-12 main-content">
        <div class="main-tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#bukutamu">Buku Tamu</a></li>
                <li><a data-toggle="tab" href="#feedback">Feedback</a></li>
                <li><a data-toggle="tab" href="#persentase">Persentase</a></li>
                </ul>
            
                <div class="tab-content">
                    <div id="bukutamu" class="tab-pane fade in active">
                        @include('tabs-bukutamu')
                    <div id="feedback" class="tab-pane fade">
                        @include('tabs-feedback')
                    </div>
                    <div id="persentase" class="tab-pane fade">
                        @include('tabs-persentase')
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    @endsection