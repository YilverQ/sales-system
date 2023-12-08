{{-- Contenido principal de la página web --}}
<h2>Gestionar Dólares</h2>
        @foreach ($dollars as $item)
                <h2>{{ $item->dollar_date }}</h2>
                <p>{{ $item->value }}$</p>
        @endforeach
        </ul>
    </div>
  </div>