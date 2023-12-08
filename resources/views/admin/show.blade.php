<div class="content">
    <a href="{{ route('admin.index') }}" class="back">Inicio</a>
    <h2 class="title">Datos del Administrador:  '{{ $admin->name }}'</h2>
    <ul class="description">
      <li class="description__item">Nombre: {{ $admin->name }}</li>
      <li class="description__item">Apellido: {{ $admin->lastname }}</li>
      <li class="description__item">Cédula de identidad: {{ $admin->identification_card }}</li>
      <li class="description__item">Número de teléfono: {{ $admin->number_phone }}$</li>
      <li class="description__item">Correo Electróncio: {{ $admin->email }}$</li>
      <li class="description__item">Fecha de creación: {{ $admin->created_at }}</li>
      <li class="description__item">Fecha de actualización: {{ $admin->updated_at }}</li>
    </ul>

    <ul class="edit">
        <a href="{{ route('admin.edit', $admin) }}">Editar</a>
    </ul>
</div>