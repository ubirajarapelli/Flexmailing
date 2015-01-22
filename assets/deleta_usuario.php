 <?php
	require_once("../conecta.php");
	require_once("../functions.php"); 
	//require_once("../function_usuario.php");

	$id = $_POST['id'];
 	if(deletarUsuarios($conexao, $id)){ ?>
 	<script>
 		alert('O Usuário foi excluído!');
 		location.href="../app/usuarios.php";
 	</script>
 		
	<?php 
	} else {
		$msg = mysqli_error($conexao);
	?>
	<script>
 		alert('Erro: O Usuário não foi excluído!');
 		location.href="../app/usuarios.php";
 	</script>
	<?php } ?>
