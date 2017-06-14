<div class="admin-options-desktop">
  {{ Form::open(['route' => 'product.delete', 'method' => 'destroy']) }}
    <input type="hidden" name="id" value="{{ $product->id }}">

    <!-- Eliminar -->
    <button type="submit" class="admin-delete-item z-depth-1">Eliminar producto</button>
    <!-- Editar -->
    <a href="{{ route('product.edit', $product->id) }}" class="admin-edit-item z-depth-1">Editar informacion</a>

  {{ Form::close() }}
</div>
