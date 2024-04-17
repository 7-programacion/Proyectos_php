<?php
$impares = [];
$max=18;
$valor_Impar=37;
for ($i=0; $i < $max; $i++) { 
       $impares[$i]=$valor_Impar; 
       $valor_Impar=$valor_Impar-2;
}

function mostrar_arreglo(){
global $impares;

    for ($i=0; $i < count($impares) ; $i++) { 
        echo $impares[$i]." ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <h3> Copiar en el arreglo RESULTADO los tres primeros valores del arreglo NATURALES y los últimos tres del arreglo IMPARES.  </h3>
    <hr>
    <h2>Solucion: </h2>
    <?php
   echo "Falta Terminar";
    ?>
    
</body>
</html>