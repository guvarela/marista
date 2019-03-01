<?php
	
	include ("auth.php");		

	$login = $_POST['login'];
	$senha = ($_POST['senha']);

	$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
	$select = mysql_query($query_select,$connect);
	$array = mysql_fetch_array($select);
	$logarray = $array['login'];

	if($login == ""|| $login == null){

		 echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
	}else {
		if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();
         }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query($query,$connect) or die(mysql_error());
         
        if($insert){
          autenticar($login, $senha);
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }

	}

}

?>