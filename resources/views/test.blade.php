@extends('layouts.app')
@push('pageCss')
<style type="text/css">
	
</style>
@endpush
@section('content')
<div>
	<h1>Akreditasi</h1>
	<hr />
	<br />
	{{ $view }}
	{{ $view->user }}
	{{ $view->programStudy }}
	{{ $view->standartFirst }}
	{{ $view->standartSecond }}
	{{ $view->standartThird }}
	{{ $view->standartFourth }}
	{{ $view->standartFifth }}
	{{ $view->standartSixth }}
	{{ $view->standartSeventh }}
</div>
@endsection
@push('pageJs')
<script type="text/javascript">
console.log({!! json_encode($view) !!})
</script>
@endpush