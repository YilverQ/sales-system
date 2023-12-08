
  <div class="content">
    <a href="{{ route('cashier.index') }}" class="back"><i class="fi fi-rr-arrow-small-left"></i></a>
    <h2 class="title">Crear un nuevo cajero</h2>

    <form method="POST" action="{{ route('cashier.store') }}" class="form">
          @csrf
          <div class="textCamp">
              <div class="input-group">
                  <label class="label">Nombre</label>
                  <input type="text" name="name" class="input" required="required">
              </div>
              <div class="input-group">
                  <label class="label">Apellido</label>
                  <input type="text" name="lastname" class="input" required="required">
              </div>
              <div class="input-group">
                  <label class="label">Cédula</label>
                  <input type="text" name="identification_card" class="input" required="required">
              </div>
              <div class="input-group">
                  <label class="label">Número de teléfono</label>
                  <input type="text" name="number_phone" class="input" required="required">
              </div>
              <div class="input-group">
                <label class="label">Correo electrónico</label>
                <input type="email" name="email" class="input" required="required">
            </div>
            <div class="input-group">
                <label class="label">Contraseña</label>
                <input type="password" name="password" class="input" required="required">
            </div>
          </div>

          <div class="input-group">            
              <input type="submit" value="Guardar" class="input input--button">
          </div>
      </form>
  </div>