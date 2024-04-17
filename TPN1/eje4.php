<?php

$ORIGEN = [90,1,45,66];
$DESTINO = [];
$cont=0;
// echo count($ORIGEN);

for ($i=count($ORIGEN)-1; $i >= 0 ; $i--) { 
    $DESTINO[$cont]=$ORIGEN[$i];
   $cont++;
}

function mostrar_arreglo($array){

    for ($i=0; $i < count($array); $i++) { 
        echo $array[$i]." ";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <h3>  Dados dos arreglos ORIGEN Y DESTINO, cargar de manera manual y desordenada Origen y pasar cada uno de esos elementos a DESTINO.  </h3>
    <hr>
    <h2>Solucion: </h2>
    <?php
    mostrar_arreglo($DESTINO);
    ?>
    
</body>
</html>