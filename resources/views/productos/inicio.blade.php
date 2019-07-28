@extends('layout')
@section('titulo', 'Listar')
@section('contenido')
	<a class="btn btn-secondary" href="{{url('productos/create')}}">Crear</a>

	<table class="table table-sm table-dark table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Precio Unitario</th>
				<th>Fecha Vencimiento</th>
				<th>Categoría</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($productos as $producto)
			<tr>
				<td>{{ $producto->codigo }}</td>
				<td>{{ $producto->nombre }}</td>
				<td>{{ $producto->cantidad }}</td>
				<td>${{ $producto->precio }}</td>
				<td>{{ $producto->vencimiento }}</td>
				<td>{{ $producto->categoria }}</td>
				<td>
					<a class="btn btn-light" href="{{url('productos', $producto->codigo)}}">Ver</a>
				</td>
				<td>
					<a class="btn btn-warning" href="{{url('productos/' . $producto->codigo. '/edit')}}">Editar</a>
				</td>
				<td>
					<form method="post" action="{{url('productos', $producto->codigo)}}">
						@csrf()
						@method('DELETE')
						<input class="btn btn-danger" type="submit" value="Eliminar" />
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection