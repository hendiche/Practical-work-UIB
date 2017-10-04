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
        <div class="col-md-2 col-md-offset-5 top-btn">
        	<a href="{{ route('menu') }}" class="btn btn-success btn-block flat button-in hvr-float-shadow">MASUK</a>
        </div>
    </div>
</div>
@endsection
