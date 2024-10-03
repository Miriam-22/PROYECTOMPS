<?php
include_once("conexion.php");
if(!empty($_GET['id'])){
    $clave=$_GET['id'];
    $consulta=mysqli_query($conexion,"DELETE FROM productos WHERE idprod=$clave");
    mysqli_close($conexion);
    header("Location:../Cliente/productos.php");
}
?>
