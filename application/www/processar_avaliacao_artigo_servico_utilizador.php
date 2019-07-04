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
			
			$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
			$res1 = mysqli_query($con, "INSERT INTO avaliacoes values (NULL,'$avaliacao_artigo','$avaliacao_servico','$nome_utilizador','$id_artigo')");
			
			if ($res1)
			{
				include("main_avaliacao_utilizador.php");
			}
		?>
	</body>
</html>





