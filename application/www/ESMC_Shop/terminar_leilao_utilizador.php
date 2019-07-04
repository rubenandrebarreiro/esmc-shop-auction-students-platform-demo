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
				$lig=mysql_connect("localhost","root","") or die ("Erro na conexão");
				mysql_select_db("esmc_shop",$lig) or die ("Erro na escolha da Base de Dados (ESMC Shop)");
				$query="UPDATE artigos SET hora_limite='$hora_licitacao', data_limite='$data_licitacao' where id_artigo='$id_artigo'";
				$res=mysql_query($query);
				include("main_terminar_leilao_utilizador.php");	
			}
			else
			{
				$id_artigo=$_GET["id_artigo"];
				$hora_licitacao = date("H") . ":" . date("i") . ":" . date("s");
				$data_licitacao = date("Y") . "-" . date("m") . "-" . date("d");
				$lig=mysql_connect("localhost","root","") or die ("Erro na conexão");
				mysql_select_db("esmc_shop",$lig) or die ("Erro na escolha da Base de Dados (ESMC Shop)");
				$query="UPDATE artigos SET hora_limite='$hora_licitacao', data_limite='$data_licitacao' where id_artigo='$id_artigo'";
				$res=mysql_query($query);
				include("main_terminar_leilao_utilizador.php");
			}
		?>
	</body>
</html>