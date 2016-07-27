<?php  
/*
	Conectar con la base de datos
*/

$urlIndex = "http://localhost/VaccinesAppWeb/LoginAct.php";
$urlRegistro = "http://localhost/VaccinesAppWeb/RegistroAct.php";

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