<?php

include ("BaseDatos.php");

//1. crear el objeto de la base de datos
$transaccion= new BaseDatos();

//2. recibir los datoa a editar
if(isset($_POST["botonEditar"]))
{

    //3. recibir el id que quiero editar
    $id=$_GET["id"];

    $nombre=$_POST['nombreEditar'];
   
    $descripcion=$_POST['descEditar'];

    //4. para editar un registro
   $consultaSQL="UPDATE usuarios SET nombre= '$nombre',descripcion='$descripcion' WHERE idUsuario='$id'";

   
    //5. utilizar el metodo editar
    $transaccion->editarDatos($consultaSQL);


}


?>