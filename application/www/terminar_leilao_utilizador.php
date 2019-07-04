<html>
	<head>
		<title>ESMC Shop - Aqui s&oacute n&atildeo encontra o que n&atildeo quer!</title>
	</head>
	<body>
		<?php
			if (!isset($_SESSION))
			{
				Session_start();
				
				$id_artigo=$_GET["id_artigo"];
				$hora_licitacao = date("H") . ":" . date("i") . ":" . date("s");
				$data_licitacao = date("Y") . "-" . date("m") . "-" . date("d");
				
				$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
				
				$res = mysqli_query($con, "UPDATE artigos SET hora_limite='$hora_licitacao', data_limite='$data_licitacao' where id_artigo='$id_artigo'");
				
				include("main_terminar_leilao_utilizador.php");	
			}
			else
			{
				$id_artigo=$_GET["id_artigo"];
				$hora_licitacao = date("H") . ":" . date("i") . ":" . date("s");
				$data_licitacao = date("Y") . "-" . date("m") . "-" . date("d");
				
				$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
				
				$res = mysqli_query($con, "UPDATE artigos SET hora_limite='$hora_licitacao', data_limite='$data_licitacao' where id_artigo='$id_artigo'");
				
				include("main_terminar_leilao_utilizador.php");
			}
		?>
	</body>
</html>