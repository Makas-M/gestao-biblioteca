<?php

include("index.php");

$consulta = "SELECT * FROM requisicao";
$con = $mysqli -> query($consulta) or die($mysqli ->error);



$html = "<!DOCTYPE html>
<html lang='pt-pt'>
<head>
	<meta charset='utf-8'>
	<link rel= 'stylesheet' href='style.css'>
	<title>Gestão de Uma Biblioteca</title>



</head>
<body>
	<section id='header'>
		
		<div>
			<label class='pag'>Biblioteca</label>
			<ul id='navbar'>
				<li><a  href='index.html'>Home</a></li>
				<li><a class='active' href='listaRec.php'>Livros Requeridos</a></li>
				<li><a href='#'>Sobre</a></li>
				<li><a href='#'>Contacto</a></li>
			</ul>
		</div>

		</div>
		</section>
	<h1>Lista dos Livros Requeridos</h1>

	<table>
		<tr>
			<td>id</td>
			<td>nome</td>
			<td>BI</td>
			<td>contacto</td>
			<td>nivel</td>
			<td>titulo</td>
			<td>edicao</td>
			<td>autor</td>
			<td>dataAq</td>
		</tr>
		 while ($dado = $con ->fetch_array) {	
		
		<tr>
			<td>$dado[codigo]</td>
			<td>$dado[nome]</td>
			<td>$dado[BI]; </td>
			<td>$dado[telefone];</td>
			<td>$dado[nivel] </td>
			<td>$dado[titulo] </td>
			<td>$dado[edicao] </td>
			<td>$dado[autor] </td>
			<td>$dado[dataAq] </td>
		</tr>
		 }
	</table>

	<footer>
		copyright @ Antonio Fernando Macaringue
	</footer>
</body>
</html>";

echo $html;
?>