<?php

class BaseDatos
{
    //clase compuewsta de tres cosas atributos, constructor, variables
    
    public $usuarioBD="root";
    public $passwordBD="";
    
    public function __construct(){}

    public function conectarBD()
    {
        /*
        $datosBD="mysql:host=localhost;dbname=tiendajueves";

        $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);*/
/*
        if($conexionBD){
            echo("exito");
        }
        else{
            echo("error");
        }

*/
        //manejo de exepciones
      
        try{
            $datosBD="mysql:host=localhost;dbname=tiendajueves";

            $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
            echo("exito");
            return($conexionBD);

        }catch(PDOException $error){

            echo($error->getMessage());

        }

    }

    public function agregarDatos($consultaSQL)
    {

        //ESTABLECER UNA CONEXION

        $conexionBD=$this->conectarBD();

        //PREPARAR CONSULTA

        $insertarDatos=$conexionBD->prepare($consultaSQL);

        //EJECUTAR LA CONSULTA

        $resultado=$insertarDatos->execute();

        //verifico el resultado
        if($resultado){

            echo("Usuario agregado");
        }else{
            echo("error");
        }

    }



}




?>