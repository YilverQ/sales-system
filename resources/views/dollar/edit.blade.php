<div class="content">
    <a href="{{ route('dollar.index') }}" class="back">Inicio</a>
    <h2 class="title">Editar el Dólar: {{ $dollar->nombre }}</h2>


    <form method="POST" action="{{ route('dollar.update', $dollar) }}" class="form">
      @csrf  @method('PUT')
      <div class="textCamp">
          <div class="input-group">
              <label class="label">Valor</label>
              <input type="float" name="value" class="input" value="{{ $dollar->value }}" required="required">
          </div>
      </div>

      <div class="input-group">            
          <input type="submit" value="Actualizar" class="input input--button">
      </div>
  </form>