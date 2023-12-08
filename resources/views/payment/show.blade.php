<div class="content">
    <a href="{{ route('payment.index') }}" class="back">Inicio</a>
    <h2 class="title">Datos del producto:  '{{ $payment->name }}'</h2>
    <ul class="description">
      <li class="description__item">Nombre: {{ $payment->name }}</li>
      @if ($payment->disabled)
        <li class="description__item">Deshabilitado: Si</li>
      @endif
      @if (!$payment->disabled)
        <li class="description__item">Deshabilitado: No</li>
      @endif
      <li class="description__item">Fecha de creación: {{ $payment->created_at }}</li>
      <li class="description__item">Fecha de actualización: {{ $payment->updated_at }}</li>
      <li class="description__item">Administrador: {{ $admin->name }}</li>
    </ul>

    <ul class="edit">
        <a href="{{ route('payment.edit', $payment) }}">Editar</a>
    </ul>
</div>