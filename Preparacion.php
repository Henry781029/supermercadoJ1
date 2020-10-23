<?php

include('sopa.php');
include('Persona.php');

//crear un objeto de la clase (LOS OBJETOS SON VARIABLES)
$ajiaco = new sopa();

//acceder a un atributo
$ajiaco->CantidadAgua = "2 litros";

echo ($ajiaco->CantidadAgua);

//acceder a metodos
$ajiaco->disfrutarSopa();

echo("<br>");
echo("<br>");

$identificacion = new Persona();

$identificacion->saludar();



?>