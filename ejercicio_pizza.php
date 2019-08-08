<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="pizza.php" method="post">
    <h1>Pedido pizza</h1>
       <input type="text" name="nombre" placeholder="Nombre" id="">
       <br>
       <input type="text" name="direccion" id="" placeholder="Direccion">
       <br>
       <h2>Tipos de pizza</h2>
       <br>
       <input type="checkbox" name="napolitana" value="napolitana">Napolitana 
       <input type="number" name="cant_napolitana" id="" placeholder="cantidad"><br>
       <input type="checkbox" name="muzzarella" value="Muzzarella" id="">Muzzarella
       <input type="number" name="cant_muzza" id="" placeholder="cantidad"><br>
       <input type="checkbox" name="jamon" value="Jamon y queso" id="">Jamon y queso
       <input type="number" name="cant_jamon" id="" placeholder="cantidad"><br>
       <br>
       <input type="submit" value="Pedir">
    </form>
</body>
</html>