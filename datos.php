<?php 
  $nusuario = $_REQUEST['nombre_usuario'];
  $pass =   $_REQUEST['pass'];
  $pass_confirm =  $_REQUEST['confirm_pass'];

  function verificar_claves($pass,$pass_confirm){
    if($pass != $pass_confirm)
    echo '<div style="background:gray;">Claves distintas!</div>';
  }

  verificar_claves($pass,$pass_confirm);
  