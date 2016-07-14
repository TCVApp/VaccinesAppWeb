<?php  
/*
	Conectar con la base de datos
*/

$urlIndex = "http://localhost/FeproAdd/LoginAct.php";
$urlRegistro = "http://localhost/FeproAdd/RegistroAct.php";

function conectarse() 
{ 
   if (!($link=mysqli_connect("localhost","root","","vaccinesapp"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   return $link; 
}



?>