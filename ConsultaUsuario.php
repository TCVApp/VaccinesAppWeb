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
<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Retrospect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="css/hola.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

<!-- Header -->
			<header id="header">
				<h1><a href="index.html">Vaccines App</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="MenuAct.html">MUNU</a></li>
						<li><a href="RecAct.html">Recomendaciones</a></li>
						<li><a href="PerfilActhtml">Perfil</a></li>
						<li><a href="VacAct.html">Esquema de Vacunacion</a></li>
					</ul>
				</nav>
			</header>
		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
			<?php
			echo"<div class='container'>";
					echo"<header>";
						echo"<h3>REGISTRO DE VACUNACIÓN</h3>";
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


		<!-- Main -->
			<div class='tab'>
			
  <table border='1' cellpadding='0' cellspacing='0'>
    <tr>
      <th class='time'></th>
      <th ><h1>VACUNA</h1></th>
      <th >ENFERMEDAD QUE PREVIENE</th>
      <th >DOSIS</th>
      <th >EDAD Y FRECUANCIA</th>
      <th >FECHA DE APLICACIÓN</th>
    </tr>
    <tr>
      <td class='time'>1</td>
      <td class='cs336 blue1'>B C G </td>
      <td><h1>TUBERCULOSIS</h1></td>
      <td></td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>2</td>
      <td class='cs240 orange'></td>
	  <td></td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>3</td>
      <td class='cs240 orange'>HEPATITIS B</td>
	  <td><h1>HEPATITIS B</h1></td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>4</td>
      <td class='cs240 orange' data-tooltip=''></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	    <tr>
      <td class='time'>5</td>
      <td class='cs335 blue' ></td>
      <td><h1>DIFTERIA,TOSFERINA</h1></td>
      <td></td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>6</td>
      <td class='cs335 blue'>PENTAVALENTE</td>
	  <td><h1>TÉTANOS, POLIOMIELITIS</h1></td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>7</td>
      <td class='cs335 blue' >ACELULAR</td>
	  <td><h1>E INFECCIONES POR</h1></td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>8</td>
      <td class='cs335 blue' ></td>
	  <td><h1>H. influenzae b</h1></td>
	  <td></td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>9</td>
      <td class='cs241 yellow' >D P T</td>
	  <td><h1>DIFTERIA,TOS Y TÉTANOS</h1></td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>10</td>
      <td class='cs242 green1' ></td>
	  <td></td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>11</td>
      <td class='cs242 green1' >ROTAVIRUS</td>
	  <td><h1>DIARREA POR ROTAVIRUS</h1></td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>12</td>
      <td class='cs242 green1' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>13</td>
      <td class='cs335 blue' ></td>
	  <td><h1>INFECCIONES POR</h1></td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>13</td>
      <td class='cs335 blue' >NEUMOCOCINA</td>
	  <td><h1>NEUMOCOCO</h1></td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>14</td>
      <td class='cs335 blue' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
		<tr>
      <td class='time'>15</td>
      <td class='cs337 pink' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>16</td>
      <td class='cs337 pink' >INFLUENZA</td>
	  <td><h1>INFLUENZA</h1></td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>17</td>
      <td class='cs337 pink' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
		<tr>
      <td class='time'>18</td>
      <td class='cs336 purple' >S R P</td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
			<tr>
      <td class='time'>19</td>
      <td class='md313 red' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
				<tr>
      <td class='time'>20</td>
      <td class='md313 red' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
				<tr>
      <td class='time'>21</td>
      <td class='md313 red' >SABIN</td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
				<tr>
      <td class='time'>22</td>
      <td class='md313 red' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
				<tr>
      <td class='time'>23</td>
      <td class='md313 red' ></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>24</td>
      <td class='cs240 orange'>SR</td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>25</td>
      <td ><h1>OTRAS</h1></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
	<tr>
      <td class='time'>26</td>
      <td ><h1>VACUNAS</h1></td>
	  <td>-</td>
	  <td>-</td>
	  <td>-</td>
      <td>-</td>
    </tr>
  </table>
</div>
</header>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>