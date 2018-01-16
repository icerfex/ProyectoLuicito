<!DOCTYPE html>
<html>
	<head>
		<title></title>

	</head>
	<body style="background-color: #ccc">

		<form action="/pharmacy/{{$pharmacy->id}}" id="save_form" method="post">
		    {{ csrf_field() }}			
			
			<input type="text" value="{{$pharmacy->name}}" name="name" placeholder="nombre" />
			<input type="text" name="address" placeholder="direccion" value="{{$pharmacy->address}}" />
			<input type="text" name="attention" placeholder="horario-atencion" value="{{$pharmacy->attention}}" />
			<input type="number" name="phone" placeholder="telefono" value="{{$pharmacy->phone}}" />
			<input type="submit" value="guardar" />
		</form>
		
	</body>
</html>