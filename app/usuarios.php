<?php
	include ('../conecta.php');
	include ('../functions.php');
	include ('header.php');
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="title-page">Usuários</h1>
		</div>
		<div class="col-xs-10">
			<p>Listagen de Usuários.<br>
			Adicinone uma novo usuário clicando no botão "Adicionar Novo".</p>
		</div>
		<div class="col-xs-2">
			<button class="btn btn-new btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
				Adicionar Novo&nbsp;<span class="glyphicon glyphicon-plus"></span>
			</button>
		</div>
		<div class="col-xs-12">
			<table class="table table-condensed table-striped">
				<thead class="table-title">
					<td>ID</td>
					<td>Nome</td>
					<td>Nome de Usuário</td>
					<td>E-mail</td>
					<!-- <td>Senha</td> -->
					<td>Nivel</td>
					<td>Status</td>
					<td>Data de Cadastro</td>
					<td></td>
					<td></td>
				</thead>
				<tbody>
				<?php
					$usuarios = listarUsuarios($conexao);
						foreach ($usuarios as $usuario) : ?>
						<tr>
							<td><?= $usuario['id'] ?></td>
							<td><?= utf8_encode($usuario['nome']) ?></td>
							<td><?= $usuario['usuario'] ?></td>
							<td><?= $usuario['email'] ?></td>
							<!-- <td><?= $usuario['senha'] ?></td> -->
							<?php
								if ($usuario['nivel'] == 1){
									$nivel = "Administrador";
								}elseif ($usuario['nivel'] == 2){
									$nivel = "Funcionário";
								}else{
									$nivel = "Técnico";
								}
							?>
							<td><?= $nivel ?></td>
							<?php 
								if ($usuario['ativo'] == 1){
									$ativo = "Ativo";
								}else{
									$ativo = "Inativo";
							}?>
							<td><?= $ativo ?></td>
							<td><?= $usuario['cadastro'] ?></td>

							<td>
								<button onclick="alterar();" class="btn btn-sm btn-warning" 
								data-src="<?= $usuario['id'] ?>" data-toggle="modal" 
								data-target=".bs-altera-modal-lg">
									Editar&nbsp;<span class="glyphicon glyphicon-pencil"></span>
								</button>
							</td>
							<td>
								<form action="../assets/deleta_usuario.php" method="POST">
									<input type="hidden" name="id" value="<?= $usuario['id'] ?>">
									<button type="submit" class="btn btn-sm btn-danger" onclick="return deletar();">
										Excluir&nbsp;<span class="glyphicon glyphicon-trash"></span>
									</button>
								</form>
							</td>
						</tr> 
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php require_once('adicionar_usuario.php'); ?>
<?php require_once('modal_altera.php'); ?>
<?php require_once('footer.php'); ?>
<?php require_once('scripts.php'); ?>
<script>
$(document).ready(function () {
  $('.btn-warning').click(function alterar() {
    var valEdit = $(this).attr('data-src');
  		$.ajax({
    		type: "POST",
    		url: "alterar_usuario.php",
    		data: {
          		id: valEdit,
    		},
    		success: function(data) {
      			$('#conteudo').html(data);
    		}
  		});
	});
})
</script>
