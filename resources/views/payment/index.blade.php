<h2>Gestionar Formas de pago</h2>
        <a href="{{ route('payment.create') }}" class="item item--create">+ Crear un nuevo elemento</a>
        @foreach ($payments as $item)
                <p>{{ $item->name }}</p>
                    <a href="{{ route('payment.show', $item) }}">Ver información</a> 
                    <a href="{{ route('payment.edit', $item) }}">Editar registro</a>
                    <form action="{{ route('payment.disabled', $item) }}" method="POST" class="form__disabled">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="item item--delete">Deshabilitar</button>                
                    </form> 
                    <form action="{{ route('payment.destroy', $item) }}" method="POST" class="form__delete">
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