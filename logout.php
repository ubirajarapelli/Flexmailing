<?php
	include('../../function_usuario.php');
	logout();
	$_SESSION["success"] = "Deslogado com sucesso.";
	header("Location: ../login.php");
	die();