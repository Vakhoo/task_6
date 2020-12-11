@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
</head>
<body>
	@section('content')
		<div class="container">
			<form action="{{ route('productupdate') }}" method="POST">
				@csrf
				<input type="hidden" name="id" value="{{$data->id}}">
				<label>title:</label>		
				<input type="text" class="form-control" name="title" value="{{$data->title}}">
				<label>description:</label>		
				<input type="text" class="form-control" name="description" value="{{$data->description}}">
				
				<button >save</button>
			</form>
		</div>
	@endsection

</body>
</html>

