<?php
  $db_name = "vaccinesapp";
  $usuario_mysql = "root";
  $password_mysql = "";
  $nombre_servidor = "localhost";

  $conexion = mysqli_connect($nombre_servidor, $usuario_mysql, $password_mysql, $db_name);
/*
  if($conexion){
    echo "Conexion Exitosa :D";
  }else {
    echo "Conexion Fallida :'('";
  }
*/
?>
