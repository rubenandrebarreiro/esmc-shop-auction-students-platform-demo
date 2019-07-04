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
			$id_artigo=$_POST["id_artigo"];
			$descricao_artigo=$_POST["descricao_artigo"];
			$condicao_artigo=$_POST["condicao_artigo_escolha"];
			$hora_limite=$_POST["hora_limite_hh"].':'. $_POST["hora_limite_mm"].':00';
			$data_limite=$_POST["data_limite_aaaa"].'-'. $_POST["data_limite_mm"].'-'.$_POST["data_limite_dd"];
			$hora_limite_comp=$_POST["hora_limite_hh"] . $_POST["hora_limite_mm"] . '00';
			$data_limite_comp=$_POST["data_limite_aaaa"] . $_POST["data_limite_mm"] . $_POST["data_limite_dd"];
			$data_hora_limite_comp=$data_limite_comp . $hora_limite_comp;
			$hora_actual_hh=date("H");
			$hora_actual_mm=date("i");
			$hora_actual_ss=date("s");
			$hora_actual_comp=$hora_actual_hh . $hora_actual_mm . $hora_actual_ss;
			$data_actual_dd=date("d");
			$data_actual_mm=date("m");
			$data_actual_aaaa=date("Y");
			$data_actual_comp=$data_actual_aaaa . $data_actual_mm . $data_actual_dd;
			$data_hora_actual_comp=$data_actual_comp . $hora_actual_comp;
			$preco_final=$_POST["preco_final_ee"].'.'.$_POST["preco_final_cc"];
			$custos_envio=$_POST["custos_envio_ee"].'.'.$_POST["custos_envio_cc"];
			$forma_pagamento=$_POST["forma_pagamento_escolha"];
			$categoria=$_POST["categoria"];
			if ($data_hora_limite_comp < $data_hora_actual_comp)
			{
				include("erro_actualiza_artigos_utilizador.php");
			}
			else
			{
				$lig=mysql_connect("localhost","root","") or die("Erro na conexão");
				mysql_select_db("esmc_shop",$lig) or die ("Erro na escolha da Base de Dados (ESMC Shop)");
				$query1 = "SELECT * from categorias where nome_categoria='" . $categoria . "'";
				$res1=mysql_query($query1);
				if (!$res1)
				{
					include("erro_actualiza_artigos_utilizador.php");
				}
				else
				{	
					$row = mysql_fetch_array($res1);
					$id_categoria = $row['id_categoria'];
					$query2="UPDATE artigos SET descricao_artigo='$descricao_artigo', condicao_artigo='$condicao_artigo',
					hora_limite='$hora_limite', data_limite='$data_limite', preco_final='$preco_final', custos_envio='$custos_envio', forma_pagamento='$forma_pagamento',
					id_categoria='$id_categoria' where id_artigo='$id_artigo'";
					$res2=mysql_query($query2);
					if (!$res2)
					{
						include("erro_actualiza_artigos_utilizador.php");
					}
					else
					{   
						include("main_actualiza_artigos_utilizador.php");
					}
				}
			}
		?>
	</body>
</html>