<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Flexmailing</title>
	<script src="../js/modernizr.2.6.2.min.js"></script>
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
<nav class="navbar navbar-inverse">
  <div class="container">
    <ul class="nav navbar-nav">
      <li>
        <a class="navbar-brand" href="#">
          <img src="../images/flexmailing_logo.png" alt="Logotipo Flexmailing" width="105px;">
        </a>
      </li>
      <li><a href="index.php">HOME</a></li>
      <li><a href="carros.php">CARROS</a></li>
      <li><a href="usuarios.php">USUÁRIOS</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(usuarioEstalogado()) {?>
      <li><a href=""><?= usuarioLogado() ?></a></li>
      <?php }else{ header("Location: ../login.php");}?>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>