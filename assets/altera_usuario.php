<?php
	require_once("../conecta.php");
	require_once("../functions.php"); 
	require_once("../function_usuario.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$nome_usuario = $_POST['nome_usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$nivel = $_POST['nivel'];
$ativo = $_POST['ativo'];


if(alterarUsuarios($conexao, $id, $nome, $nome_usuario, $senha, $email, $nivel, $ativo)) { ?>
 	<script>
 		alert('O Usuário foi alterado!');
 		location.href="../app/usuarios.php";
 	</script>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<script>
 		alert('Erro: O Usuário não foi alterado!');
 		location.href="../app/usuarios.php";
 	</script>
<?php }?>