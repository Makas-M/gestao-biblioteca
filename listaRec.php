<?php

include("index.php");

$consulta = "Select * from requisicao";
$con = mysqli -> query($consulta);

?>


<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Gestão de Uma Biblioteca</title>



</head>
<body>
	<section id="header">
		
		<div>
			<label class="pag">Biblioteca</label>
			<ul id="navbar">
				<li><a  href="index.html">Home</a></li>
				<li><a class="active" href="livrosRec.html">Livros Requeridos</a></li>
				<li><a href="#">Sobre</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</div>

		</div>
		</section>
	<h1>Lista dos Livros Requeridos</h1>
	<form method="get" action="index.php">

	</form>

	<footer>
		copyright @ Antonio Fernando Macaringue
	</footer>
</body>
</html>