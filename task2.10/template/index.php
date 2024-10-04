<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Web Portal - Includes and requires</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

	<div id="header" class="container">
		<?php include 'logo.php'; ?>

		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#">Homepage</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Photos</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>

	</div>
	<?php include 'pictures.php'; ?>

	<div id="page">
		<div id="bg1">
			<div id="bg2">
				<div id="bg3">
					<?php include 'content.php'; ?>
					<?php include 'sidebar.php'; ?>
				</div>
			</div>
		</div>
	</div>


	<?php include 'footer.php'; ?>

</body>

</html>
<!--
El uso de required producirá un fatal error (E_COMPILE_ERROR) y se parará la ejecución del script, mientras que include solo hará saltar un warning pero el script continuará con su ejecución.
-->