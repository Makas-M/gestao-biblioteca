<?php
	//dados do livro
	$titulo = $_GET['titulo'];
	$edicao = $_GET['edicao'];
	$autor = $_GET['autor'];
 	
	//dados do requerente
	$nome = $_GET['nome'];
	$BI = $_GET['BI'];
	$telefone = $_GET['telefone'];
 	$nivel = $_GET['categoria'];
 	$dataAq = $_GET['data'];

 	//variavel que indica o tempo de estadia com o livro
 

 	if ($nivel == "Professor") {
 		$nivel == "Professor";
 	} else {
 		$nivel == "Aluno";
 	}
 	$html = "<!DOCTYPE html>
	<html>
		<head>
			<title></title>
		</head>
		<body>
			<h1>RECIBO</h1>
			<h1> dados do livro</h1>
			<h1>$titulo</h1>
			<h1>$edicao</h1>
			<h1>$autor</h1>
			<h1> dados do requerente</h1>
			<h1>$nome</h1>
			<h1>$BI</h1>
			<h1>$telefone</h1>
			<h1>$nivel</h1>
			<h1>$dataAq</h1>
			<h1>dataDev</h1>
		</body>
	</html>";

echo $html;
?>