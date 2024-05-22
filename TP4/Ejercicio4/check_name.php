
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php

function comprobar_nombre_usuario($nombre_usuario){ 
    //compruebo que el tamaño del string sea válido. 
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){ 
    echo $nombre_usuario . " no es válido<br>"; 
    return false; 
    }
    //compruebo que los caracteres sean los permitidos 
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_"; 
    for ($i=0; $i<strlen($nombre_usuario); $i++){ 
    if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){ 
    echo $nombre_usuario . " no es válido<br>"; 
    return false; 
    } 
    } 
    echo $nombre_usuario . " es válido<br>"; 
    return true; 
    
}

$nombre_usuario = $_POST["InputUser"]; 
comprobar_nombre_usuario($nombre_usuario)
?> 
<br> 
<a class="btn btn-info" href="Index.php">OTRA PALABRA</a>

</body>
</html>
