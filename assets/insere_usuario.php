<?php
	require_once("../conecta.php");
	require_once("../functions.php"); 
	require_once("../function_usuario.php");


$nome = $_POST['nome'];
$nome_usuario = $_POST['nome_usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$nivel = $_POST['nivel'];
$ativo = $_POST['ativo'];


if(inserirUsuarios($conexao, $nome, $nome_usuario, $senha, $email, $nivel, $ativo)) { ?>
 	<script>
 		alert('O Usuário foi adicionado!');
 		location.href="../app/usuarios.php";
 	</script>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<script>
 		alert('Erro: O Usuário não foi adicionado!');
 		location.href="../app/usuarios.php";
 	</script>
<?php }?>