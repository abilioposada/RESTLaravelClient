<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Productos - @yield('titulo')</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />
</head>
<body>
	<div class="container">
		<div class="row">
			<header>
				<h1>Productos</h1>
				<h2>@yield('titulo')</h2>
			</header>
		</div>
		<div class="row">
			@yield('contenido')
		</div>
	</div>
</body>
</html>