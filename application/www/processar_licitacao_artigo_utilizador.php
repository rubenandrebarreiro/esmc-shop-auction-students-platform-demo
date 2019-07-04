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
			
			$valor_licitacao = $_POST["valor_licitacao_ee"] . "." . $_POST["valor_licitacao_cc"];
			$hora_licitacao = date("H") . ":" . date("i") . ":" . date("s");
			$data_licitacao = date("Y") . "-" . date("m") . "-" . date("d");
			$id_artigo = $_POST["id_artigo"];
			$licitacao_minima = $_POST["licitacao_superior"];
			$nome_utilizador = $_SESSION["nome_utilizador"];
			
			$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
			$res1 = mysqli_query($con, "SELECT * from artigos where id_artigo='" . $id_artigo . "'");
			$row1 = mysqli_fetch_array($res1);
			
			if ($row1["preco_final"] < $valor_licitacao)
			{
				include("erro_licitacao_utilizador.php");
			}
			
			if ($row1["preco_final"] == $valor_licitacao)
			{
				$res2 = mysqli_query($con, "INSERT INTO licitacoes values (NULL,'$valor_licitacao','$hora_licitacao','$data_licitacao','$id_artigo','$nome_utilizador')");
				$res3 = mysqli_query($con, "SELECT * from avaliacoes where nome_utilizador='" . $nome_utilizador . "' and id_artigo='" . $id_artigo . "'");
				$num_rows3 = mysqli_num_rows($res3);
				$res4 = mysqli_query($con, "UPDATE artigos SET hora_limite='$hora_licitacao', data_limite='$data_licitacao' where id_artigo='$id_artigo'");
				
				if ($num_rows3 == 0)
				{
					$id_artigo_avaliacao=$id_artigo;
					include("aquisicao_avaliacao_artigo_servico_utilizador.php");
				}
				if ($num_rows3 != 0)
				{
					include("main_aquisicao_utilizador.php");
				}
			}
			if ($row1["preco_final"] > $valor_licitacao)
			{
				if ($valor_licitacao < $licitacao_minima)
				{
					include("erro_licitacao_utilizador.php");
				}
				else
				{
					$res2 = mysqli_query($con, "INSERT INTO licitacoes values (NULL,'$valor_licitacao','$hora_licitacao','$data_licitacao','$id_artigo','$nome_utilizador')");
					$res3 = mysqli_query($con, "SELECT * from avaliacoes where nome_utilizador='" . $nome_utilizador . "' and id_artigo='" . $id_artigo . "'");
					$num_rows3 = mysqli_num_rows($res3);

					if ($num_rows3 == 0)
					{
						$id_artigo_avaliacao=$id_artigo;
						include("avaliacao_artigo_servico_utilizador.php");
					}

					if ($num_rows3 != 0)
					{
						include("main_licitacao_utilizador.php");
					}
				}
			}
		?>
	</body>
</html>