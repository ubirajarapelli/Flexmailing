<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="insere_carros.php" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title title-page" id="myModalLabel">ADICIONAR NOVO</h4>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-xs-6">
          <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" placeholder="Ex. Vokswagen" class="form-control" name="marca">
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" placeholder="Ex Gol" class="form-control" name="nome">
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group">
            <label for="detalhes">Detalhes</label>
            <input type="text" name="detalhes" placeholder="Ex. 1.0 Mi 8v City" class="form-control">
          </div>        
        </div>
        <div class="col-xs-4">
          <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" placeholder="Somente Números ex. 28000" name="valor" class="form-control">
          </div>
        </div>
        <div class="col-xs-2">
          <div class="form-group">
            <label for="combustivel">Combustível</label>
            <select name="combustivel" id="" class="form-control">
              <option value="">Selecione</option>
              <option value="Gasolina">Gasolina</option>
              <option value="Alcool">Alcool</option>
              <option value="Flex">Flex</option>
              <option value="Diesel">Diesel</option>
            </select>
          </div>
        </div>
        <div class="col-xs-2">
          <div class="form-group">
            <label for="ano">Ano</label>
            <input type="text" placeholder="Ex. 2013" name="ano" class="form-control">
          </div>
        </div>
        <div class="col-xs-2">
          <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" placeholder="Ex. 2014" name="modelo" class="form-control">
          </div>
        </div>
        <div class="col-xs-2">
          <div class="form-group">
            <label for="portas">Portas</label>
            <select name="portas" id="" class="form-control">
              <option value="">Selecione</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
        <div class="col-xs-2">
          <div class="form-group">
            <label for="cor">Cor</label>
            <input type="text" placeholder="Ex. Preto" name="cor" class="form-control">
          </div>
        </div>
        <div class="col-xs-2">
          <div class="form-group">
            <label for="localidade">Localidade</label>
            <input type="text" placeholder="Ex. SP" name="localidade" class="form-control">
          </div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <label for="kilometragem">Kilometragem</label>
            <input type="text" name="kilometragem" class="form-control">
          </div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem" class="form-control">
          </div>
        </div>
      </div><!-- Fim Row -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>