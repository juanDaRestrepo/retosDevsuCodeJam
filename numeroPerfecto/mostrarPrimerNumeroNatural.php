<?php
// 27 30
session_start();
$primerNumero=$_POST["numeroUno"];
$segundoNumero=$_POST["numeroDos"];
$arrayDeDivisores=[];
for($i=$primerNumero;$i<=$segundoNumero;$i++){
    for($a=1;$a<$i;$a++){
        
        if($i%$a===0){
            
            array_push($arrayDeDivisores,$a);
            
        }
       
    }
    $sumaDeDivisores=array_sum($arrayDeDivisores);
    
    $arrayDeDivisores=[];
    if($sumaDeDivisores==$i){
        echo "numero perfecto:".$i;
        $_SESSION["numeroPerfecto"]=$i;
        
        print "<script>window.setTimeout(function() { window.location = 'index.php' }, 1);</script>";
        exit();
    }
}

?>