<?php
$NATURALES = [];
$max=18;

for ($i=0; $i < $max; $i++) { 

       $NATURALES[$i]=$i+1; 
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
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <h3> Cargar un arreglo NATURALES con 18 valores numéricos de manera ascendente. </h3>
    <hr>
    <h2>Solucion: </h2>
    <?php
    mostrar_arreglo();
    ?>
    
</body>
</html>