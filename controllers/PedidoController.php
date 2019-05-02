<?php
  require_once 'models/pedido.php';

  class PedidoController 
  {
    public function hacer() 
    {
      require_once 'views/pedido/hacer.php';
    }

    public function agregar() 
    {
      if (isset($_SESSION['identidad'])) {
        $usuario_id = $_SESSION['identidad']->id;
        $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
        $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
        $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;

        $estad = Util::estadisticaCarrito();
        $coste = $estad['total'];

        if ($provincia && $localidad && $direccion) {
          $pedido = new Pedido();
          $pedido->setUsuario_id($usuario_id);
          $pedido->setProvincia($provincia);
          $pedido->setLocalidad($localidad);
          $pedido->setDireccion($direccion);
          $pedido->setCoste($coste);

          $guardar = $pedido->guardar();
          $guardar_linea = $pedido->guardar_linea();

          if ($guardar && $guardar_linea) {
            $_SESSION['pedido'] = 'Completo';
          } else {
            $_SESSION['pedido'] = 'Error';
          }

        } else {
          $_SESSION['pedido'] = 'Error';
        }
        
        header('Location:' . URL_BASE . 'Pedido/confirmado');

      } else {
        header('Location:' . URL_BASE);
      }
    }

    public function confirmado()
    {
      if (isset($_SESSION['identidad'])) {
        $identidad = $_SESSION['identidad'];
        $pedido = new Pedido();
        $pedido->setUsuario_id($identidad->id);

        $pedido = $pedido->obtenerUnoPorUsuario();

        $pedido_productos = new Pedido();
        $productos = $pedido_productos->productosPorPedido($pedido->id);
      }

      require_once 'views/pedido/confirmado.php';
    }
  }
?>