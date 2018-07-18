@extends('master')
@section('tabs')

<style>
     .aa {
        color : #fff;
     }
</style>


    <div class="main-tabs">
        <ul class="nav nav-tabs">
                <li class="active"><a href="javascript:void(0)">Informasi Jumlah Pengunjung dan Feedback</a></li>

                <!-- <li><a href="{{ route('feedback.index') }}">Feedback</a></li> -->
        </ul>
        <div class="tab-content">
        <!-- Small boxes (Stat box) -->
                <div class="row"> 
                   <div class="col-lg-4 col-xs-6 col-lg-offset-2">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3 class="aa">{{ $countTamu }}</h3>

                        <p>Kunjungan Hari Ini</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                        </div>
                   </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                        <div class="inner">
                        <h3 class="aa">{{ $countFB }}</h3>

                        <p>Feedback Masuk Hari Ini</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-thumbs-up"></i>
                        </div>
                        <a href="#" class="small-box-footer"> 
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-xs-6 col-lg-offset-2">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                        <div class="inner">
                        <h3 class="aa">{{ $countsmile }}</h3>

                        <p>POLLING SUARA PUAS</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-smile-o"></i>
                        </div>
                        <a href="#" class="small-box-footer"> 
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                        </div>
                </div>

                <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                        <div class="inner">
                        <h3 class="aa">{{ $countflat }}</h3>

                        <p>POLLING SUARA CUKUP</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-meh-o"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                        </div>
                </div>
            </div>

                {{-- <div id="bukutamu" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading"><b>Jumlah Feedback</b></div>
                                <div class="panel-body">
                                    <canvas id="myChart" height="280" width="600"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div> --}}
        </div>
    </div>
@endsection

@section('scripts')            
    {{ Html::script('assets/js/main.js') }}
@endsection