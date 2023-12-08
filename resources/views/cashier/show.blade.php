<div class="content">
    <a href="{{ route('cashier.index') }}" class="back">Inicio</a>
    <h2 class="title">Datos del cashier:  '{{ $cashier->name }}'</h2>
    <ul class="description">
      <li class="description__item">Nombre: {{ $cashier->name }}</li>
      <li class="description__item">Apellido: {{ $cashier->lastname }}</li>
      <li class="description__item">Cédula: {{ $cashier->identification_card }}</li>
      <li class="description__item">Número de teléfono: {{ $cashier->number_phone }}</li>
      <li class="description__item">Correo electrónico: {{ $cashier->email }}</li>
      @if ($cashier->disabled)
        <li class="description__item">Deshabilitado: Si</li>
      @endif
      @if (!$cashier->disabled)
        <li class="description__item">Deshabilitado: No</li>
      @endif
      <li class="description__item">Fecha de creación: {{ $cashier->created_at }}</li>
      <li class="description__item">Fecha de actualización: {{ $cashier->updated_at }}</li>
      <li class="description__item">Administrador: {{ $admin->name }}</li>
    </ul>

    <ul class="edit">
        <a href="{{ route('cashier.edit', $cashier) }}">Editar</a>
    </ul>
</div>