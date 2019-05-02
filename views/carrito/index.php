<h1>Carrito de la compra</h1>
<table>
  <thead>
    <tr>
      <th>Imagen</th>
      <th>Nombre</th>
      <th>Unidades</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($carrito as $key => $value) :
      $producto = $value['producto'];
    ?>

    <tr>
      <td>
        <?php if ($producto->imagen != null) : ?>
          <img src="<?= URL_BASE; ?>subidas/imagenes/<?= $producto->imagen; ?>" class="img_carrito">
        <?php else : ?>
          <img src="<?= URL_BASE; ?>assets/img/camiseta.png" class="img_carrito">
        <?php endif; ?>
      </td>
      <td>
        <a href="<?= URL_BASE; ?>Producto/ver&id=<?= $producto->id; ?>">
          <?= $producto->nombre; ?>
        </a>
      </td>
      <td><?= $value['unidades']; ?></td>
      <td><?= $producto->precio; ?></td>
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>
<br/>
<?php $estadi = Util::estadisticaCarrito(); ?>
<h3 class="total">Precio total: $<?= $estadi['total']; ?></h3>
<a href="<?= URL_BASE; ?>Pedido/hacer" class="btn btn-pedido">Confirmar pedido</a>