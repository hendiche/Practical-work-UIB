@extends('layouts.app')
@push('pageCss')
<style type="text/css">
	.my-icon {
		font-size: 20px;
		padding-top: 5px;
	}
	.my-icon:hover {
		cursor: pointer;
	}
</style>
@endpush
@section('content')
<div>
	<h1>Akreditasi</h1>
	<hr />
	<br />
	@foreach($akreditasi as $item)
		<div class="col-md-6">
			<div class="panel panel-primary">
		      <div class="panel-heading">
		      	<i class="fa fa-bar-chart-o" aria-hidden="true" style="font-size: 22px"></i>
		      	<span style="font-size: 20px">{{ $item->programStudy->name }} - {{ Carbon::parse($item->accreditation_date)->format('d M Y') }}</span>
		      	<div style="float: right;">
		      		<span onclick="onClickView({{ $item->id }})" style="padding-right: 5px;">
		      			<i class="fa fa-eye my-icon" aria-hidden="true"></i>
		      		</span>
			      	<span onclick="onClickDelete({{ $item->id }})">
			      		<i class="fa fa-times-circle my-icon" aria-hidden="true"></i>
			      	</span>
		      	</div>
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
		      	</table>
		      </div>
		    </div>
		</div>
	@endforeach
</div>
@endsection
@push('pageJs')
<script type="text/javascript">
	function onClickDelete(rowId) {
		$('#modalDestroy').attr('action', '{{ route('admin.accreditation.destroy') }}');
		$('#form-id').val(rowId);
		return $('#formConfirmation').modal();
	}

	function onClickView(rowId) {
		var url = '{{ route('view', ['id' => 'ROWID']) }}';
		window.location.href = url.replace("ROWID", rowId);
	}
	
</script>
@endpush