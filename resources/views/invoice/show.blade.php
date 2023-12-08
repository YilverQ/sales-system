<div class="content">
    <a href="{{ route('invoice.index') }}" class="back">Inicio</a>
    <h2 class="title">Factura:  '{{ $invoice->id }}'</h2>
    <ul class="description">
      <li class="description__item">Fecha: {{ $invoice->invoice_date }}</li>
      <li class="description__item">Hora: {{ $invoice->invoice_time }}</li>
      <li class="description__item">Precio del dólar: {{ $dollar->value }}</li>
      <li class="description__item">Total a pagar (bfs): {{ $invoice->total_to_paid }}</li>
      <li class="description__item">Total a pagar ($): {{ $invoice->total_to_paid / $dollar->value }}</li>
      <li class="description__item">Cajero:  {{ $cashier->name }}</li>
    </ul>

    <h2 class="title">Productos:</h2>
    @foreach ($products as $key => $item)
      <ul class="description">
        <li class="description__item">Nombre: {{ $item->name }}</li>
        <li class="description__item">Cantidad: {{ $item->quantity }}</li>
        <li class="description__item">Precio unitario: {{ $item->price }}</li>
        <li class="description__item">Precio total: {{ $item->quantity * $item->price }}</li>
      </ul>
    @endforeach
    
</div>