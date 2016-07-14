<?php
$usu=$_REQUEST['afiliacion'];
$pass=$_REQUEST['contraseña'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"vaccinesapp");

$result=(mysqli_query($link,"select * from paciente where afiliacion='$usu'"));
if($row=mysqli_fetch_array($result)){
	$pas=$row['password'];
	$nombre=$row['nombre'];
	echo $pas;
	echo $nombre;
	
	if($pas==$pass){
		session_start();
		$_SESSION['k_username']=$nombre;
		$_SESSION['afiliacion']=$usu;
		
		header("Location: MenuAct.php");
	}else{
		header("Location: LoginAct.html");
	}
}
else{
	header("Location: LoginAct.html");
}
mysqli_free_result($result);
mysqli_close($link);
?>