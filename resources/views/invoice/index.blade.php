<h2>Gestionar Facturas</h2>
        @foreach ($invoices as $key => $item)
            <p>Cajero: {{ $item->name }}</p>
            <p>Fecha: {{ $item->dollar_date }}</p>
            <p>Hora: {{ $item->invoice_time }}</p>
            <p>Total a pagar: {{ $item->total_to_paid }}</p>
            <a href="{{ route('invoice.show', $item->id) }}">Ver información</a> 
        @endforeach