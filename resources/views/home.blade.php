@extends('layouts.app')
@push('pageCss')
    <style type="text/css">
    	.top-row {
    		margin-top: 5%;
    	}
    	.top-btn {
    		margin-top: 5%;
    	}
    	.flat {
    		border-radius: 0;
    	}
        .img {
        	width: 275px;
        }
        .button-in {
        	padding-top: 20px;
        	padding-bottom: 20px;
        	font-size: 21px
        }
    </style>
@endpush
@section('content')
<div class="container">
    <div class="row top-row">
        <div class="col-md-10 col-md-offset-1 text-center">
            {{-- <a href="{{ route('standart1') }}" class="btn btn-link"> --}}
                <h1>SIMULASI AKREDITASI PROGRAM STUDI</h1>
            {{-- </a> --}}
        	<div>
        		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAqGWUSTmutwYDSeABtBViZjS-byHzn9QFcLkWThq_YA8M17fF" class="img">
        	</div>
        </div>
        @if(!Auth::check())
            <div class="col-md-4 col-md-offset-4 top-btn">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
            </div>
            <div class="col-md-2 col-md-offset-5">
                <button type="submit" class="btn btn-success btn-block flat button-in hvr-float-shadow">MASUK</button>
                    </form>
            </div>
        @else
            <div class="col-md-2 col-md-offset-5 top-btn">
                <a href="{{ route('menu') }}" class="btn btn-success btn-block flat button-in hvr-float-shadow">MASUK</a>
            </div>
        @endif
    </div>
</div>
@endsection
