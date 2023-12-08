<!DOCTYPE html>
<html lang="es">
<head>
	<!--Metas-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yilver Quevedo">
	<meta name="description" content="Ingresa tus credenciales para acceder al sistema">
	<meta name="theme-color" content="#f5634a">
	
	<!--Title-->
	<title>Sistema de ventas - @yield('title', 'Bodegón')</title>
	
	<!--Estilos CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/message.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login/main.css') }}">
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
	@yield('cssFiles')
	
	<!--Icono de la web // Favicon-->
	<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png" />	
	
	<!--Importamos las fuentes-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<div class="content">
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
	
	
	<!-- Content -->
	@yield('content')
	
	
	</div>
	<!--Enlaces JS-->
	@yield('jsFiles')
	<script src="{{ asset('js/message.js') }}"></script>
	<script src="{{ asset('js/eyePassword.js') }}"></script>
	<script src="{{ asset('js/loginForm.js') }}"></script>
</body>
</html>