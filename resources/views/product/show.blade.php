<div class="content">
    <a href="{{ route('product.index') }}" class="back">Inicio</a>
    <h2 class="title">Datos del producto:  '{{ $product->name }}'</h2>
    <ul class="description">
      <li class="description__item">Nombre: {{ $product->name }}</li>
      <li class="description__item">Barcode: {{ $product->barcode }}</li>
      <li class="description__item">Stock: {{ $product->stock }}</li>
      <li class="description__item">Cost: {{ $product->cost }}$</li>
      <li class="description__item">Precio: {{ $product->price }}$</li>
      <li class="description__item">Ganancia: {{ ($product->price - $product->cost) }}$</li>
      @if ($product->disabled)
        <li class="description__item">Deshabilitado: Si</li>
      @endif
      @if (!$product->disabled)
        <li class="description__item">Deshabilitado: No</li>
      @endif
      <li class="description__item">Fecha de creación: {{ $product->created_at }}</li>
      <li class="description__item">Fecha de actualización: {{ $product->updated_at }}</li>
      <li class="description__item">Administrador: {{ $admin->name }}</li>
    </ul>

    <ul class="edit">
        <a href="{{ route('product.edit', $product) }}">Editar</a>
    </ul>
</div>