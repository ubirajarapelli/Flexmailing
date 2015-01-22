<?php
  include ('../conecta.php');
 	include ('../functions.php');
  include ('../function_usuario.php');

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
    header("Location: index.php"); exit;
  }
  $usuario = buscarUsuario($conexao, $_POST['usuario'], $_POST['senha']);
  	#var_dump($usuario);

  if($usuario == null) {
  $_SESSION["danger"] = "Usuário ou senha inválido.";
  header("Location: index.php");
    //echo "Login inválido!"; exit;

  } else {

  $_SESSION["success"] = "Usuário logado com sucesso.";
  logarUsuario($usuario["email"]);
  header("Location: ../app/");

  }
  die();
  	