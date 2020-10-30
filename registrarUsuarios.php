<?php  

include("BaseDatos.php");

if(isset($_POST["botonEnvio"]))
{

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $descripcion=$_POST['descripcion'];
    $genero=$_POST['genero'];

    //copia objeto de la clase base BD
    $transaccion=new BaseDatos();

    //crear consulta
    $ConsultaSQL= "INSERT INTO usuarios(nombre, apellido, descripcion, genero) VALUES ('$nombre','$apellido','$descripcion','$genero')";

    //llamo al metodo de la clase BD agregardatos()
    $transaccion->agregarDatos($ConsultaSQL);


}



?>