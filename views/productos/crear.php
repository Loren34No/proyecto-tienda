<h1>Crear nuevos productos</h1>

<form action="<?= URL_BASE; ?>Producto/guardar" method="POST" enctype="multipart/form-data">
  <label for="nombre">Nombre:</label>
  <input type="text" name="nombre" id="nombre" required>

  <label for="descripcion">Descripción:</label>
  <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>

  <label for="precio">Precio:</label>
  <input type="text" name="precio" id="precio" required>

  <label for="stock">Stock:</label>
  <input type="number" name="stock" id="stock" required>

  <label for="categoria">Categoria:</label>
  <?php $categorias = Util::mostrarCategorias(); ?>
  <select name="categoria" id="categoria">
    <?php while ($cat = $categorias->fetch_object()): ?>
      <option value="<?= $cat->id; ?>">
        <?= $cat->nombre; ?>
      </option>
    <?php endwhile; ?>
  </select>

  <label for="imagen">Imagen:</label>
  <input type="file" name="imagen" id="imagen">

  <button type="submit">Crear</button>
</form>