@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">STANDART 2</div>
				<div class="panel-body">
					{!! Form::open(['url' => route('post_standart1')]) !!}
                    <div class="form-group">
                        <label>2.1 Tata pomong menjamin terwujudnya visi, terlaksananya misi, tercapainya tujuan, berhasilnya strategi yang digunakan secara kredibel, transparan, akuntabel, bertanggung jawab dan adil.</label>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.a', 4) }}Memiliki visi, misi, tujuan dan sasaran yang sangat jelas dan sangat realistik</label> 
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.a', 3) }}Memiliki visi, misi, tujuan dan sasaran jelas dan realistik</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.a', 2) }}Memiliki visi, misi, tujuan dan sasaran yang cukup jelas namun kurang realistik</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.a', 1) }}Memiliki visi, misi, tujuan, dan sasaran yang kurang jelas dan tidak realistik</label>
                        </div>
                        <div class="radio">
                            <label>{{ Form::radio('1.1.a', 0) }}Tidak ada</label>
                        </div>
                    </div>
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    var hasil = {!! json_encode($hasil) !!}
    console.log(hasil);
    if (hasil) {
        console.log("ada hasl");
    } else {
        console.log('no data');
    }
</script>
@endsection
