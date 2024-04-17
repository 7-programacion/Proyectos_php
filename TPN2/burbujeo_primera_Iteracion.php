
<?php
$Arreglo=[3,5,2,1,4];
echo implode(", ", $Arreglo);

for ($i=0; $i < count($Arreglo)- 1; $i++) { 
    if ($Arreglo[$i]>$Arreglo[$i+1]) {
        $temp= $Arreglo[$i];
        $Arreglo[$i]=$Arreglo[$i+1];
        $Arreglo[$i+1]=$temp;
        
    }
}
echo "<br>";
echo implode(", ", $Arreglo);


?>