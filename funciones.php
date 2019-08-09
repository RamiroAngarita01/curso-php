<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones</title>
</head>
<body>
<h1>Imprimir texto</h1>
    <?php

    function mostrartitulo($men){
        echo "<h1 style=\"text-align:center\">";
        echo $men;
        echo"</h1>";
    }
    mostrartitulo("Primer titulo");
    mostrartitulo("Segundo titulo");
    ?>
    <h2>Ejercicio 2 </h2>
    <p>
    Confeccionar un formulario que solicite la carga del nombre de usuario y su clave en dos oportunidades.<br> En la página que se procesan los datos del formulario implementar una función que imprima un mensaje si las dos claves ingresadas son distintas.
</p>
<form action="datos.php" method="post">
<input type="text" name="nombre_usuario" placeholder="Usuario">
<br>
<input type="password" name="pass" placeholder="Contraseña">
<br>
<input type="password" name="confirm_pass" placeholder="Confirma contraseña">
  <button type="submit">Enviar</button>
</form>
</body>
</html>