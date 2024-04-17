<?php
// vallidacion
$NATURALES_8=[2,6,8,9,1,3,8,22,8,54];
$resultado=[];
$cont=0;

for ($i=0; $i < count($NATURALES_8); $i++) { 
    if ($NATURALES_8[$i]!=8) {
        $resultado[$cont]=$NATURALES_8[$i];
        $cont++;
    }
}

function imprimir($A){

    for ($i=0; $i < count($A) ; $i++) { 
        echo $A[$i];
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
 <div class="container">
    <div class="row p-5" >
        <div class="col-3 bg-info">
            Ejercicio 3
        </div>
        <div class="col-9 bg-success">
            <p>Copiar en el arreglo NATURALES_8 =[2,6,8,9,1,3,8,22,8,54], todos los valores del arreglo menos el 8.</p>
        </div>
    </div>
    <div class="row">
        <div class="col bg-primary p-5">
            Resultado:
        </div>
        <div class="col p-5 bg-warning">
            <?php imprimir($resultado) ?>
        </div>
    </div>
 </div>
    
</body>
</html>