<?php
function handler($line)
{
    //Su código va acá
    $arrayDeBinarios = explode ( ',', $line);
    $arrayEspecifico=[];
    var_dump($arrayDeBinarios);
    for($posLista=0;$posLista<sizeof($arrayDeBinarios);$posLista++){
        $numeroBinario=$arrayDeBinarios[$posLista];
        echo "numero binario ".$posLista.":"."<br>";
        for($posBinario=0;$posBinario<strlen($numeroBinario);$posBinario++){
            
            echo $numeroBinario[$posBinario]."<br>";
        }
    }
    
}
 handler("100001011,1110000,11000000,11001000,100001110,10000101,1010010,1110010,11111100");
?>