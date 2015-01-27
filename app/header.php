<?php
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

$nivel_necessario = 2;

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: ../app/"); exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Flexmailing</title>
	<script src="js/modernizr.2.6.2.min.js"></script>
	<!-- Bootstrap -->
	 <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/stylesheet.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700,300italic,400italic,500italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <?php include ('menu_adm.php'); ?>
  <!-- <nav class="navbar navbar-default">
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
</nav> -->
