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

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b>Grafik Tingkat Kepuasan Kunjungan Pameran</b></div>
                        <div class="panel-body">
                               <canvas height="40" width="80" id="myChart"></canvas>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
@endsection

@section('scripts')            
    {{ Html::script('assets/js/main.js') }}
    <script type="text/javascript">
        var url = "{{ url('/getchart') }}";
        var Dates = new Array();
        var Satisfies = new Array();
        var Enoughs = new Array();

        $(document).ready(function(){
            $.get(url, function(response){
                response.forEach(function(data){
                    Dates.push(data.tgl);
                    Satisfies.push(data.puas);
                    Enoughs.push(data.cukup);
                });
                var ctx = document.getElementById("myChart").getContext("2d");
                    var data = {
                    labels: Dates,
                    datasets: [{
                        label: "Puas",
                        backgroundColor: "blue",
                        data: Satisfies
                    }, {
                        label: "Cukup",
                        backgroundColor: "red",
                        data: Enoughs
                    }]
                    };
                    var myBarChart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: {
                        barValueSpacing: 20,
                        scales: {
                        yAxes: [{
                            ticks: {
                            min: 0,
                            }
                        }]
                        }
                    }
                }); 
            });
        });
    </script>

@endsection