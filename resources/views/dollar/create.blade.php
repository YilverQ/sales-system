
<div class="content">
    <a href="{{ route('dollar.index') }}" class="back">Inicio</a>
    <h2 class="title">Crear un nuevo dólar</h2>

    <form method="POST" action="{{ route('dollar.store') }}" class="form">
          @csrf
          <div class="textCamp">
              <div class="input-group">
                  <label class="label">Valor</label>
                  <input type="float" name="value" class="input" required="required">
              </div>
          </div>

          <div class="input-group">            
              <input type="submit" value="Guardar" class="input input--button">
          </div>
      </form>
  </div>