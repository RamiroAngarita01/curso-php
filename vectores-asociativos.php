<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
    Almacenar en un vector asociativo la cantidad de dias que tiene
    cada mes del año. Luego accederlo por su nombre como subindice.</p>
    <?php
    $meses['enero']="31";
    $meses['febrero']="28";
    $meses['marzo']="31";
    $meses['abril']="30";
    $meses['mayo']="31";
    $meses['junio']="30";
    $meses['julio']="31";
    $meses['agosto']="31";
    $meses['septiembre']="30";
    $meses['octubre']="31";
    $meses['noviembre']="30";
    $meses['diciembre']="31";
    echo $meses['marzo'];
?>
</body>
</html>