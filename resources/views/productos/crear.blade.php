@extends('layout')
@section('titulo', 'Crear')
@section('contenido')
	<form action="{{url('productos')}}" method="post">
		@csrf()
		<input class="form-control" name="codigo" maxlength="8" placeholder="Código" />
		<input class="form-control" name="nombre" placeholder="Nombre" />
		<input class="form-control" name="cantidad" type="number" min="1" placeholder="Cantidad" />
		<input class="form-control" name="precio" type="number" min=".01" step=".01" placeholder="Precio" />
		<input class="form-control" name="vencimiento" type="date" value="{{date('Y-m-d')}}" />
		<select class="custom-select" name="categoria">
			<option>Alimentos</option>
			<option>Limpieza</option>
			<option>Vestimenta</option>
		</select>
		<input class="btn btn-primary" type="submit" value="Ingresar" />
	</form>
	
	<a class="btn btn-dark" href="{{url('productos')}}">Regresar</a>
@endsection