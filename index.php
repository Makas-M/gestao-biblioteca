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
 		$dataDev = date($dataAq);
 	} else {
 		$nivel == "Aluno";
 	}
 	$html = "<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<link rel='stylesheet' href='factura.css'>
		</head>
		<body>
			<table>
				<thead class = 'cabecalho'>
					<tr>
						<th>Factura da Requisição do Livrvo</th>
						
					</tr>
				</thead>
				<tbody class = 'corpo'>
					<tr>
						<td>
							Nome do Requerente:
						</td>
						<td>
							$nome
						</td>
					</tr>
					<tr>
						<td>
							Bilhete de Identidade: 
						</td>
						<td>
							$BI
						</td>
					</tr>
					<tr>
						<td>
							Contacto do Requerente: 
						</td>
						<td>
							$telefone
						</td>
					</tr>
					<tr>
						<td>
							Nivel do Requerente: 
						</td>
						<td>
							$nivel
						</td>
					</tr>
					<tr>
						<td>
							Titulo do Livro: 
						</td>
						<td>
							$titulo
						</td>
					</tr>
					<tr>
						<td>
							Edicao do Livro: 
						</td>
						<td>
							$edicao
						</td>
					</tr>
					<tr>
						<td>
							Autor do Livro: 
						</td>
						<td>
							$autor
						</td>
					</tr>
					<tr>
						<td>
							Data da requisicao: 
						</td>
						<td>
							$dataAq
						</td>
					</tr>
					<tr>
						<td>
							Data da Devolução: 
						</td>
						<td>
							$dataDev
						</td>
					</tr>					
				</tbody>
			</table><br>

		</body>
	</html>";

echo $html;
?>