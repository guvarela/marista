<?php
	include ("sessao.php");
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>LOCADORA</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php
	echo "BEM VINDO $login";
	?><br><br>

	<ul>
	<li class="cabecalho"><a href="clientes.php"> CLIENTES </a></li>
	<li class="cabecalho"><a href="emprestimo.php"> EMPRESTIMO </a></li>
	<li class="cabecalho"><a href="filmes.php">FILMES </a></li>
	<li class="cabecalho"><a href="pagamento.php"> PAGAMENTO</a></li>
	
	</ul>
	<a href="sair.php"> SAIR </a>
</body>
</html>



