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
				$lig=mysql_connect("localhost","root","") or die ("Erro na conexão");
				mysql_select_db("esmc_shop",$lig) or die ("Erro na escolha da Base de Dados (ESMC Shop)");
				$query1="delete from artigos where id_artigo='$id_artigo'";
				$res1=mysql_query($query1);
				$query2="delete from licitacoes where id_artigo='$id_artigo'";
				$res2=mysql_query($query2);
				$query3="delete from avaliacoes where id_artigo='$id_artigo'";
				$res3=mysql_query($query3);
				include("main_apagar_artigo_utilizador.php");	
			}
			else
			{
				$id_artigo=$_GET["id_artigo"];
				$lig=mysql_connect("localhost","root","") or die ("Erro na conexão");
				mysql_select_db("esmc_shop",$lig) or die ("Erro na escolha da Base de Dados (ESMC Shop)");
				$query1="delete from artigos where id_artigo='$id_artigo'";
				$res1=mysql_query($query1);
				$query2="delete from licitacoes where id_artigo='$id_artigo'";
				$res2=mysql_query($query2);
				$query3="delete from avaliacoes where id_artigo='$id_artigo'";
				$res3=mysql_query($query3);
				include("main_apagar_artigo_utilizador.php");	
			}
		?>
	</body>
</html>