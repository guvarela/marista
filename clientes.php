<?php
	include ("sessao.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>CLIENTES</title>
</head>
<body>

	<fieldset>
	<form method="POST" action="cadastro_cliente.php">

		<label for="nome"> NOME </label><br>
		<input type="text" name="nome" id="NOME" ><br><br>

		<label for="CPF"> CPF </label><br>
		<input type="text" name="CPF" id="CPF" ><br><br>

		<input type="submit" value="CADASTRAR" id="cadastrar" name="cadastrar">
	</fieldset>

	<a href="index.php"> INICIO </a>


	</form>

</body>
</html>