
<?php
$Arreglo=[3,5,2,1,4];
echo "Arreglo Desordenado: <hr>";
echo implode(", ", $Arreglo);

for ($j=0; $j < count($Arreglo) ; $j++) { 
    for ($i=0; $i < count($Arreglo)- $j -1; $i++) { 
        if ($Arreglo[$i]>$Arreglo[$i+1]) {
            $temp= $Arreglo[$i];
            $Arreglo[$i]=$Arreglo[$i+1];
            $Arreglo[$i+1]=$temp;
            
        }
    }
    
}
echo "<br>";
echo "<br>";
echo "Arreglo Ordenado: <hr>";
echo implode(", ", $Arreglo);


?>