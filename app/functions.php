<?php
function buscarUsuario ($conexao, $usuario, $senha){
	$usuario = mysql_real_escape_string($_POST['usuario']);
	$senha = mysql_real_escape_string($_POST['senha']);
		
	$query = "select * from usuarios where usuario = '{$usuario}' and senha = '{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}
function listarUsuarios($conexao){
	$usuarios = array();
	$query = "select * from usuarios";
	$resultado = mysqli_query($conexao, $query);
	while($usuario = mysqli_fetch_assoc($resultado)){
		array_push($usuarios, $usuario);
	}
	return $usuarios;
}