<?php

function hacerSumaSegunSerie($x,$y){

$arraySerie=[];
$primerN=7;
$segundoN=6;

for ($i=0;$i<=127;$i++){
    
    $arraySerie[]=$primerN;
    $arraySerie[]=$segundoN;

    $primerN=$primerN+1;
    $segundoN=$segundoN-2;

}
if($x<1 || $x>255 || $y<0 || $y>255){
    return -1;
}else{
    $suma=$arraySerie[$x-1]+$arraySerie[$y-1];
    return $suma;
}

}
echo hacerSumaSegunSerie(8,9);
echo "desde el master solucionando conflictos";
?>