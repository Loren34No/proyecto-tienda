<?php
  require_once 'models/categoria.php';

  class CategoriaController
  {
    public function index()
    {
      Util::esAdmin();
      $categoria = new Categoria();
      $categorias = $categoria->obtenerTodo();

      require_once 'views/categorias/index.php';
    }

    public function crear()
    {
      Util::esAdmin();

      require_once 'views/categorias/crear.php';
    }

    public function guardar()
    {
      Util::esAdmin();

      if (isset($_POST) && isset($_POST['nombre'])) {
        $categoria = new Categoria();
        $categoria->setNombre($_POST['nombre']);

        $categoria->guardarBase();
      }
      header('Location:' . URL_BASE . 'Categoria/index');
    }
  }
?>