<!DOCTYPE html>
<html>
<head>
	<title>create</title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
</head>
<body>
	<div class="container">
		<form action="{{ route('storeproducts') }}" method="POST">
			@csrf
			<label>title:</label>		
			<input type="text" class="form-control" name="title">
			<label>description:</label>
			<input type="text" class="form-control" name="description">
			<button class="btn btn-primary w-100">save</button>
		</form>
	</div>

</body>
</html>