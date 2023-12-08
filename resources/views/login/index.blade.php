{{-- Extendemos nuestro layout 
  -  Contiene las principales etiquetas HTML
  -	 Etiquetas como 'meta', 'body'...
  -	 También contiene algunas etiquetas para importar 
  -	 estilos CSS y funciones de JavaScript
--}}
@extends('layouts.login')


{{-- Secciones cortas.
   - title = título de la página.
   - meta-description = descripción de la página.  
--}}
@section('title', 'Login')


{{-- Contenido Principal de la página web --}}
@section('content')
	<div class="formLogin">
		<h2 class="formLogin__title">¡Bienvenido!</h2>
		<i class="fi fi-br-user iconUser"></i>
		<p class="formLogin__description">Ingresa tus credenciales para acceder al sistema</p>

		<form method="POST" action="{{ route('login.auth') }}" class="form">
		@csrf
			<div class="input-group">
	    		<label class="label">Correo electrónico</label>
	    		<input autocomplete="off" name="email" id="email" class="input" type="email" required="required">
			</div>
			
			<div class="input-group input-group--eye">
	    		<label class="label">Contraseña</label>
	    		<input autocomplete="off" name="password" id="password" class="input" type="password" required="required">
				<p class="eye-form"><i class="fi fi-rr-eye eyeIcon"></i></p>
				<p class="eye-form"><i class="fi fi-rr-eye-crossed eyeIcon hidden"></i></p>
			</div>
			
			<div class="input-group input-group--row">
				<input type="checkbox" name="is_admin" id="is_admin"><label for="is_admin">¿Eres administrador?</label>
			</div>
			
			<div class="blockInput">
				<input type="submit" value="Ingresar" class="input input--button" id="sendButton">
			</div>
		</form>
	</div>
@endsection
