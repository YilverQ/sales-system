<h2>Gestionar Products</h2>
        <a href="{{ route('product.create') }}" class="item item--create">+ Crear un nuevo elemento</a>
        @foreach ($products as $item)
                <p>{{ $item->name }}</p>
                    <a href="{{ route('product.show', $item) }}">Ver información</a> 
                    <a href="{{ route('product.edit', $item) }}">Editar registro</a>
                    <form action="{{ route('product.disabled', $item) }}" method="POST" class="form__disabled">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="item item--delete">Deshabilitar</button>                
                    </form> 
                    <form action="{{ route('product.destroy', $item) }}" method="POST" class="form__delete">
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