@extends('layouts.app')
@push('pageCss')
<style type="text/css">
	
</style>
@endpush
@section('content')
<div>
	<h1>Create Program Study</h1>
	<hr />
	<br />
	{!! Form::open(['url' => route('admin.prodi.store'), 'method' => 'POST']) !!}
		<div class="form-group">
			<label for="name">Name</label>
			{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter a Program study name', 'required' => true]) }}
		</div>
		{{ Form::submit('Submit', ['class' => 'btn btn-success btn-block']) }}
	{!! Form::close() !!}
</div>
@endsection
@push('pageJs')
<script type="text/javascript">
</script>
@endpush