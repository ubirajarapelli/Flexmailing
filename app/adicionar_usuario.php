<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="../assets/insere_usuario.php" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title title-page" id="myModalLabel">Adicionar Novo Usuário</h4>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" placeholder="" class="form-control" name="nome">
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="nome_usuario">Nome de Usuário</label>
            <input type="text" placeholder="" class="form-control" name="nome_usuario">
          </div>
        </div>
         <div class="col-xs-6">
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" placeholder="" class="form-control" name="senha">
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="text" name="email" placeholder="" class="form-control">
          </div>        
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="nivel">Nível</label>
            <select name="nivel" id="" class="form-control">
              <option value="1">Administrador</option>
              <option value="2">Funcionário</option>
              <!-- <option value="3">Técnico</option> -->
            </select>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="ativo">Status</label>
            <select name="ativo" id="" class="form-control">
              <option value="0">Inativo</option>
              <option value="1" selected>Ativo</option>
            </select>
          </div>
        </div>
      </div><!-- Fim Row -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar
        &nbsp;<span class="glyphicon glyphicon-remove"></span></button>
        <button type="submit" class="btn btn-success">Salvar
        &nbsp;<span class="glyphicon glyphicon-floppy-disk"></span></button>
      </div>
      </form>
    </div>
  </div>
</div>