<?php
  include ('../conecta.php');
  include ('../functions.php');
  $id = $_POST['id'];
  $usuario = listarUsuariosAltera($conexao, $id);
  $status = $usuario['status'] ? "selected" : "";
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Alterar Destaques</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="../css/stylesheet.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700,300italic,400italic,500italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
  <form action="../assets/altera_usuario.php" method="POST">
    <div class="modal-body">
      <div class="row">
        <div class="col-sm-1">
          <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" value="<?= $usuario['id']?>" class="form-control">
          </div>
        </div>
        <div class="col-xs-11">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" value="<?= utf8_encode($usuario['nome'])?>" class="form-control" name="nome">
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="nome_usuario">Nome de Usuário</label>
            <input type="text" value="<?= $usuario['usuario']?>" class="form-control" name="nome_usuario">
          </div>
        </div>
         <div class="col-xs-6">
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" value="<?= $usuario['senha']?>" class="form-control" name="senha">
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="text" name="email" value="<?= $usuario['email']?>" class="form-control">
          </div>        
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="nivel">Nível</label>
            <select name="nivel" id="" class="form-control">
            <?php if($usuario['nivel'] == 1) {?>
              <option value="1" selected>Administrador</option>
              <option value="2">Funcionário</option>
              <option value="3">Técnico</option>
            <?php }elseif($usuario['nivel'] == 2){ ?>
              <option value="1">Administrador</option>
              <option value="2" selected>Funcionário</option>
              <option value="3">Técnico</option>
            <?php }else{ ?>
              <option value="1">Administrador</option>
              <option value="2">Funcionário</option>
              <option value="3" selected>Técnico</option>
            <?php }?>
            </select>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="ativo">Status</label>
            <select name="ativo" id="" class="form-control">
            <?php if($usuario['ativo'] == 1) {?>
              <option value="0">Inativo</option>
              <option value="1" selected>Ativo</option>
            <?php }else{ ?>
              <option value="0" selected>Inativo</option>
              <option value="1">Ativo</option>
            <?php }?>
            </select>
          </div>
        </div>
      </div><!-- Fim Row -->
      </div>
      <div class="modal-footer">
        <div class="row">
          <div class="col-xs-12">
            <div class="pull-right">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar
                &nbsp;<span class="glyphicon glyphicon-remove"></span></button>
              <button type="submit" class="btn btn-success">Salvar
                &nbsp;<span class="glyphicon glyphicon-floppy-disk"></span></button>
            </div>
          </div>
        </div>
      </div>
  </form>
</body>
</html>
