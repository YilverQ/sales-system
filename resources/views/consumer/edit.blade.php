<div class="content">
    <h2 class="title">Editar al consumidor: {{ $consumer->name }}</h2>


    <form method="POST" action="{{ route('consumer.update', $consumer) }}" class="form">
      @csrf  @method('PUT')
      <div class="textCamp">
          <div class="input-group">
              <label class="label">Nombre</label>
              <input type="text" name="name" class="input" value="{{ $consumer->name }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Apellido</label>
              <input type="text" name="lastname" class="input" value="{{ $consumer->lastname }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Cédula</label>
              <input type="text" name="identification_card" class="input" value="{{ $consumer->identification_card }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Número de teléfono</label>
              <input type="text" name="number_phone" class="input" value="{{ $consumer->number_phone }}" required="required">
          </div>
      </div>

      <div class="input-group">            
          <input type="submit" value="Actualizar" class="input input--button">
      </div>
  </form>
</div>