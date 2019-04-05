<aside id="lateral">
  <div id="login" class="block_aside">

    <?php if (!isset($_SESSION['identidad'])): ?>
      <h3>Entrar a la web</h3>
      <form action="<?= URL_BASE; ?>Usuario/login" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
        <button type="submit">Ingresar</button>
      </form>
      <ul>
        <li><a href="<?= URL_BASE; ?>Usuario/registro">Registrarse</a></li>
      </ul>
    <?php else: ?>
      <h3><?= $_SESSION['identidad']->nombre; ?> <?= $_SESSION['identidad']->apellidos; ?></h3>
    <?php endif; ?>

    <ul>
      <?php if (isset($_SESSION['admin'])): ?>
        <li><a href="<?= URL_BASE; ?>Categoria/index">Gestionar categorias</a></li>
        <li><a href="">Gestionar productos</a></li>
        <li><a href="">Gestionar pedidos</a></li>
      <?php endif; ?>
      <?php if (isset($_SESSION['identidad'])): ?>
        <li><a href="">Mis pedidos</a></li>
        <li><a href="<?= URL_BASE; ?>Usuario/logout">Cerrar sessión</a></li>
      <?php endif; ?>
    </ul>
  </div>
</aside>

<div id="principal">