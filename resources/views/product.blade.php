@inject('category', 'App\FormResquest\Category\CategoryGet')
@inject('product', 'App\FormResquest\Product\ProductGet')

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body style="background-color: #ccc">
	<form action="/product" method="post">
		{{ csrf_field() }}
		<input type="text" name="name" placeholder="nombre" />
		<select name="category_id[]" multiple>
			@foreach($category->showAll() as $value)
			<option value="{{ $value->id }}">{{ $value->name }}</option>
			@endforeach
		</select>
		<input type="submit" value="guardar" />
	</form>
	<table border="1">
		<thead>
			<tr>
				<td>nombre</td>
				<td colspan="2">Categorias</td>
			</tr>
		</thead>
		<tbody>
			@foreach($product->showAll() as $value)
			<tr>
				<td>{{ $value->name }}</td>
				<td>
					@foreach($value->category as $v)
						{{ $v->name }}
					@endforeach
				<td>
				<td>
					@foreach($value->category as $v)
						{{ $v->description }}
					@endforeach
				<td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>