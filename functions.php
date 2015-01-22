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

function inserirUsuarios($conexao, $nome, $nome_usuario, $senha, $email, $nivel, $ativo) {
	$query = "insert into usuarios (nome, usuario, senha, email, nivel, ativo, cadastro) 
	values ('{$nome}', '{$nome_usuario}','{$senha}', '{$email}', '{$nivel}', '{$ativo}', now())";
	return mysqli_query($conexao, $query);
}

function deletarUsuarios($conexao, $id) {
	$query = "delete from usuarios where id = {$id}";
	return mysqli_query($conexao, $query);
}

function listarUsuariosAltera($conexao, $id){
	$query = "select * from usuarios where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alterarUsuarios($conexao, $id, $nome, $nome_usuario, $senha, $email, $nivel, $ativo) {
	$query = "update usuarios set nome = '{$nome}', usuario = '{$nome_usuario}', 
	senha = '{$senha}', email = '{$email}', nivel = '{$nivel}', ativo = '{$ativo}'
	where id = '{$id}'";
	return mysqli_query($conexao, $query);
}