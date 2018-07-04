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
                        <div class="content-form-page">
                                <div class="form-registration">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ action('ContentController@store') }}">
                                    @csrf
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="name" class="control-label">Nama Lengkap</label>
                                            <div class="form-input">
                                                <i class="fa fa-user icon"></i>
                                                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" placeholder="Nama lengkap" value="{{ old('nama') }}"autofocus>
                                                @if ($errors->has('nama'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('nama') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>   
                                         <div class="form-group">
                                            <label for="asal" class="control-label">Asal</label>
                                            <div class="form-input">
                                                <i class="fa fa-building icon"></i>
                                                <input id="asal" type="text" class="form-control{{ $errors->has('asal') ? ' is-invalid' : '' }}" name="asal" placeholder="Asal instansi / umum" value="{{ old('asal') }}">
                                                @if ($errors->has('asal'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('asal') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>                   
                                        <div class="form-group">
                                            <label for="no_hp" class="control-label">No. HP / Telepon</label>
                                            <div class="form-input">
                                                <i class="fa fa-phone icon"></i>
                                                <input id="no_hp" type="text" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : '' }}" name="no_hp" placeholder="No. HP / telepon" value="{{ old('no_hp') }}">
                                                @if ($errors->has('no_hp'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('no_hp') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="control-label">Email</label>
                                            <div class="form-input">
                                                <i class="fa fa-envelope icon"></i>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Alamat email" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                       
                                    </fieldset>
                                    
                                    <div class="button-daftar">                        
                                        <button type="submit" class="btn btn-primary btn-daftar">Daftar</button>
                                    </div>
                                    </form>                  
                                </div>
                            </div>
                        </div>
                    <div id="feedback" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="persentase" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    @endsection