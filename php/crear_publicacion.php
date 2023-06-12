<?php
$include = include("config.php");
$con = connect();
if ($include && $con)//comprueba la conexión
{
    $ID_Usuario =1;
    $descripcion = "desciption";
    $fecha= "01-06-2023";
    $hora= "10:00";
    $corazon=1;
    $n_comentarios=3;
    $n_retuits=5;
 
     $sql= "SELECT ID_USUARIO, descripcion FROM publicacion";
     $query= mysqli_query($con, $sql);
    while ($row=mysqli_fetch_assoc($query))//Es para que te mande todos los registros de una
    {
         echo "<br>";
         echo ($row["descripcion"]);
    }

}
?>