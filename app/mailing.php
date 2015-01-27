<?php
	include ('../conecta.php');
	include ('../functions.php');
	include ('header.php');
?>
<div class="container">
<form action="rtMailing.php" method="POST"> 
	<div class="row">
		<div class="col-xs-12">
			<h1 class="title-page">Mailing</h1>
		</div>
		<div class="col-xs-10">
			<p>Selecione os campos abaixo que devem ser exportados.</p>
		</div>
		<div class="col-xs-10">

			<div class="form-group">
				<div class="row">
					<div class="col-xs-4 cols-xs-offset-7 pull-right">
						<label class="checkbox-inline btn btn-info">
							<input type="checkbox" class="hidden" onclick="checkAll(this)">Marcar / Desmarcar Todos
						</label>
					</div>
				</div>
			</div>
				<div class="form-group">
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" VALUE="NOME"> 
	  				Nome
				</label>
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" value="DOC"> 
	  				CPF
				</label>
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" value="DDD"> 
	  				DDD
				</label>
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" value="TELEFONE_FIXO"> 
	  				Telefone
				</label>
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" value="LOGRADOURO"> 
	  				Logradouro
				</label>
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" value="NUMERO"> 
	  				Número
				</label>
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" value="COMPLEMENTO"> 
	  				Complemento
				</label>
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" value="BAIRRO"> 
	  				Bairro
				</label>
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" value="CIDADE"> 
	  				Cidade
				</label>
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" value="UF"> 
	  				UF
				</label>
				<label class="checkbox-inline">
	  				<input type="checkbox" class="checkbox" value="CEP"> 
	  				CEP
				</label>
			</div>
		</div>
		<div class="col-xs-10">
			<p>Selecione o que deve ser filtrado.</p>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-3">
						<label class="sr-only" for=""></label>
						<select name="" class="form-control" id="">
							<option value="CIDADE">Cidade</option>
							<option value="BAIRRO">Bairro</option>
							<option value="CEP">Faixa de CEP</option>
						</select>
					</div>
					<div class="col-xs-3">
						<label class="sr-only" for=""></label>
						<select name="" class="form-control" id="">
							<option value="=">Igual</option>
							<option value="<>">Diferente</option>
							<option value="between">Entre</option>
						</select>
					</div>
					<div class="col-xs-3">
						<label class="sr-only" for=""></label>
						<select name="" class="form-control" id="">
							<option value="">Cidade</option>
							<option value="">Bairro</option>
							<option value="">CEP</option>
						</select>
					</div>
					<div class="col-xs-2">
						<button type="submit" class="btn btn-primary">Filtrar Mailing&nbsp;
							<span class="glyphicon glyphicon-filter"></span>
						</button>
						<div class="btn btn-primary" id="botao" onclick="return checkBox();">Filtro</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="col-xs-12">
			<table class="table table-condensed table-striped">
				<thead id="th" class="table-title">
					
				</thead>
				<tbody>
					
				</tbody>
			</table>
			<textarea id="p" name="area"></textarea>
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