<?php

    echo($_GET["id"]);

    include ("BaseDatos.php");

    //1. recibo el id que voy a eliminar por la URL(GET)
    $idEliminar=($_GET["id"]);

    //2. crear el objeto de la clase base de datos
    $transaccion= new BaseDatos();

    //3. construir crear la consulta para eliminar 
    $consultaSQL="DELETE FROM usuarios WHERE idUsuario='$idEliminar'";

    //4. utilizar el metodo para eliminar datos
    $transaccion->eliminarDatos($consultaSQL);
    

?>