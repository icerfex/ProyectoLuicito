<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body style="background-color: #ccc">
	<form action="pharmacy_submit" method="get" accept-charset="utf-8">
		<select name="type">
           <option {{$type?'selected':''}} value="name">Nombre</option>
           <option {{$type?'selected':''}} value="address">Dirección</option>
           <option {{$type?'selected':''}} value="attention">Turno</option>
           <option {{$type?'selected':''}} value="phone">Telefono</option>
        </select>

        <div class="row"> 
            <div class="col-xs-12 col-sm-6">
               
                <input value="{{$buscar}}" type="text" class="form-control" id="pagina" name="buscar" placeholder="Categoria" required />           
                                
            </div>
            <div>
              <button type="submit" id="button_save" class="btn btn-primary"><i class="fa fa-floppy-o"></i>Buscar</button>    
            </div>
                                        
        </div> 
	</form>	
	<form action="/pharmacy" method="post">
		{{ csrf_field() }}
		<input type="text" name="name" placeholder="nombre" />
		<input type="text" name="address" placeholder="direccion" />
		<input type="text" name="attention" placeholder="horario-atencion" />
		<input type="number" name="phone" placeholder="telefono" />
		<input type="submit" value="guardar" />
	</form>
	<br>
	<br>
	<table border="1">
		<thead>
			<tr>
				<td>nombre</td>
				<td>Direccion</td>
				<td colspan="2">Horarios de Atencion</td>
				<td colspan="2">Telefono</td>
				<td colspan="2">Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tbody>
			@foreach($pharmacy as $value)
			<tr>
				<td>{{ $value->name }}</td>
				<td>{{ $value->address }}<td>
				<td>{{ $value->attention }}<td>
				<td>{{ $value->phone }}<td>
				<td><a href="/pharmacy/{{$value->id}}/edit">editar</a></td>
				<td><a href="/pharmacy/delete/{{$value->id}}">eliminar</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>