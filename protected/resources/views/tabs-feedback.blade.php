@extends('master')
@section('tabs')
    <style>
        .vote_icons {
            cursor: pointer;
        }
    </style>
    <div class="main-tabs">
        <ul class="nav nav-tabs">
            <li><a href="{{ route('daftar.index') }}">Buku Tamu</a></li>
            <li class="active"><a href="{{ route('feedback.index') }}">Feedback</a></li>
        </ul>
        <div class="tab-content">
            <div id="bukutamu" class="tab-pane fade">
                
            </div>
            <div id="feedback" class="tab-pane fade in active">
                <div align="center">
                    {{ HTML::image('assets/images/flat_face.png', 'Flat', ['id'=>'vote_flat','class'=>'vote_icons','width'=>'50px','height'=>'50px']) }}
                    &nbsp; &nbsp; | &nbsp; &nbsp; 
                    {{ HTML::image('assets/images/smile_face.png', 'Smile', ['id'=>'vote_smile','class'=>'vote_icons','width'=>'50px','height'=>'50px']) }}
                </div>
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