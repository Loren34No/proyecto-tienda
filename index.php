<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tienda de Camisetas</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
  <div id="container">
    <header id="header">
      <div id="logo">
        <img src="assets/img/camiseta.png" alt="Logo de camiseta">
        <a href="index.php">Tienda de camiseta</a>
      </div>
    </header>

    <nav id="menu">
      <ul>
        <li><a href=""></a>Inicio</li>
        <li><a href=""></a>Categoria 1</li>
        <li><a href=""></a>Categoria 2</li>
        <li><a href=""></a>Categoria 3</li>
        <li><a href=""></a>Categoria 4</li>
      </ul>
    </nav>

    <main id="main">
      <aside id="lateral">
        <div id="login" class="block_aside">
          <form action="" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <button type="submit">Ingresar</button>
          </form>
          <a href="">Mis pedidos</a>
          <a href="">Gestionar pedidos</a>
          <a href="">Gestionar categorias</a>
        </div>
      </aside>

      <div id="principal">
        <div id="products">
          <img src="assets/img/camiseta.png">
          <h2>Camiseta azul ancha</h2>
          <p>$10.000</p>
          <a href="">Comprar</a>
        </div>
        <div id="products">
          <img src="assets/img/camiseta.png">
          <h2>Camiseta azul ancha</h2>
          <p>$10.000</p>
          <a href="">Comprar</a>
        </div>
        <div id="products">
          <img src="assets/img/camiseta.png">
          <h2>Camiseta azul ancha</h2>
          <p>$10.000</p>
          <a href="">Comprar</a>
        </div>
      </div>
    </main>

    <footer id="footer">
      <p>&copy; Desarrollador por sebastiansanchez.cl | <?= date('Y'); ?></p>
    </footer>
  </div>
</body>

</html>