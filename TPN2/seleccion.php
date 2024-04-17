<?php
$naturales=[3,56,4,9,0,23,11,6];
echo "Arreglo desordenado: <br>";
for ($i=0; $i < count($naturales) ; $i++) { 
    echo $naturales[$i]."-";
}
echo "<hr>";


for ($k=0; $k < count($naturales); $k++) { 
        $Pos_menor=$k;
        # code...
            for ($i=$k; $i < count($naturales) ; $i++) { 
                if ($naturales[$Pos_menor]>$naturales[$i]) {
                    $Pos_menor=$i;
                    
                }
            }
        // intercambio
        $aux=$naturales[$k];
        $naturales[$k]=$naturales[$Pos_menor];
        $naturales[$Pos_menor]=$aux;

    }

echo "Arreglo Ordenado: <br>";    
for ($i=0; $i < count($naturales) ; $i++) { 
    echo $naturales[$i]."-";
}

?>