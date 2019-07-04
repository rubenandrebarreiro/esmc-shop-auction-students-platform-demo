<?php session_start();?>
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
			
			$nome_artigo=$_POST["nome_artigo"];
			$foto_artigo=$_POST["foto_artigo"];
			$descricao_artigo=$_POST["descricao_artigo"];
			$condicao_artigo=$_POST["condicao_artigo_escolha"];
			$hora_limite=$_POST["hora_limite_hh"] . ':' . $_POST["hora_limite_mm"] . ':00';
			$data_limite=$_POST["data_limite_aaaa"] . '-' . $_POST["data_limite_mm"] . '-' . $_POST["data_limite_dd"];
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
			$licitacao_base=$_POST["licitacao_base_ee"].'.'.$_POST["licitacao_base_cc"];
			$preco_final=$_POST["preco_final_ee"].'.'.$_POST["preco_final_cc"];
			$custos_envio=$_POST["custos_envio_ee"].'.'.$_POST["custos_envio_cc"];
			$forma_pagamento=$_POST["forma_pagamento_escolha"];
			$nome_utilizador=$_SESSION["nome_utilizador"];
			$categoria=$_POST["categoria"];
			
			if ($data_hora_limite_comp < $data_hora_actual_comp)
			{
				include("erro_registo_artigos_utilizador.php");
			}
			else
			{
				$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
				$res1 = mysqli_query($con, "SELECT * from categorias where nome_categoria='" . $categoria . "'");
				
				if (!$res1)
				{
					include("erro_registo_artigos_utilizador.php");
				}
				else
				{	
					$row1 = mysqli_fetch_array($res1);
					$id_categoria = $row1['id_categoria'];
					
					if ($_FILES['foto_artigo_hidden']['size'] > 2000000) 
					{
						include("erro_registo_artigos_utilizador.php");
					}
					else
					{
						if ((!$_FILES['foto_artigo_hidden']['type'] == "image/jpg") || (!$_FILES['foto_artigo_hidden']['type'] == "image/bmp"))
						{
							include("erro_registo_artigos_utilizador.php");
						}
						else
						{
							$res2 = mysqli_query($con, "INSERT INTO artigos values (NULL,'$nome_artigo','$foto_artigo','$descricao_artigo','$condicao_artigo',
														'$hora_limite','$data_limite','$licitacao_base','$preco_final','$custos_envio','$forma_pagamento','$nome_utilizador',
														'$id_categoria')");
					
							if (!$res2)
							{
								include("erro_registo_artigos_utilizador.php");
							}
						}
					}					
					if ($res2)
					{   
						$destino = "imgs_leilao/";
						$destino = $destino . basename ($_FILES['foto_artigo_hidden']['name']);
						move_uploaded_file ($_FILES['foto_artigo_hidden']['tmp_name'], $destino);
					
						include("main_registo_artigos_utilizador.php");
					}
				}
			}	
		?>
	</body>
</html>