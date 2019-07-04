<html>
	<head>
		<title>ESMC Shop - Aqui s&oacute n&atildeo encontra o que n&atildeo quer!</title>
	</head>
	<body>
		<?php
			$nome_utilizador=$_POST["nome_utilizador"];
			$nome_proprio=$_POST["nome_proprio"];
			$apelido=$_POST["apelido"];
			$sexo=$_POST["sexo_escolha"];
			$ano_escolaridade=$_POST["ano_escolaridade"];
			$turma=$_POST["turma"];
			$morada=$_POST["morada"];
			$cidade=$_POST["cidade"];
			$distrito=$_POST["distrito"];
			$cod_postal=$_POST["cod_postal"];
			$telefone=$_POST["telefone"];
			$email=$_POST["email"];
			$palavra_passe=$_POST["palavra_passe_2"];
			$nib_escolha=$_POST["nib_escolha"];
			
			if ($nib_escolha == "Nao")
			{
				$nib=NULL;
			}
			else
			{
				$nib=$_POST["nib"];
			}
			
			$pergunta_secreta=$_POST["pergunta_secreta"];
			$resposta_secreta=$_POST["resposta_secreta"];
			$data_nasc=$_POST["data_nasc_aaaa"].'-'. $_POST["data_nasc_mm"].'-'. $_POST["data_nasc_dd"];
			
			$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
			$res = mysqli_query($con, "INSERT INTO utilizadores values ('$nome_utilizador','$nome_proprio','$apelido','$sexo',
			'$ano_escolaridade','$turma','$morada','$cidade','$distrito','$cod_postal','$telefone','$email',
			'$palavra_passe','$nib','$pergunta_secreta','$resposta_secreta','$data_nasc')");
			
			if (!$res)
			{
				include("erro_registo.html");
			}
			else
			{   
				include("main_registo.html");
			}
		?>
	</body>
</html>