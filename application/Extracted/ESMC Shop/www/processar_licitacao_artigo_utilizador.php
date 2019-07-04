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
			$lig=mysql_connect("localhost","root","") or die("Erro na conexão");
			mysql_select_db("esmc_shop",$lig) or die ("Erro na escolha da Base de Dados (ESMC Shop)");
			$query1="select * from artigos where id_artigo='" . $id_artigo . "'";
			$res1=mysql_query($query1);
			$row1 = mysql_fetch_array($res1);
			if ($row1["preco_final"] < $valor_licitacao)
			{
				include("erro_licitacao_utilizador.php");
			}
			if ($row1["preco_final"] == $valor_licitacao)
			{
				$query2="insert into licitacoes values (NULL,'$valor_licitacao','$hora_licitacao','$data_licitacao','$id_artigo','$nome_utilizador')";
				$res2=mysql_query($query2);
				$query3="select * from avaliacoes where nome_utilizador='" . $nome_utilizador . "' and id_artigo='" . $id_artigo . "'";
				$res3 = mysql_query($query3);
				$num_rows3 = mysql_num_rows($res3);
				$query4="UPDATE artigos SET hora_limite='$hora_licitacao', data_limite='$data_licitacao' where id_artigo='$id_artigo'";
				$res4=mysql_query($query4);
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
					$query2="insert into licitacoes values (NULL,'$valor_licitacao','$hora_licitacao','$data_licitacao','$id_artigo','$nome_utilizador')";
					$res2=mysql_query($query2);
					$query3="select * from avaliacoes where nome_utilizador='" . $nome_utilizador . "' and id_artigo='" . $id_artigo . "'";
					$res3 = mysql_query($query3);
					$num_rows3 = mysql_num_rows($res3);
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