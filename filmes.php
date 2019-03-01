<?php

include ("conexao.php");

$consulta_categoria = mysql_query ("SELECT * from categorias");

?>

<!DOCTYPE html>
<html>
<head>
	<title>FILMES</title>
</head>
<body>

	<fieldset>
	<form method="POST" action="cadastro_filmes.php">

		<label for="nome"> FILME </label><br>
		<input type="text" name="nome" id="filme" ><br><br>

		<label for="descricao"> DESCRICAO </label><br>
		<input type="text" name="descricao" id="descricao" ><br><br>

		<label>SELECIONE UMA CATEGORIA</label><br><br>
		<select name="categoria_id" id="categoria">
			<option>Selecione...</option>

			<?php while($prod = mysql_fetch_array($consulta_categoria)) { ?>
    		<option value="<?php echo $prod['ID'] ?>"><?php echo $prod['categoria'] ?></option>
			<?php } ?>
		</select><br><br>
		<input type="submit" value="CADASTRAR" id="cadastrar" name="cadastrar"><br><br>
	</form>
	<a href="index.php"> INICIO </a>

</body>
</html>