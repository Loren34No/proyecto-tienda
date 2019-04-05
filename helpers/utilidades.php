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
  }
?>