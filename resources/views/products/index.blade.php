@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>

	<title>index</title>
	<style type="text/css">
		table, tr, td, th{
			border: solid 2px black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
	@section('content')
	<table>
		<tr>
			<th>#</th>
			<th>title</th>
			<th>description</th>
			<th>user id</th>
			<th>action</th>
		</tr>
		<tr>
			@foreach ($products as $product)
				<tr>
					<td>{{++$loop->index}}</td>
					<td>{{$product->title}}</td>
					<td>{{$product->description}}</td>
					<td>{{$product->user_id}}</td>
					<td>
						@if ($product->user_id==Auth::user()->id)
							<a href="{{ route('productshow', ["id"=>$product->id]) }}">დათვალიერება</a>
							<form method="POST" action="{{ route('productdelete') }}">
								@csrf
								<input type="hidden" name="id" value="{{$product->id}}">
								<button>წაშლა</button>
							</form>
						@endif
						

					</td>
				</tr>
			@endforeach
		</tr>
	</table>
	@endsection

</body>
</html>

