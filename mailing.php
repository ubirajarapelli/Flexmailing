<?php 
	require_once("../conecta.php");

	$select = $_POST['name'];

	$rstd = substr($select,0,-1);

	function listarMailings($conexao){
		$mailings = array();
		$query = "select" . $rstd . "from mailings_teste";
		$resultado = mysqli_query($conexao, $query);
		while($mailing = mysqli_fetch_assoc($resultado)){
			array_push($mailings, $mailing);
		}
		return $mailings;
	}
	echo "<script>
 		location.href='../app/rtMailing.php';
 	</script>";