<?php
$NATURALES = [];
$max=18;
$valor_Impar=37;
for ($i=0; $i < $max; $i++) { 
       $NATURALES[$i]=$valor_Impar; 
       $valor_Impar=$valor_Impar-2;
}

function mostrar_arreglo(){
global $NATURALES;

    for ($i=0; $i < count($NATURALES) ; $i++) { 
        echo $NATURALES[$i]." ";
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
    <h1>Ejercicio 2</h1>
    <h3> Cargar un arreglo IMPARES con 18 valores numéricos impares de manera descendente.</h3>
    <hr>
    <h2>Solucion: </h2>
    <?php
    mostrar_arreglo();
    ?>
    
</body>
</html>