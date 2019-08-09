<?php 
$curso = $_REQUEST['n_curso'];
function ingresarCursos($nombre){

    $conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

    $query="INSERT INTO cursos(nombre_curso)VALUES('$nombre')";

    mysqli_query($conexion,$query)
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);

   echo "Curso guardado.";
}

ingresarCursos($curso);
?>