<div class="content">
    <a href="{{ route('payment.index') }}" class="back">Inicio</a>
    <h2 class="title">Editar la Forma de Pago: {{ $payment->nombre }}</h2>


    <form method="POST" action="{{ route('payment.update', $payment) }}" class="form">
      @csrf  @method('PUT')
      <div class="textCamp">
          <div class="input-group">
              <label class="label">Nombre</label>
              <input type="text" name="name" class="input" value="{{ $payment->name }}" required="required">
          </div>
      </div>

      <div class="input-group">            
          <input type="submit" value="Actualizar" class="input input--button">
      </div>
  </form>