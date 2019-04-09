<h1>Algunos de nuestros productos</h1>

<?php while ($pro = $productos->fetch_object()): ?>
  <div id="products">
    <?php if ($pro->imagen != null): ?>
      <img src="<?= URL_BASE; ?>subidas/imagenes/<?= $pro->imagen; ?>">
    <?php else: ?>
      <img src="<?= URL_BASE; ?>assets/img/camiseta.png">
    <?php endif; ?>
    <h2><?= $pro->nombre; ?></h2>
    <p>$<?= $pro->precio; ?></p>
    <a href="" class="btn">Comprar</a>
</div>
<?php endwhile; ?>
