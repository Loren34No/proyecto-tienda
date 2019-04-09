<?php if (isset($categoria)) : ?>
  <h1><?= $categoria->nombre; ?></h1>
  <?php if ($productos->num_rows == 0) : ?>
    <p>No hay productos para mostrar.</p>
  <?php else : ?>
    <?php while ($pro = $productos->fetch_object()) : ?>
      <div id="products">
        <?php if ($pro->imagen != null) : ?>
          <img src="<?= URL_BASE; ?>subidas/imagenes/<?= $pro->imagen; ?>">
        <?php else : ?>
          <img src="<?= URL_BASE; ?>assets/img/camiseta.png">
        <?php endif; ?>
        <h2><?= $pro->nombre; ?></h2>
        <p>$<?= $pro->precio; ?></p>
        <a href="" class="btn">Comprar</a>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
<?php else : ?>
  <h1>La categoria no existe</h1>
<?php endif; ?>