<div class="content">
    <a href="{{ route('cashier.index') }}" class="back">Inicio</a>
    <h2 class="title">Editar al cajero: {{ $cashier->nombre }}</h2>


    <form method="POST" action="{{ route('cashier.update', $cashier) }}" class="form">
      @csrf  @method('PUT')
      <div class="textCamp">
          <div class="input-group">
              <label class="label">Nombre</label>
              <input type="text" name="name" class="input" value="{{ $cashier->name }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Apellido</label>
              <input type="text" name="lastname" class="input" value="{{ $cashier->lastname }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Cédula</label>
              <input type="text" name="identification_card" class="input" value="{{ $cashier->identification_card }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Número de teléfono</label>
              <input type="text" name="number_phone" class="input" value="{{ $cashier->number_phone }}" required="required">
          </div>
          <div class="input-group">
            <label class="label">Correo electrónico</label>
            <input type="email" name="email" class="input" value="{{ $cashier->email }}" required="required">
        </div>
        <div class="input-group">
            <label class="label">Contraseña</label>
            <input type="password" name="password" class="input" value="****" required="required">
        </div>
      </div>

      <div class="input-group">            
          <input type="submit" value="Actualizar" class="input input--button">
      </div>
  </form>
</div>