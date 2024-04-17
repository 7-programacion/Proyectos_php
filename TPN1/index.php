<?php 
// INICIAL VARIABLES

$nombre = "Daniel";
$edad = 40;
$apellido ="Ponce";

$alumnos = [];
 
// $alumnos[0] = "Federico";
// $alumnos[1]= "Daniel";
// indices y Elemento

// echo $nombre."-".$apellido."--".$edad;

$alumnos = ["Federico", "Daniel", "Marta"];

for($indice=0; $indice<3; $indice++){
    echo $alumnos[$indice];
    echo "<br>";
}
// continuar despues del for



?>
