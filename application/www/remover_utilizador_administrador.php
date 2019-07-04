<html>
	<head>
		<title>ESMC Shop - Aqui s&oacute n&atildeo encontra o que n&atildeo quer!</title>
	</head>
	<body>
		<?php
			if (!isset($_SESSION))
			{
				Session_start();
				$nome_utilizador=$_GET["nome_utilizador"];
				
				$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
				
				$res1 = mysqli_query($con, "DELETE FROM utilizadores WHERE nome_utilizador='$nome_utilizador'");
				$res2 = mysqli_query($con, "DELETE FROM artigos WHERE nome_utilizador='$nome_utilizador'");
				$res3 = mysqli_query($con, "DELETE FROM licitacoes WHERE nome_utilizador='$nome_utilizador'");
				$res4 = mysqli_query($con, "DELETE FROM avaliacoes WHERE nome_utilizador='$nome_utilizador'");
				
				include("main_remover_utilizador_administrador.php");
			}
			else
			{
				$nome_utilizador=$_GET["nome_utilizador"];
				
				$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
				
				$res1 = mysqli_query($con, "DELETE FROM utilizadores WHERE nome_utilizador='$nome_utilizador'");
				$res2 = mysqli_query($con, "DELETE FROM artigos WHERE nome_utilizador='$nome_utilizador'");
				$res3 = mysqli_query($con, "DELETE FROM licitacoes WHERE nome_utilizador='$nome_utilizador'");
				$res4 = mysqli_query($con, "DELETE FROM avaliacoes WHERE nome_utilizador='$nome_utilizador'");
				
				include("main_remover_utilizador_administrador.php");
			}
		?>
	</body>
</html>