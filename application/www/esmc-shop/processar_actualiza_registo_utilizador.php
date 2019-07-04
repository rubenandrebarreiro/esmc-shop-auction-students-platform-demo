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
			
			$nome_utilizador=$_SESSION['nome_utilizador'];
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
			
			if ($_POST["nib"] != "NULL")
			{
				$nib = $_POST["nib"];
			}
			
			if ($_POST["nib"] == "NULL")
			{
				$nib = NULL;
			}
			
			$pergunta_secreta=$_POST["pergunta_secreta"];
			$resposta_secreta=$_POST["resposta_secreta"];
			$data_nasc=$_POST["data_nasc_aaaa"].'-'. $_POST["data_nasc_mm"].'-'. $_POST["data_nasc_dd"];
			
			$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
			$res = mysqli_query($con, "UPDATE utilizadores SET nome_proprio='$nome_proprio', apelido='$apelido',
			sexo='$sexo', ano='$ano_escolaridade', turma='$turma', morada='$morada', cidade='$cidade', distrito='$distrito',
			cod_postal='$cod_postal', telefone='$telefone', email='$email', password='$palavra_passe', nib='$nib', pergunta_secreta='$pergunta_secreta',
			resposta_secreta='$resposta_secreta', data_nasc='$data_nasc' WHERE nome_utilizador='$nome_utilizador'");
			
			if (!$res)
			{
				include("erro_actualiza_registo_utilizador.php");
			}
			else
			{   
				include("main_actualiza_registo_utilizador.php");
			}
		?>
	</body>
</html>