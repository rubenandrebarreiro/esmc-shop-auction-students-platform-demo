<html>
	<head>
		<title>ESMC Shop - Aqui s&oacute n&atildeo encontra o que n&atildeo quer!</title>
	</head>
	<body>
		<?php
			if (!isset($_SESSION))
			{
				Session_start();
				$nome_utilizador=$_SESSION["nome_utilizador"];
				$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
				$res1 = mysqli_query($con, "DELETE from utilizadores where nome_utilizador='$nome_utilizador'");
				$res2 = mysqli_query($con, "DELETE from artigos where nome_utilizador='$nome_utilizador'");
				$res3 = mysqli_query($con, "DELETE from licitacoes where nome_utilizador='$nome_utilizador'");
				$res4 = mysqli_query($con, "DELETE from avaliacoes where nome_utilizador='$nome_utilizador'");
				Session_destroy();
				include("main_cancelar_conta.html");	
			}
			else
			{
				$nome_utilizador=$_SESSION["nome_utilizador"];
				$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
				$res1 = mysqli_query($con, "DELETE from utilizadores where nome_utilizador='$nome_utilizador'");
				$res2 = mysqli_query($con, "DELETE from artigos where nome_utilizador='$nome_utilizador'");
				$res3 = mysqli_query($con, "DELETE from licitacoes where nome_utilizador='$nome_utilizador'");
				$res4 = mysqli_query($con, "DELETE from avaliacoes where nome_utilizador='$nome_utilizador'");
				Session_destroy();
				include("main_cancelar_conta.html");
			}
		?>
	</body>
</html>