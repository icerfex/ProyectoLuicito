<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body style="background-color: #ccc">
	<form action="/category" method="post">
		{{ csrf_field() }}
		<input type="text" name="name" placeholder="nombre" />
		<input type="text" name="description" placeholder="description" />
		<input type="submit" value="guardar" />
	</form>
</body>
</html>