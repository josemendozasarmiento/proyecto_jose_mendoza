<?php
#codigo imperactivo o espagueti
#$automovil1=(object)["marca"=>"toyota","modelo"=>"corolla"];
#$automovil2=(object)["marca"=>"hyundai","modelo"=>"accent vision"];
 #function mostrar ($automovil)
 #{
 #echo "<p> hola!soy un $automovil->marca,modelo $automovil->modelo</p>";

 #}
 #mostrar ($automovil1);
 #mostrar ($automovil2);







 class Automovil{
 #propiedades:
# son las caracteristicas que puede tener un objeto

 public $marca;
 public $modelo;
 #private
 #metodo
 #es un algoritmo asociado a un objeto =funciones de una clase 
 # fuction o funcion algoritmo de programacion 
 public function mostrar (){
     echo "<p> hola! soy un $this->marca, modelo $this->modelo </p>";
    } 
}

$A=new automovil();
$A->marca="toyota";
$A->modelo="corolla";
$A->mostrar ();


$B=new automovil();
$B->marca="hyundai";
$B->modelo="accent vision";
$B->mostrar ();



$C=new automovil();
$C->marca="bmw";
$C->modelo="ranger dicel";
$C->mostrar ();

$D=new automovil();
$D->marca="chevrolet";
$D->modelo="mazda Cx-30";
$D->mostrar ();


 ?>