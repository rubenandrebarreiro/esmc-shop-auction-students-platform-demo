<html>
	<head>
		<title>ESMC Shop - Aqui s&oacute n&atildeo encontra o que n&atildeo quer!</title>
	</head>
	<body>
		<?php
			$login_nome_utilizador=$_POST["nome_utilizador"];
			$login_password=$_POST["password"];
			$lig=mysql_connect("localhost","root","") or die ("Erro na conexão");
			mysql_select_db("esmc_shop",$lig) or die ("Erro na escolha da Base de Dados (ESMC Shop)");
			$query="select nome_utilizador, password from utilizadores where nome_utilizador='$login_nome_utilizador' and password='$login_password'";
			$res=mysql_query($query);
			$num_rows=mysql_num_rows($res);
			$row = mysql_fetch_array ($res);
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