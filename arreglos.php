<?php


/*$producto1 = "arroz";
$producto2 = "atun";
$producto3 = "apio";
$producto4 = "pollo";*/

//arreglo indexado (los nombres de cada elemento son indices o numeros)
//cajonera
/*$productos = array("arroz", "atun", "apio", "pollo");

print_r($productos);

echo ("<br>")
echo ($productos[1]);

//tengo un form
$productoFormulario= array($_POST["producto1"]);*/

//arreglos asociativos ponerle nombre a  lso cajones[]
$productosAsociados = array('producto1'=> 'arroz', );

print_r ( $productosAsociados);
echo ("<br>");
echo ($productosAsociados['producto1']);


//arreglo de numeros
echo ("<br>");
$numeros = array(1,2,3,4,5,6,7,8,9,10);
for($centinela=0;$centinela<10;$centinela++)
{
    echo ($numeros[$centinela]);
    echo ("<br>");

}


print_r ($numeros);


?>