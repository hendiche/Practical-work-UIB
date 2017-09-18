@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">STANDART 5</div>
                    <div class="panel-body">
                        {{ Form::open(['url' => route('post_standart5')]) }}
                            <label>asdasd</label>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
