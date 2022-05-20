
<?php
$palabra = "palabra";
echo "esto es una variable texto: $palabra";
echo"<br><br>"; 
var_dump($palabra);
echo"<br><br>";

#variable boleana
$boleana = true;
echo"esto es una variable boleana:$boleana";
echo"<br><br>";
var_dump ($boleana);
echo"<br><br>";

#variable arreglo 
$colores = array("rojo","amarillo");
echo"esto es una variable arreglo: $colores[1]";
echo"<br><br>";
var_dump ($colores);
echo"<br><br>";

#variable arreglo con propiedades

$verduras = array("verdura1"=>"lechuga", "verduras2"=>"cebolla");
echo "esto es una variable arreglo con propiedades: $verduras[verdura1]";
echo"<br><br>";
var_dump ($verduras);
echo"<br><br>";



$frutas = (object) ["fruta1"=>"pera","fruta2"=> "manzana"];
echo "esto es una variable objeto:  $frutas->fruta1 ";
echo"<br><br>";
var_dump ($frutas);


?>
