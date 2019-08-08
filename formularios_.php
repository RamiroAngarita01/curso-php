<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST - FORM</title>
</head>
<body>
    <form action="Hola_mundo.php">
      <h1>Datos del usuario</h1>
      <input type="text" name="nombre" id="nombre" placeholder="Nombre"><br>
      <!-- <input type="text" name="edad" id="edad" placeholder="Edad"> -->
      <!-- <br>
      <hr>
      <h2>Nivel de Estudios</h2>
       <input type="radio" name="radio"  value="Sin estudios">Sin estudios
       <br>
       <input type="radio" name="radio" value="Estudios primarios">Estudios - Primarios
       <br>
       <input type="radio" name="radio" value="Estudios Superiores">Estudios - Secundarios
       <br> -->
       <h2>Deportes</h2>
     <p>  seleccione deportes que practica</p>
       <hr>
       <input type="checkbox" name="futbol" value="1" id="">
       <input type="checkbox" name="basket" value="1" id="">
       <input type="checkbox" name="tennis" value="1" id="">
       <input type="checkbox" name="voley"  value="1" id="">
       <input type="checkbox" name="rugby"   id="">
      <hr>

      <input type="submit" value="Enviar">
    </form>
</body>
</html>