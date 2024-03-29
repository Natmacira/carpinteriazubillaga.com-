<?php
if (
	isset($_POST['mail'])
	&& (isset($_POST['nombre']))
	&& (isset($_POST['consulta']))
) {
	$success = false;

	if (
		!empty(strip_tags($_POST['mail'])) &&
		!empty(strip_tags($_POST['nombre'])) &&
		!empty(strip_tags($_POST['consulta']))
	) {
		$to      = 'tecnica.zubillagapuertasnobles@gmail.com';
		$subject = 'Mensaje dejado en Formulario de Contacto';
		$message = 'Recibiste un mensaje en tu sitio web con la siguiente informaci&oacute;n:<br>
		Nombre: ' . strip_tags($_POST['nombre']) . '<br>
		Consulta: ' . strip_tags($_POST['consulta']) . '<br>
		Mail: ' . strip_tags($_POST['mail']) . '<br>
		IP: ' . $_SERVER['REMOTE_ADDR'];

		$headers  = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: <noreply@zubillagapuertasnobles.com>" . "\r\n";

		if (mail($to, $subject, $message, $headers)) {
			$success = true;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zubillaga Puertas Nobles</title>
	<link rel="stylesheet" href="style.min.css">
	<script src="js/burger-menu.js"></script>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="js/script.js"></script>
	<link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link rel="manifest" href="img/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://zubillagapuertasnobles.com/" />
	<meta name="description" content="Descripción de tu página">
	<link rel="canonical" href="https://zubillagapuertasnobles.com/">

</head>

<body <?php if (basename($_SERVER['SCRIPT_FILENAME']) !== "index.php") {
			echo 'class="puerta"';
		} ?>>
	<header>
		<section class="principal-header-section">
			<a href="index.php">
				<picture>
					<!-- Desktop -->
					<source media="(min-width:1200px)" srcset="img/logo-web.svg" alt="Logo Carpinteria Zubillaga">
					<!-- Mobile  -->
					<img src="img/logo-web.svg" alt="Logo Carpinteria Zubillaga">
				</picture>
			</a>

			<div id="container" class="open clss">
				<span class="cls"></span>
				<span>
					<ul class="sub-menu ">
						<li>
							<a href="index.php#history">DESDE 1890</a></figcaption>
						</li>
						<li>
							<a href="index.php#nobles">PUERTAS NOBLES</a></figcaption>
						</li>
						<li>
							<a href="#video">VIDEO</a></figcaption>
						</li>
						<li>
							<a href="#contacto">CONTACTO</a></figcaption>
						</li>
					</ul>
				</span>
				<span class="cls"></span>
			</div>

			<ul class="desktop-menu">
				<li>
					<a href="index.php#history">DESDE 1890</a></figcaption>
				</li>
				<li>
					<a href="index.php#nobles">PUERTAS NOBLES</a></figcaption>
				</li>
				<li>
					<a href="#video">VIDEO</a></figcaption>
				</li>
				<li>
					<a href="#contacto">CONTACTO</a></figcaption>
				</li>
			</ul>
		</section>
		<section class="social-media-header">
			<ul>
				<li><a href="https://instagram.com/zubillaga_puertas?igshid=YmMyMTA2M2Y=" target="_blank"><img src="img/desktop/ig_desktop.png" alt="Instagram logo link"></a></figcaption>
				</li>
				<li><a href="https://www.youtube.com/watch?v=KHe4EAMsJ-s" target="_blank"><img src="img/desktop/youtube_desktop.png" alt="Youtube logo link"></a></figcaption>
				</li>
			</ul>
		</section>


	</header>
	<main>