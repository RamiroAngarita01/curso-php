<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vectores</title>
</head>
<body>
    <?php 
        // $dias = array('Lunes','Martes','Miercoles','Jueves','viernes','Sabado','Domingo');
        // echo $dias[0].'<br>';    
        // echo $dias[6];
$ar = fopen("datos.txt","a") or
die("Problemas en la creacion");
fputs($ar,"Hola");
fputs($ar,"\n");
fputs($ar,"Ramiro ");
fputs($ar,"Angarita");
fclose($ar);
echo "Los datos se cargaron correctamente.";
    ?>
</body>
</html>