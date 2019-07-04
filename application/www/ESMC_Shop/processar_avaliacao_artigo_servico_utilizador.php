<html>
	<head>
		<title>ESMC Shop - Aqui s&oacute n&atildeo encontra o que n&atildeo quer!</title>
	</head>
	<body>
		<?php
			if (!isset($_SESSION))
			{
				Session_start();
			}
			$avaliacao_artigo = $_POST["avaliacao_artigo"];
			$avaliacao_servico = $_POST["avaliacao_servico"];
			$nome_utilizador = $_SESSION["nome_utilizador"];
			$id_artigo=$_POST["id_artigo"];
			$lig=mysql_connect("localhost","root","") or die("Erro na conexão");
			mysql_select_db("esmc_shop",$lig) or die ("Erro na escolha da Base de Dados (ESMC Shop)");
			$query1="insert into avaliacoes values (NULL,'$avaliacao_artigo','$avaliacao_servico','$nome_utilizador','$id_artigo')";
			$res1=mysql_query($query1);
			if ($res1)
			{
				include("main_avaliacao_utilizador.php");
			}
		?>
	</body>
</html>





