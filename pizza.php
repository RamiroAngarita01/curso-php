<?php 
$nombre = $_REQUEST['nombre'];
$direccion = $_REQUEST['direccion'];

$cant_napo = $_REQUEST['cant_napolitana'];
$cant_muzza = $_REQUEST['cant_muzza'];
$cant_jamon = $_REQUEST['cant_jamon'];

$napolitana =$_REQUEST['napolitana'];
$muzzarella =$_REQUEST['muzzarella'];
$jamon =$_REQUEST['jamon'];


if($nombre !="" && $direccion !=""){

    $ar = fopen("Pizzas.txt","a") or
    die("Problemas en la creacion");
    fputs($ar,"\n");
    fputs($ar,$nombre);
    fputs($ar,"\n");
    fputs($ar,$direccion);


    echo 'Pedido: '.$nombre.'<br>';
    echo 'Direccion: '.$direccion.'<br>';

    if($napolitana!="" && $cant_napo !="")
    { 
       echo '<hr>';
       fputs($ar,"\n");
       echo 'Pizza: '.$napolitana.'<br>';
       echo 'Cantidad: '.$cant_napo;
       echo '<br>';
       fputs($ar,'Pizza: '.$napolitana);
       fputs($ar,"\n");
       fputs($ar,'Cantidad: '.$cant_napo);

    }
    else{
        
       echo 'Napolitana 0';
       echo '<br>';
    }
    
    if($muzzarella !="" && $cant_muzza!="")
    {
       echo 'Pizza: '.$muzzarella.'<br>';
       echo 'Cantidad: '.$cant_muzza;
       echo '<br>';
       fputs($ar,"\n");
       fputs($ar,'Pizza: '.$muzzarella);
       fputs($ar,"\n");
       fputs($ar,'Cantidad: '.$cant_muzza);

    }
    else{
        echo '<br>';
        echo 'Muzzarella: 0';
    }
    
    if($jamon !="" && $cant_jamon !="")
    {
       echo '<hr>';
       echo 'Pizza: '.$jamon.'<br>';
       echo 'Cantidad: '.$cant_jamon;
       echo '<br>';
       fputs($ar,"\n");
       fputs($ar,'Pizza: '.$jamon);
       fputs($ar,"\n");
       fputs($ar,'Cantidad: '.$cant_jamon);

    }else{
        echo '<br>';
        echo 'Jamon y queso: 0';
    }
    fclose($ar);
    echo "Los datos se cargaron correctamente.";
}

?>