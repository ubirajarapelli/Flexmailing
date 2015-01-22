<?php
	
	include ('../conecta.php');
	include ('../functions.php');
	include ('../function_usuario.php');
	include ('header.php');
	include ('menu_adm.php');


	
	function listarMailings($conexao){
		$mailings = array();

		$select = $_POST['area'];
		$rstd = substr($select,0,-1);
		$upc = $rstd;
		$qr = "select " . $upc . " from mailings_teste";

		$query = $qr;
		//$query = "select nome from mailings_teste";
		$resultado = mysqli_query($conexao, $query);
		while($mailing = mysqli_fetch_assoc($resultado)){
			array_push($mailings, $mailing);
		}
		return $mailings;
	}
?>
<?php verificaUsuario(); ?>
<div class="container">
<form action="#" method="POST"> 
	<div class="row">
		<div class="col-xs-12">
			<h1 class="title-page">Mailing</h1>
		</div>
		<div class="col-xs-10">
			<p>Selecione os campos abaixo que devem ser exportados.</p>
		</div>
		<div class="col-xs-12">
			<table class="table table-condensed table-striped">
				<thead class="table-title">
					<td>NOME</td>
					<td>TIPO_DOC</td>
					<td>DOC</td>
					<td>DDD</td>
					<td>TELEFONE</td>
					<td>TIPO_LOG</td>
					<td>LOGRADOURO</td>
					<td>NUMERO</td>
					<td>COMPLEMENTO</td>
					<td>BAIRRO</td>
					<td>CIDADE</td>
					<td>UF</td>
					<td>CEP</td>
				</thead>
				<tbody>
				<?php
					$mailings = listarMailings($conexao);
						foreach ($mailings as $mailing) : ?>
						<tr>
							<td><?= $mailing['NOME'] ?></td>
							<td><?= $mailing['TIPO_DOC'] ?></td>
							<td><?= $mailing['DOC'] ?></td>
							<td><?= $mailing['DDD'] ?></td>
							<td><?= $mailing['TELEFONE_FIXO'] ?></td>
							<td><?= $mailing['TIPO_LOG'] ?></td>
							<td><?= $mailing['LOGRADOURO'] ?></td>
							<td><?= $mailing['NUMERO'] ?></td>
							<td><?= $mailing['COMPLEMENTO'] ?></td>
							<td><?= $mailing['BAIRRO'] ?></td>
							<td><?= $mailing['CIDADE'] ?></td>
							<td><?= $mailing['UF'] ?></td>
							<td><?= $mailing['CEP'] ?></td>
							<!-- ID
							 NOME
							 TIPO_DOC
							 DOC
							 DDD
							 TELEFONE_FIXO
							 TIPO_LOG
							 LOGRADOURO
							 NUMERO
							 COMPLEMENTO
							 BAIRRO
							 CIDADE
							 UF
							 CEP
							 NASCIMENTO
							 DDD_TEL_CEL
							 TEL_CEL
							 E-MAIL
							 CPF VALIDO
							 PERIL CLIENTE -->
						</tr> 
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div> <!-- End Row -->
</form>
</div><!-- End Container -->
<?php require_once('adicionar_usuario.php'); ?>
<?php require_once('modal_altera.php'); ?>
<?php require_once('footer.php'); ?>
<?php require_once('scripts.php'); ?>
<script>
$(document).ready(function () {
  $('.btn-warning').click(function alterar() {
    var id = $(this).attr('data-src');
  		$.ajax({
    		type: "POST",
    		url: "altera_usuario.php",
    		data: {
          		cod_destaques: id,
    		},
    		success: function(data) {
      			$('#conteudo').html(data);
    		}
  		});
	});
})
</script>