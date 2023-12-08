<div class="content">
    <h2 class="title">Datos del consumidor:  '{{ $consumer->name }}'</h2>
    <ul class="description">
      <li class="description__item">Nombre: {{ $consumer->name }}</li>
      <li class="description__item">Apellido: {{ $consumer->lastname }}</li>
      <li class="description__item">Cédula: {{ $consumer->identification_card }}</li>
      <li class="description__item">Número de teléfono: {{ $consumer->number_phone }}</li>
      <li class="description__item">Fecha de creación: {{ $consumer->created_at }}</li>
      <li class="description__item">Fecha de actualización: {{ $consumer->updated_at }}</li>
    </ul>

    <ul class="edit">
        <a href="{{ route('consumer.edit', $consumer) }}">Editar</a>
    </ul>
</div>