<?php
function is_my_number_prime($line)
{
    
    //Su código va acá
    $sumatoria=0;
    if(is_int($line) && $line>1){
        for($i=1;$i<=$line;$i++){
            if($line%$i==0){
                $sumatoria++;
            }
        }
        if($sumatoria==2){
            $line="PRIMO";
        }else{
            $line="NO_ES_PRIMO";
        }
    }else{
        $line="NO_ES_PRIMO";
    }
    return $line;
    
}
echo is_my_number_prime(7);
?>