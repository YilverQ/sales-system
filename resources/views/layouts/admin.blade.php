<!DOCTYPE html>
<html lang="es">
<head>
	<!--Metas-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yilver Quevedo">
	<meta name="description" content="Sistema de Ventas">
	<meta name="theme-color" content="#3d5a80">
	
	<!--Title-->
	<title>Bodegón - @yield('title', 'Sistema de Ventas')</title>
	
	<!--Estilos CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
	@yield('cssFiles')
	
	<!--Icono de la web // Favicon-->
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />	
	
	<!--Importamos los iconos de Flaticon-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
	@yield('icons')

	<!--Importamos las fuentes-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	@if (session('message-error'))
        <p class="message message--error">{{ session('message-error') }} <i class="fi fi-rr-cross-circle botonIcon" id="botonIcon"></i></p>
    @endif	
    @if (session('message-success'))
        <p class="message message--success">{{ session('message-success') }} <i class="fi fi-rr-cross-circle botonIcon" id="botonIcon"></i></p>
    @endif

	

	<!--Enlaces JS-->
	@yield('jsFiles')
	<script type="module" src="{{ asset('js/main.js') }}"></script>
</body>
</html>



<!DOCTYPE html>
<html lang="es">
<head>
	<!--Metas-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yilver Quevedo">
	<meta name="description" content="Sistema de ventas">
	<meta name="theme-color" content="#f5634a">
	
	<!--Title-->
	<title>Sistema de ventas - @yield('title', 'Bodegón')</title>
	
	<!--Estilos CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/message.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/header.css') }}">
	
	<!--Iconos-->
	@yield('cssFiles')

	
	<!--Icono de la web // Favicon-->
	<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png" />	
	
	<!--Importamos las fuentes-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Messages -->
	@if (session('message-error'))
        <p class="message message--error">{{ session('message-error') }} 
			<i class="fi fi-rr-cross-circle cross-message" id="cross-message"></i>
		</p>
    @endif	
    @if (session('message-success'))
        <p class="message message--success">{{ session('message-success') }} 
        	<i class="fi fi-rr-cross-circle cross-message" id="cross-message"></i>
        </p>
    @endif	
	@if (session('message-warning'))
        <p class="message message--warning">{{ session('message-warning') }} 
        	<i class="fi fi-rr-cross-circle cross-message" id="cross-message"></i>
        </p>
    @endif	
	<div class="content">
	
	
	<!-- Menú -->
	<header class="header">
		<a href="/"><h2 class="header__title">Sistema de ventas</h2></a>
		<ul class="nav">
			<div class="nav__item">
				<div class="mainItemList">
					<img src="{{ asset('img/admin/cashier.png') }}" class="nav__img">
					<li class="mainItemList__title">Cajeros</li>
				</div>

				<ul class="acordion">
					<li class="acordion__item">
						<img src="{{ asset('img/admin/cashier.png') }}" class="nav__img">
						<p class="acordion__itemTitle">Crear cajero</p>
					</li>
				</ul>
			</div>

			<a href="{{ route('product.index') }}" class="nav__item">
				<img src="{{ asset('img/admin/product.png') }}" class="nav__img">
				<li class="nav__item-title">Productos</li>
			</a>

			<a href="{{ route('payment.index') }}" class="nav__item">
				<img src="{{ asset('img/admin/payment.png') }}" class="nav__img">
				<li class="nav__item-title">Métodos de pagos</li>
			</a>

			<a href="{{ route('dollar.index') }}" class="nav__item">
				<img src="{{ asset('img/admin/dollar.png') }}" class="nav__img">
				<li class="nav__item-title">Precio del dólar</li>
			</a>

            <a href="{{ route('invoice.index') }}" class="nav__item">
				<img src="{{ asset('img/admin/invoice.png') }}" class="nav__img">
				<li class="nav__item-title">Facturas</li>
			</a>

			<a href="{{ route('admin.edit') }}" class="nav__item">
				<img src="{{ asset('img/admin/edit.png') }}" class="nav__img">
				<li class="nav__item-title">Editar perfil</li>
			</a>

			<a href="{{ route('login.logout') }}" class="nav__item">
				<img src="{{ asset('img/admin/out.png') }}" class="nav__img">
				<li class="nav__item-title">Salir de la aplicación</li>
			</a>

		</ul>
	</header>

	<!-- Content -->
	@yield('content')
	
	
	</div>
	<!--Enlaces JS-->
	@yield('jsFiles')
	<script src="{{ asset('js/message.js') }}"></script>
</body>
</html>