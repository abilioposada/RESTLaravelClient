@extends('layout')
@section('titulo', 'Ver')
@section('contenido')
	<table class="table table-striped table-hover table-bordered">
		<tr>
			<td>Código</td>
			<td>{{ $producto->codigo }}</td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td>{{ $producto->nombre }}</td>
		</tr>
		<tr>
			<td>Cantidad</td>
			<td>{{ $producto->cantidad }}</td>
		</tr>
		<tr>
			<td>Precio</td>
			<td>${{ $producto->precio }}</td>
		</tr>
		<tr>
			<td>Vencimiento</td>
			<td>{{ $producto->vencimiento }}</td>
		</tr>
		<tr>
			<td>Categoría</td>
			<td>{{ $producto->categoria }}</td>
		</tr>
	</table>

	<a class="btn btn-dark" href="{{url('productos')}}">Regresar</a>
	<a class="btn btn-warning" href="{{url('productos/' . $producto->codigo. '/edit')}}">Editar</a>
	<form method="post" action="{{url('productos', $producto->codigo)}}">
		@csrf()
		@method('DELETE')
		<input class="btn btn-danger" type="submit" value="Eliminar" />
	</form>
@endsection