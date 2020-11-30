<?php
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="epe3";
    $con=mysql_connect($server,$user,$pass) or die
    ('Ha fallado la conexion: '.mysql_error());
    mysql_select_db($db,$con) or die
    ('No se pudo conectara la base de datos: '.mysql_error());
    return $con;
}

?>