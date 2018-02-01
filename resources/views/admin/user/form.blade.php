@extends('layouts.app')
@push('pageCss')
<style type="text/css">
	
</style>
@endpush
@section('content')
<div>
	<h1>Create User</h1>
	<hr />
	<br />
	{!! Form::open(['url' => route('admin.user.store'), 'method' => 'POST']) !!}
		<div class="form-group">
			<label for="name">Name</label>
			{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Enter a name', 'required' => true]) }}
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			{{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter a email', 'required' => true]) }}
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			{{ Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Enter a password', 'required' => true]) }}
		</div>
		<div class="form-group">
			<label for="role">Role</label>
			{{ Form::select('role', $roles->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'role', 'placeholder' => 'Select a role', 'required' => true]) }}
		</div>
		{{ Form::submit('Submit', ['class' => 'btn btn-success btn-block']) }}
	{!! Form::close() !!}
</div>
@endsection
@push('pageJs')
<script type="text/javascript">
</script>
@endpush