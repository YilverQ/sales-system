<div class="content">
    <a href="{{ route('admin.index') }}" class="back">Inicio</a>
    <h2 class="title">Editar al cajero: {{ $admin->nombre }}</h2>


    <form method="POST" action="{{ route('admin.update', $admin) }}" class="form">
      @csrf  @method('PUT')
      <div class="textCamp">
          <div class="input-group">
              <label class="label">Nombre</label>
              <input type="text" name="name" class="input" value="{{ $admin->name }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Apellido</label>
              <input type="text" name="lastname" class="input" value="{{ $admin->lastname }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Cédula</label>
              <input type="text" name="identification_card" class="input" value="{{ $admin->identification_card }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Número de teléfono</label>
              <input type="text" name="number_phone" class="input" value="{{ $admin->number_phone }}" required="required">
          </div>
          <div class="input-group">
            <label class="label">Correo electrónico</label>
            <input type="email" name="email" class="input" value="{{ $admin->email }}" required="required">
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