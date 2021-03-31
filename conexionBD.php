<?php 
    $server = "localhost";
    $user = "usrforo";
    $pass = "djmz#13119000";
    $db = "foro";

    $conexion = new mysqli($server,$user,$pass,$db);
    if($conexion->connect_errno){
        printf("<hr>Connect failed (Err. nº %d): %s<hr/>", $mysqli->connect_errno, $mysqli->connect_error);
        exit();
    }
    else{
        echo "Conectado";
    }
    if(!$conexion->set_charset("utf8"))
    {
        printf("<hr>Error loading character set utf8 (Err. nº %d): %s\n<hr/>",	$mysqli->errno, $mysqli->error);
        exit();
    }     
?>
