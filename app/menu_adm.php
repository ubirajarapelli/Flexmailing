<nav class="navbar navbar-default">
  <div class="container">
    <ul class="nav navbar-nav">
      <li>
        <a class="navbar-brand" href="index.php">
          <img src="../images/flexmailing_logo_app.png" alt="Logotipo Flexmailing">
        </a>
      </li>
      <li class="menu-item"><a href="mailing.php">MAILING</a></li>
      <li class="menu-item"><a href="relatorios.php">RELATÓRIOS</a></li>
      <li class="menu-item"><a href="retornos.php">RETORNOS</a></li>
      <li class="menu-item"><a href="usuarios.php">USUÁRIOS</a></li>
      <li class="menu-item"><a href="black_list.php">BLACK LIST</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="menu-item"><a href=""><?php echo $_SESSION['UsuarioNome']; ?>
        &nbsp;<span class="glyphicon glyphicon-user"></span>
        </a>
      </li>
      <li class="menu-item"><a href="logout.php">Logout&nbsp;<span class="glyphicon glyphicon-off"></span></a></li>
    </ul>
  </div>
</nav>