<?php session_start();?>
<html>
	<head>
		<title>ESMC Shop - Aqui s&oacute n&atildeo encontra o que n&atildeo quer!</title>
	</head>
	<body>
		<?php
			$login_nome_utilizador=$_POST["nome_utilizador"];
			$login_password=$_POST["password"];
			
			$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
			$res = mysqli_query($con, "SELECT nome_utilizador, password from utilizadores where nome_utilizador='$login_nome_utilizador' and password='$login_password'");
			$num_rows = mysqli_num_rows($res);
			$row = mysqli_fetch_array ($res);
			
			if ($num_rows == 1)
			{
				if ($row["nome_utilizador"] == "Administrador")
				{
					Session_start();
					$_SESSION["nome_utilizador"]=$login_nome_utilizador;
					include("index_administrador.php");
				}
				else
				{
					Session_start();
					$_SESSION["nome_utilizador"]=$login_nome_utilizador;
					include("index_utilizador.php");
				}
			}
			else if ($num_rows == 0)
			{
				include("erro_login.html");
			}
		?>
	</body>
</html>