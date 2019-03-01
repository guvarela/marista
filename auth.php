<?php

include ("conexao.php");

function autenticar($login, $senha) {
	session_start();
		
	$select = mysql_select_db('db_locadora') or die ("SEM ACESSO AO BANCO DE DADOS");
	
	$result = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");
	
	
	if(mysql_num_rows($result) > 0)
	
	{
	
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:index.php');
	
	
	}
	else{
	
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		echo"<script language='javascript' type='text/javascript'>alert('Não foi possível logar com esse usuário, por favor cadastre-se');window.location.href='cadastro.html'</script>";
		
	}
}

?>