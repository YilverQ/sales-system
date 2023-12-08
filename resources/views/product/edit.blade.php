<div class="content">
    <a href="{{ route('product.index') }}" class="back">Inicio</a>
    <h2 class="title">Editar al producto: {{ $product->nombre }}</h2>


    <form method="POST" action="{{ route('product.update', $product) }}" class="form">
      @csrf  @method('PUT')
      <div class="textCamp">
          <div class="input-group">
              <label class="label">Nombre</label>
              <input type="text" name="name" class="input" value="{{ $product->name }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Barcode</label>
              <input type="text" name="barcode" class="input" value="{{ $product->barcode }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Stocks</label>
              <input type="number" name="stock" class="input" value="{{ $product->stock }}" required="required">
          </div>
          <div class="input-group">
              <label class="label">Costo</label>
              <input type="float" name="cost" class="input" value="{{ $product->cost }}" required="required">
          </div>
          <div class="input-group">
            <label class="label">Precio</label>
            <input type="float" name="price" class="input" value="{{ $product->price }}" required="required">
        </div>
      </div>

      <div class="input-group">            
          <input type="submit" value="Actualizar" class="input input--button">
      </div>
  </form>
</div>