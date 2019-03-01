<?php
	
	include ("conexao.php");

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$categoria = $_POST['categoria_id'];
	
	$query_select = "SELECT nome FROM filmes WHERE nome = '$nome'";
	$select = mysql_query($query_select,$connect);
	$array = mysql_fetch_array($select);
	$logarray = $array['nome'];

	if($nome == ""|| $nome == null){

		 echo"<script language='javascript' type='text/javascript'>alert('O campo filme deve ser preenchido');window.location.href='filmes.php';</script>";
	}else {
		if($logarray == $nome){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse filme já existe');window.location.href='filmes.php';</script>";
        die();
         }else{
        $query = "INSERT INTO filmes (nome,descricao,categoria_id) VALUES ('$nome','$descricao','$categoria')";
        $insert = mysql_query($query,$connect) or die(mysql_error());
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('filme cadastrado com sucesso!');window.location.href='filmes.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse filme');window.location.href='filmes.php'</script>";
        }

	}

}

?>