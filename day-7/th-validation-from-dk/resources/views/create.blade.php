<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="main-content">
		<h1>Form điền thông tin</h1>
		<form method="post" action="{{ route('store') }}">
			{{ csrf_field() }}
			<label for="number">chỉ được nhập số</label>
			<input type="text" name="number">
			@error('number')
			<p class="text-danger">{{ $message }}</p>
			@enderror

			<button type="submit">Kiểm tra</button>
		</form>
		
	</div>
</body>
</html>