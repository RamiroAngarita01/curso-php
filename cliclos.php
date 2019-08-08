<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ciclos</title>
</head>
<body>

  <?php 
//    for ($i=0; $i <10 ; $i++) { 
//         echo $i;
//    }
   $valor=rand(1,100);
//    while ($a <= $valor) {
//        echo $a;
//     $a++;
//    }

echo "<h2>Tabla de multiplicar con el ciclo for</h2>";
    for ($i=1; $i <=10 ; $i++) { 
         $resp = $i * 2;
         echo "2 * ".$i."= ".$resp;
         echo "<br>";
    }
echo "<h2>Tabla de multiplicar con el ciclo while</h2>";

    $a=1;
    while ($a <= 10) {
        $resp = $a * 2;
             echo "2 * ".$a."= ".$resp;
             echo "<br>";
             $a++;
    }
  ?>



</body>
</html>