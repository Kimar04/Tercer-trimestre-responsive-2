
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>responsive</title>
</head>
<body>
<header>
	<nav>
		<a>viajes</a>
			<a>Puntos</a>
			<a>denuncia</a>
		<form name="search" method="post" action="">
			<input type="text" placeholder="Search.." name="">
			<button type="sumit">Buscar</button>
		</form>
	</nav>
</header>
<aside>
	<div class="aside">
		<figure>
			<image src="../../public/images/Usuario.jpg" width="25"/>
		</figure>
		<p>Nombre</p>
		<p>correo</p>
	</div>
	<p>Secion de navegacion</p>
	<ul>
		<li>Home</li>
		<li>Typografia</li>
		<li>Colores</li>
		<li>Interface</li>
		<li>Tamaños</li>
		<li>Usuarios</li>
		<li>lugares</li>
		<li>Registros</li>
		<li>Visitas</li>
	</ul>
</aside>
<section>
	<article class="inf1">
		<div class="cbox1">
		</div>
		<div class="cbox2">
		</div>
		<div class="cbox3">
		</div>
		<div class="cbox4">
		</div>
	</article>
	<article class="inf2">
		<figure>
			<image src=""/>
		</figure>
	</article>
	<article class="inf3">
		<div class="cbox5">
		</div>
		<div class="cbox6">
		</div>
		<div class="cbox7">
		</div>
	</article>
</section>
<?php 
include ('templates/foot.php');
else{
	header('Location: http://localhost/indexadminEvaluacion/index.php')
}
?>