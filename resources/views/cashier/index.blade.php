{{-- Contenido principal de la página web --}}
<h2>Gestionar Cajeros</h2>
        <a href="{{ route('cashier.create') }}" class="item item--create">+ Crear un nuevo cajero</a>
        @foreach ($cashiers as $item)
                <p>{{ $item->name }}</p>
                    <a href="{{ route('cashier.show', $item) }}">Ver información</a> 
                    <a href="{{ route('cashier.edit', $item) }}">Editar registro</a>
                    <form action="{{ route('cashier.disabled', $item) }}" method="POST" class="form__disabled">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="item item--delete">Deshabilitar</button>                
                    </form> 
                    <form action="{{ route('cashier.destroy', $item) }}" method="POST" class="form__delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="item item--delete">Eliminar</button>                
                    </form> 
                </div> 
            </li>
        @endforeach
        </ul>
    </div>
  </div>