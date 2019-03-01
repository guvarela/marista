<?php

session_start();

$login = $_SESSION['login'];
$senha = $_SESSION['senha'];


if($login == NULL or $senha == NULL){

	session_destroy();
	header('location:login.html');


}
?>