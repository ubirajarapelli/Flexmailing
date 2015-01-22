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
	<div class="container content">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<form method="post" action="acesso.php">
					<img src="../images/flexmailing_logo.png" alt="Logotipo Flexmailing">
					<!-- <h3 class="titles titles-login">Flexmailing</h3> -->
					<p>Faça o login para acessar</p>
					<div class="input-group input-group-lg form-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<label class="sr-only" for="login">Login</label>
				   		<input name="usuario" type="text" class="input-login form-control" placeholder="Login">
					</div>
					<div class="input-group input-group-lg form-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</span>
						<label class="sr-only" for="senha">Senha</label>
			       		<input name="senha" type="password" class="input-login form-control" placeholder="Senha">
					</div>
				    <div class="form-group">    
						<input type="submit" class="btn btn-primary btn-lg btn-block" value="LOGIN">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>