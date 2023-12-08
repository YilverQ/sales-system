
<div class="content">
    <a href="{{ route('product.index') }}" class="back">Inicio</a>
    <h2 class="title">Crear un nuevo producto</h2>

    <form method="POST" action="{{ route('payment.store') }}" class="form">
          @csrf
          <div class="textCamp">
              <div class="input-group">
                  <label class="label">Nombre</label>
                  <input type="text" name="name" class="input" required="required">
              </div>
          </div>

          <div class="input-group">            
              <input type="submit" value="Guardar" class="input input--button">
          </div>
      </form>
  </div>