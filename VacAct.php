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

			<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="css/hola.css">

		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="MenuAct.php">Vaccines App</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="MenuAct.php">MENU</a></li>
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
						echo"<h3>CARTILLA DE VACUNACIÓN</h3>";
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

					<div class='container'>
					<?php
   
$result=mysqli_query($link,"select * from regvacunas where curp='$CURP' ");
while($row=mysqli_fetch_array($result))
{
   $fecha=$row["fecha"];
   }

?>
<div class='tab'>
			<center>
  <table border='0' cellpadding='0' cellspacing='0'  WIDTH="10%">
    <center>
    <tr>
      
      <th ><h1>VACUNA</h1></th>
      <th >DOSIS</th>
      <th >EDAD Y FRECUANCIA</th>
      <th >FECHA DE APLICACIÓN</th>
    </tr>
    <tr>
    <?php
   
$result=mysqli_query($link,"select * from regvacunas where curp='$CURP' ");
while($row=mysqli_fetch_array($result))
{
   $fecha=$row["fecha"];
   $vac=$row["vacuna"];
    $dosis=$row["dosis"];
   }

?>
      <td class='cs336 blue1'>B C G </td>
      <td><h1>UNICA</h1></td>
      <td><h1>AL NACER</h1></td>
      <td><h1></h1></td>
    </tr>
    <tr>
      
      <td class='cs240 orange'></td>
	  <td><h1>PRIMERA</h1></td>
	  <td><h1>AL NACER</h1></td>
      <td><h1> <?php echo "$fecha";?></h1></td>
    </tr>
    <tr>
      
      <td class='cs240 orange'>HEPATITIS B</td>
	  <td><h1>SEGUNDA</h1></td>
	  <td><h1>2 MESES</h1></td>
      <td><h1></h1></td>
    </tr>
    <tr>
      <td class='cs240 orange' data-tooltip=''></td>
	  <td><h1>TERCERA</h1></td>
	  <td><h1>6 MESES</h1></td>
      <td><h1></h1></td>
    </tr>
    <tr>
      <td class='cs335 blue' ></td>
      <td><h1>PRIMERA</h1></td>
      <td><h1>2 MESES</h1></td>
      <td><h1></td>
    </tr>
    <tr>
      <td class='cs335 blue'>PENTAVALENTE</td>
	  <td><h1>SEGUNDA</h1></td>
	  <td><h1>4 MESES</h1></td>
	  <td><h1></h1></td>
    </tr>
    <tr>
      <td class='cs335 blue' >ACELULAR</td>
	  <td><h1>TERCERA</h1></td>
	  <td><h1>6 MESES</h1></td>
	  <td><h1></td>
    </tr>
    <tr>
      <td class='cs335 blue' ></td>
	  <td><h1>CUARTA</h1></td>
	  <td><h1>18 MESES</h1></td>
	  <td><h1></td>
    </tr>
	<tr>
      <td class='cs241 yellow' >D P T</td>
	  <td><h1>REFUERZO</h1></td>
	  <td><h1>4 AÑOS</h1></td>
	  <td>-</td>
    </tr>
	<tr>
      <td class='cs242 green1' ></td>
	  <td><h1>PRIMERA</h1></td>
	  <td><h1>2 MESES</h1></td>
	  <td><h1></h1></td>
    </tr>
	<tr>
      <td class='cs242 green1' >ROTAVIRUS</td>
	  <td><h1>SEGUNDA</h1></td>
	  <td><h1>4 MESES</h1></td>
	  <td><h1></td>
    </tr>
	<tr>
      <td class='cs242 green1' ></td>
	  <td><h1>TERCERA</h1></td>
	  <td><h1>6 MESES</h1></td>
      <td><h1></h1></td>
    </tr>
	<tr>
      <td class='cs335 blue' ></td>
	  <td><h1>PRIMERA</h1></td>
	  <td><h1>2 MESES</h1></td>
	  <td><h1></h1></td>
    </tr>
	<tr>
      <td class='cs335 blue' >NEUMOCOCINA</td>
	  <td><h1>SEGUNDA</h1></td>
	  <td><h1>4 MESES</h1></td>
	  <td><h1></h1></td>
    </tr>
	<tr>
      <td class='cs335 blue' ></td>
	  <td><h1>REFUERZO</h1></td>
	  <td><h1>12 MESES</h1></td>
	  <td><h1></h1></td>
    </tr>
		<tr>
      <td class='cs337 pink' ></td>
	  <td><h1>PRIMERA </h1></td>
	  <td><h1>6 MESES </h1></td>
	  <td><h1></h1></td>
    </tr>
	<tr>
      <td class='cs337 pink' >INFLUENZA</td>
	  <td><h1>SEGUNDA</h1></td>
	  <td><h1>7 MESES</h1></td>
	  <td><h1></h1></td>
    </tr>
	<tr>
      <td class='cs337 pink' ></td>
	  <td><h1>REVACUNACIÓN</td>
	  <td><h1>ANUAL</h1></td>
	  <td><h1></h1></td>
    </tr>
		<tr>
      <td class='cs336 purple' >S R P</td>
	  <td><h1>PRIMERA </h1></td>
	  <td><h1>1 AÑO</h1></td>
	  <td><h1></h1></td>
    </tr>
			<tr>
      <td class='cs336 purple' ></td>
	  <td><h1>REFUERZO</h1></td>
	  <td><h1>6 AÑOS</h1></td>
	  <td><h1></h1></td>
    </tr>
				<tr>
      <td class='md313 red' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
    </tr>
				<tr>
      <td class='md313 red' >SABIN</td>
	  <td><h1>ADICIONALES </h1></td>
	  <td><h1></h1></td>
	  <td><h1></h1></td>
    </tr>
				<tr>
      <td class='md313 red' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
    </tr>
				<tr>
      <td class='md313 red' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
    </tr>
	<tr>
      <td class='cs240 orange'>SR</td>
	  <td><h1>ADICIONALES</h1></td>
	  <td>-</td>
	  <td>-</td>
    </tr>
	<tr>
      <td ><h1>OTRAS</h1></td>
	  <td></td>
	  <td></td>
	  <td>-</td>
    </tr>
	<tr>
      <td ><h1>VACUNAS</h1></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
    </tr>
  </table>


			</div>


	</body>
</html>