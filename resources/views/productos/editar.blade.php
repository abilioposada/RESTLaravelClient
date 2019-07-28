@extends('layout')
@section('titulo', 'Editar')
@section('contenido')
	<form action="{{url('productos', $producto->codigo)}}" method="post">
		@csrf()
		@method('PUT')
		<input class="form-control" name="codigo" placeholder="Código" value="{{ $producto->codigo }}" />
		<input class="form-control" name="nombre" placeholder="Nombre" value="{{ $producto->nombre }}" />
		<input class="form-control" name="cantidad" type="number" min="1" placeholder="Cantidad" value="{{ $producto->cantidad }}" />
		<input class="form-control" name="precio" type="number" min=".01" step=".01" placeholder="Precio" value="{{ $producto->precio }}" />
		<input class="form-control" name="vencimiento" type="date" value="{{ $producto->vencimiento }}" />
		<select class="custom-select" name="categoria">
			<option>Alimentos</option>
			<option>Limpieza</option>
			<option>Vestimenta</option>
		</select>
		<input class="btn btn-success" type="submit" value="Editar" />
	</form>
	<form method="post" action="{{url('productos', $producto->codigo)}}">
		@csrf()
		@method('DELETE')
		<input class="btn btn-danger" type="submit" value="Eliminar" />
	</form>
	<a class="btn btn-dark" href="{{url('productos')}}">Regresar</a>
@endsection