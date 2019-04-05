<?php
  class Util
  {
    public static function eliminarSession($nombre)
    {
      if (isset($_SESSION[$nombre])) {
        $_SESSION[$nombre] = null;
        unset($_SESSION[$nombre]);
      }

      return $nombre;
    }

    public static function esAdmin()
    {
      if (!isset($_SESSION['admin'])) {
        header('Location:' . URL_BASE);
      } else {
        return true;
      }
    }

    public static function mostrarCategorias()
    {
      require_once 'models/categoria.php';
      
      $categoria = new Categoria();
      $categorias = $categoria->obtenerTodo();

      return $categorias;
    }
  }
?>