<?PHP
	session_start();
	if(!isset($_SESSION['k_username']))
		header("Location: index.php");

	$usu=$_SESSION['k_username'];

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
						<li><a href="#"></a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			

		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>

					<h2><?php echo "BIENVENIDO: ".$usu ?></h2>
						<h2>MENU</h2>

					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<ul class="actions vertical">
										<li><a href="#" class="button alt">RECOMENDACIONES</a></li>
									</ul>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<ul class="actions vertical">
										<li><a href="PerfilAct.php" class="button alt">PERFIL</a></li>
							</ul>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-clock-o""icon big rounded fa-user"></i>
							<ul class="actions vertical">
										<li><a href="VacAct.php" class="button alt">ESQUEMA DE VACUNACION</a></li>
							</ul>
						</section>
					</div>
				</div>
			</section>

				<!-- One -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
				
					<div class="row 400%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-clock-o"></i>
							<ul class="actions vertical">
										<li><a href="#" class="button alt">NUTRICIÓN</a></li>
							</ul>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<ul class="actions vertical">
										<li><a href="#" class="button alt">PROMOCIÓN DE LA SALUD</a></li>
							</ul>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<ul class="actions vertical">
										<li><a href="#" class="button alt">PREVENCION Y CONTROL DE ENFERMEDADES</a></li>
							</ul>
						</section>
					</div>
				</div>
			</section>

	</body>
</html>