<?PHP
	include("libs/varios.php");
	session_start();
	if(!isset($_SESSION['k_username']))
		header("Location: LoginAct.html");

	$usu=$_SESSION['k_username'];

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"vaccinesApp"); 
	$result01=mysqli_query($link,"select * from perfil where nombre='$usu' ");
		while($row=mysqli_fetch_array($result01))
			{
 				$CURP=$row["curp"];		  
			}

	?>
<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Interphase by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">Vaccines App</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="MenuAct.php">MUNU</a></li>
						<li><a href="RecAct.html">Recomendaciones</a></li>
						<li><a href="PerfilAct.php">Perfil</a></li>
						<li><a href="VacunaAct.php">Esquema de Vacunacion</a></li>
					</ul>
				</nav>
			</header>
		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
			<?php
			echo"<div class='container'>";
					echo"<header>";
						echo"<h3>PERFIL</h3>";
						$result1=mysqli_query($link,"select * from perfil where nombre='$usu' ");
						while($row=mysqli_fetch_array($result1))
							{
 							  $nom=$row["nombre"];
  								 $fot=$row["foto"];
     						echo"<img class='img-responsive' style='width:150px; height:150px; border-radius:50%;' src='Imagenes/$fot'>";
	 						echo"<h4>$nom</h4>";
						}
					echo"</header>";
				echo"</div>";
				 ?>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 align-center">
				
					<?php
echo "<div class='container'>";
   
$result=mysqli_query($link,"select * from perfil where nombre='$usu' ");
while($row=mysqli_fetch_array($result))
{
   $nom=$row["nombre"];
   $curp=$row["curp"];
   $cer=$row["certificado"];
   $grup=$row["grupo"];
   $consultorio=$row["consultorio"];
   $unidad=$row["unidad"];
   $af=$row["afiliacion"];

	
  echo"<h2>CURP: </h2><h1>$curp</h1>";
  echo"<h2>No. CERTIFICADO:</h2> <h1>$cer</h1>";
echo"<div class='3u 6u$(medium) 12u$(small)'>";
		echo"<ul class='actions vertical small'>";
		echo"<li><a href='#' class='button small fit'>IDENTIFICACIÓN</a></li>";
		echo"</ul>";
echo"</div>";
  echo"<h2>GRUPO SANGUINEO:</h2> <h1>$grup</h1>";
  echo"<h2>AFILIACION:</h2> <h1>$af</h1>";
  echo"<h2>UNIDAD MEDICA:</h2><h1> $unidad</h1>";
  echo"<h2>CONSULTORIO:</h2> <h1>$consultorio</h1>";

}
echo"<div class='3u 6u$(medium) 12u$(small)'>";
		echo"<ul class='actions vertical small'>";
		echo"<center>";
		echo"<li><a href='#' class='button small fit'>DATOS GENERALES</a></li>";
		echo"</ul>";
echo"</div>";
$result=mysqli_query($link,"select * from datosgenerales where curp='$CURP' ");
while($row=mysqli_fetch_array($result))
{
   $calle=$row["callenum"];
   $colonia=$row["colonia"];
   $mun=$row["municipio"];
   $cp=$row["cp"];
   $enti=$row["entidad"];

   $locall=$row["localidadLug"];
   $munl=$row["EntLug"];
   $fechan=$row["fechanaci"];

   $localR=$row["localidadReg"];
   $munR=$row["EntLugR"];
   $fechar=$row["fecharegis"];


  echo"<h2>>>>DOMICILIO<<<</h2>";
  echo"<h2>CALLE Y NUMERO: </h2><h1>$calle</h1>";
  echo"<h2>COLONIA/LOCALIDAD: </h2><h1>$colonia</h1>";
  echo"<h2>MUNICIPO/DELEGACION: </h2><h1>$mun</h1>";
  echo"<h2>C.P: </h2><h1>$cp</h1>";
  echo"<h2>ENTIDAD FEDERATIVA: </h2><h1>$enti</h1>";

echo"<h2>>>>LUGAR Y FECHA<<<<BR> >>>DE NACIMIENTO<<<</h2>";
  echo"<h2>LOCALIDAD: </h2><h1>$locall</h1>";
  echo"<h2>ENTIDAD FEDERATIVA: </h2><h1>$munl</h1>";
  echo"<h2>FECHA: </h2><h1>$fechan</h1>";

echo"<h2>>>>LUGAR Y FECHA<<<<BR> >>>DE REGISTRO CIVIL<<<</h2>";
  echo"<h2>LOCALIDAD: </h2><h1>$localR</h1>";
  echo"<h2>ENTIDAD FEDERATIVA: </h2><h1>$munR</h1>";
  echo"<h2>FECHA: </h2><h1>$fechar</h1>";
}
echo "</div>";
?>
			
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">		
					</div>
				</div>
			</footer>

	</body>
</html>