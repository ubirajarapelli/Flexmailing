<?php
	include ('../conecta.php');
	include ('../functions.php');
	include ('header.php');
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="title-page">Home</h1>
		</div>
		<div class="col-xs-10">
			<p>Página Inicial.</p>
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