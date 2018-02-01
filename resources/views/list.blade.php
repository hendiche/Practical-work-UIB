@extends('layouts.app')
@push('pageCss')
<style type="text/css">
	.flex-left {
		flex: 7;
	}
	.flex-right {
		flex: 1;
		margin-top: 30px;
	}
</style>
@endpush
@section('content')
<div class="col-md-12">
	<div style="display: flex">
		<h1 class="flex-left">List Akreditasi</h1>
		<div class="flex-right">
			<a href="{{ route('menu') }}" class="btn btn-primary">
				<i class="fa fa-arrow-left" aria-hidden="true"></i> Back
			</a>
		</div>
	</div>
	<hr />
	<br />
	@foreach($accreditations as $item)
		<div class="col-md-6">
			<div class="panel panel-primary">
		      <div class="panel-heading">
		      	<i class="fa fa-bar-chart-o" aria-hidden="true"></i>
		      	<span style="font-size: 20px">{{ $item->programStudy->name }} - {{ Carbon::parse($item->accreditation_date)->format('d M Y') }}</span>
		      </div>
		      <div class="panel-body">
		      	<table class="table">
		      		<tr>
		      			<td>Prodi</td>
		      			<td>: {{ $item->programStudy->name }}</td>
		      		</tr>
		      		<tr>
		      			<td>Tanggal</td>
		      			<td>: {{ Carbon::parse($item->accreditation_date)->format('d F Y') }}</td>
		      		</tr>
		      		<tr>
		      			<td>User Penggisi</td>
		      			<td>: {{ $item->user->name }} - {!! strlen($item->user->email) > 15 ? substr($item->user->email, 0, 15)."..." : $item->user->email !!}</td>
		      		</tr>
		      		<tr>
		      			<td>Nilai Standar 1</td>
		      			<td>: {{ number_format($item->standartFirst->score, 2) }}</td>
		      		</tr>
		      		<tr>
		      			<td>Nilai Standar 2</td>
		      			<td>: {{ number_format($item->standartSecond->score, 2) }}</td>
		      		</tr>
		      		<tr>
		      			<td>Nilai Standar 3</td>
		      			<td>: {{ number_format($item->standartThird->score, 2) }}</td>
		      		</tr>
		      		<tr>
		      			<td>Nilai Standar 4</td>
		      			<td>: {{ number_format($item->standartFourth->score, 2) }}</td>
		      		</tr>
		      		<tr>
		      			<td>Nilai Standar 5</td>
		      			<td>: {{ number_format($item->standartFifth->score, 2) }}</td>
		      		</tr>
		      		<tr>
		      			<td>Nilai Standar 6</td>
		      			<td>: {{ number_format($item->standartSixth->score, 2) }}</td>
		      		</tr>
		      		<tr>
		      			<td>Nilai Standar 7</td>
		      			<td>: {{ number_format($item->standartSeventh->score, 2) }}</td>
		      		</tr>
		      		<tr>
		      			<td style="font-weight: bold">Total Nilai</td>
		      			<td style="font-weight: bold">: {{ number_format($item->total_score, 0) }}</td>
		      		</tr>
		      		<tr>
		      			<td colspan="2" class="text-right">
		      				<a href="{{ route('view', ['id' => $item->id]) }}" class="btn btn-primary">See Details</a>
		      			</td>
		      		</tr>
		      	</table>
		      </div>
		    </div>
		</div>
	@endforeach
</div>
@endsection
@push('pageJs')
<script type="text/javascript">
	
</script>
@endpush