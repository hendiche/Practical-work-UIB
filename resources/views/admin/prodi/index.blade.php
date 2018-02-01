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
	#content {
		padding: 0 15px;
	}
</style>
@endpush
@section('content')
<div>
	<div style="display: flex">
		<h1 class="flex-left">Program Studi</h1>
		<div class="flex-right">
			<a href="{{ route('admin.prodi.create') }}" class="btn btn-primary">
				<i class="fa fa-plus" aria-hidden="true"></i> Add
			</a>
		</div>
	</div>
	<hr />
	<br />
	<div id="content">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($prodi as $index => $item)
				<tr>
					<td>{{ $index + 1 }}</td>
					<td>{{ $item->name }}</td>
					<td class="text-right"><a href="#" class="btn btn-danger" onclick="onClickDelete({{$item->id}})">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
@push('pageJs')
<script type="text/javascript">
	function onClickDelete(rowId) {
		$('#modalDestroy').attr('action', '{{ route('admin.prodi.destroy') }}');
		$('#form-id').val(rowId);
		return $('#formConfirmation').modal();
	}
</script>
@endpush