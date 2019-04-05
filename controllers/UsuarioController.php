<?php
  require_once 'models/usuario.php';

  class UsuarioController
  {
    public function registro()
    {
      require_once 'views/usuarios/registro.php';
    }

    public function guardar()
    {
      if (isset($_POST)) {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;

        if ($nombre && $apellidos && $email && $password) {
          $usuario = new Usuario();
          $usuario->setNombre($nombre);
          $usuario->setApellidos($apellidos);
          $usuario->setEmail($email);
          $usuario->setPassword($password);

          $guardar = $usuario->guardarBase();

          if ($guardar) {
            $_SESSION['registro'] = 'completado';
          } else {
            $_SESSION['registro'] = 'falla';
          }
        } else {
          $_SESSION['registro'] = 'falla';
        }
      } else {
        $_SESSION['registro'] = 'falla';
      }
      header('Location:' . URL_BASE . 'Usuario/registro');
    }
  }
?>