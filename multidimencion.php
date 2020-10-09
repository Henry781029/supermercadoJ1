<?php    

//arreglo de 1 dimension

$precio=array(1600,4600,1000);
echo ("<br>");
print_r ($precio);
echo ("<br>");
echo($precio[0]);
echo ("<br>");
echo ("<br>");
foreach($precio as $valores){

    echo ($valores);
    echo ("<br>");


}

//definir arrglo de varias dimensiones

/*
$productos=array(

    array("arroz",1600,"caribe"),
    array("aceite",5600,"premier"),
    array("sal",1000,"refisal")

);

print_r ($productos);
echo ("<br>");
print_r ($productos[0]);
echo ("<br>");
echo ("<br>");
echo($productos[0][0]);//imprimir valor especifico

echo ("<br>");
echo ("<br>");

//recorrido
echo ("<br>");
echo ("<br>");
foreach($productos as $valores){

    echo($valores[2]);
    echo ("<br>");



}*/

$productos=array(

    "producto1" => array("arroz",1600,"caribe"),
    "producto2" => array("aceite",5600,"premier"),
    "producto3" => array("sal",1000,"refisal")

    print_r ($productos);
    echo ("<br>");

);





?>