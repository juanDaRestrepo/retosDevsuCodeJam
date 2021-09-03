<?php
session_start();
if(isset($_SESSION["numeroPerfecto"])){
    $numeroPerfecto=$_SESSION["numeroPerfecto"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mostrarPrimerNumeroNatural.php" method="POST">
        <label for="">numero 1</label>
        <input type="number" name="numeroUno"><br>
        <label for="">numero 2</label>
        <input type="number" name="numeroDos">
        <input type="submit" name="envio">
    </form>
    <label for=""><?php echo "El primer numero perfecto de la serie es:".@$numeroPerfecto;unset($numeroPerfecto);session_unset(); ?></label>
</body>
</html>