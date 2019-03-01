<?php
	
	$nome = $_POST['nome'];
	$CPF = ($_POST['CPF']);

	$connect = mysql_connect('localhost','root', '');
	$db = mysql_select_db('db_locadora');
	$query_select = "SELECT CPF FROM clientes WHERE CPF = '$CPF'";
	$select = mysql_query($query_select,$connect);
	$array = mysql_fetch_array($select);
	$logarray = $array['CPF'];

	if($CPF == ""|| $CPF == null){

		 echo"<script language='javascript' type='text/javascript'>alert('O campo CPF deve ser preenchido');window.location.href='clientes.php';</script>";
	}else {
		if($logarray == $CPF){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse CPF já existe');window.location.href='clientes.php';</script>";
        die();
         }else{
        $query = "INSERT INTO clientes (nome,CPF) VALUES ('$nome','$CPF')";
        $insert = mysql_query($query,$connect) or die(mysql_error());
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('cliente cadastrado com sucesso!');window.location.href='clientes.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse cliente');window.location.href='clientes.php'</script>";
        }

	}

}

?>