<?php
$NATURALES_8 = [2,6,8,9,1,3,8,22,8,54];
global $CONTADOR;
global $SUMA_TOTAL;
// $CONTADOR=0:
// $SUMA_TOTAL=0;
for ($i=0; $i < count($NATURALES_8); $i++) { 
    if ($NATURALES_8[$i]==8) {
        $CONTADOR++;
    }
    $SUMA_TOTAL=$SUMA_TOTAL+$NATURALES_8[$i];
}
function imprimir($array){
    for ($i=0; $i < count($array) ; $i++) { 
        echo $array[$i]."-";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio N 2</h1>
    <p>
        Dado un arreglo NATURALES_8 + [2,6,8,9,1,3,8,22,8,54], con valores numericos distintos desordenados y repetidos, contar la cantidad de veces que se repite el numero 8 e imprimir por pantalla el arreglo y el resultado de la suma.
    </p>
    <h2>RESULTADO: <?php imprimir($NATURALES_8) ?> </h2>
    <p>
        La cantidad de veces que se repite el 8 es: <?php $CONTADOR ?> . <br>
        La suma total del contenido del arreglo es: <?php $SUMA_TOTAL ?>
    </p>
    
</body>
</html>