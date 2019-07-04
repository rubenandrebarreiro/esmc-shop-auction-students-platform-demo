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
				
				$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
				
				$res1 = mysqli_query($con, "DELETE FROM artigos WHERE id_artigo='$id_artigo'");
				$res2 = mysqli_query($con, "DELETE FROM licitacoes WHERE id_artigo='$id_artigo'");
				$res3 = mysqli_query($con, "DELETE FROM avaliacoes WHERE id_artigo='$id_artigo'");
				
				include("main_apagar_artigo_utilizador.php");	
			}
			else
			{
				$id_artigo=$_GET["id_artigo"];
				
				$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
				
				$res1 = mysqli_query($con, "DELETE FROM artigos WHERE id_artigo='$id_artigo'");
				$res2 = mysqli_query($con, "DELETE FROM licitacoes WHERE id_artigo='$id_artigo'");
				$res3 = mysqli_query($con, "DELETE FROM avaliacoes WHERE id_artigo='$id_artigo'");
				
				include("main_apagar_artigo_utilizador.php");	
			}
		?>
	</body>
</html>