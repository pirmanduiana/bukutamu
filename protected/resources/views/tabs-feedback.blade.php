@extends('master')
@section('tabs')
    <style>
        .vote_icons {
            cursor: pointer;
            margin: 0 65px; 
        }
        .footer {
            min-height: 15vh;
        }
        .question {
            font-size: 24px;
        }
        .tab-content {
            margin-top: 40px;
        }
        .p-pembangunan .main-content {
            margin: 20px auto 0;
        }
    </style>
    <div class="main-tabs">
        <ul class="nav nav-tabs">
            <li class="active question"><a href="javascript:void(0)">{{config('app.question')}}</a></li>
        </ul>
        <div class="tab-content">
            <div id="bukutamu" class="tab-pane fade">
                
            </div>
            <div id="feedback" class="tab-pane fade in active">
                <div align="center">
                    
                    {{ HTML::image('assets/images/smile_face.png', 'Smile', ['id'=>'vote_smile','class'=>'vote_icons','width'=>'250px','height'=>'250px']) }}

                    {{ HTML::image('assets/images/flat_face.png', 'Flat', ['id'=>'vote_flat','class'=>'vote_icons','width'=>'250px','height'=>'250px']) }}
                    
           

                    
                </div>

                        <span style="margin: 0px 0px 0px 230px; font-size: 25px; color:orange"> <b>PUAS</b> </span>
                        <span style="margin: 0px 0px 0px 300px; font-size: 25px; color:orange"> <b>CUKUP</b> </span>
                 
            </div>
        </div>
    </div>
    <script>
        var UrlVote = "{{ route('feedback.store') }}";
    </script>
@endsection

@section('scripts')            
    {{ Html::script('assets/js/feedback.js') }}
@endsection