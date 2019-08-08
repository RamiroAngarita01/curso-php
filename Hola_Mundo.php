<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
  $nombre =$_REQUEST['nombre'];

  echo 'Nombre: '.$nombre.'<br>';
  $futbol = $_REQUEST['futbol'];
  $basket= $_REQUEST['basket'];
  $tennis = $_REQUEST['tennis'];
  $voley = $_REQUEST['voley'];
  $rugby = $_REQUEST['rugby'];


  $cantidad = $futbol + $basket + $tennis + $voley + $rugby;
  echo 'Cantidad de deportes que practica: '.$cantidad;
  // $edad=   $_REQUEST['edad'];
  // $estudio = $_REQUEST['radio'];
  // if($edad>=18){
  //   echo $nombre.' <br>Mayor de edad <br>';
  //   echo $estudio;
  // }else{
  //   echo $nombre.' <br>Menor de edad';

  //   echo '<h1>La persona es menor de edad</h1><br>';
  //   echo $estudio;
  // };
  



?>
</html>