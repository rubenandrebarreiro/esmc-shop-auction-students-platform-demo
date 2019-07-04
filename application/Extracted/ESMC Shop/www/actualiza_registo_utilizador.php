<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="ESMC Shop">
		<meta name="keywords" content="ESMC Shop">
		<title>ESMC Shop - Aqui s&oacute n&atildeo encontra o que n&atildeo quer!</title>
		<link href="http://fonts.googleapis.com/css?family=Coda+Caption" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<script language="javascript">
		function click_nib()
		{
			if (document.form_actualiza_registo.nib_escolha[0].checked == true)
				{
					form_actualiza_registo.nib.disabled = false;
				}
			if (document.form_actualiza_registo.nib_escolha[1].checked == true)
				{
					form_actualiza_registo.nib.disabled = true;
				}
		}
		function test_actualiza_registo()
		{
			chck1=false;	
			if (form_actualiza_registo.nome_proprio.value.length == 0)
			{
				alert ("Tem que preencher o campo NOME PROPRIO");
				return false;
			}
			if (form_actualiza_registo.nome_proprio.value.length < 2)
			{
				alert ("O campo NOME PROPRIO deve ter mais do que 1 caracter");
				return false;
			}
			if (form_actualiza_registo.nome_proprio.value.length > 14)
			{
				alert ("O campo NOME PROPRIO nao deve ter mais do que 14 caracteres");
				return false;
			}
			if (form_actualiza_registo.apelido.value.length == 0)
			{
				alert ("Tem que preencher o campo APELIDO");
				return false;
			}
			if (form_actualiza_registo.apelido.value.length < 2)
			{
				alert ("O campo APELIDO deve ter mais do que 1 caracter");
				return false;
			}
			if (form_actualiza_registo.apelido.value.length > 14)
			{
				alert ("O campo APELIDO nao deve ter mais do que 14 caracteres");
				return false;
			}
			for (i=0; i < document.form_actualiza_registo.sexo_escolha.length; i++)
			{
				if (document.form_actualiza_registo.sexo_escolha[i].checked == true)
				{
					chck1=true;
					break;
				}
			}
			if (chck1==false)
			{
					alert ("Tem de seleccionar um SEXO (Masculino/Feminino)"); 
					return false;
			}
			if (form_actualiza_registo.ano_escolaridade.selectedIndex == 0)
			{
				alert ("Tem que seleccionar um ANO DE ESCOLARIDADE");
				return false;
			}
			if (form_actualiza_registo.turma.selectedIndex==0)
			{
				alert ("Tem que seleccionar uma TURMA");
				return false;
			}
			if (form_actualiza_registo.morada.value.length == 0)
			{
				alert ("Tem que preencher o campo MORADA");
				return false;
			}
			if (form_actualiza_registo.morada.value.length < 8)
			{
				alert ("O campo MORADA deve ter mais do que 7 caracteres");
				return false;
			}
			if (form_actualiza_registo.morada.value.length > 40)
			{
				alert ("O campo MORADA nao deve ter mais do que 40 caracteres");
				return false;
			}
			if (form_actualiza_registo.cidade.value.length == 0)
			{
				alert ("Tem que preencher o campo CIDADE");
				return false;
			}
			if (form_actualiza_registo.cidade.value.length < 4)
			{
				alert ("O campo CIDADE deve ter mais do que 3 caracteres");
				return false;
			}
			if (form_actualiza_registo.cidade.value.length > 40)
			{
				alert ("O campo CIDADE nao deve ter mais do que 40 caracteres");
				return false;
			}
			if (form_actualiza_registo.distrito.selectedIndex == 0)
			{
				alert ("Tem que seleccionar um DISTRITO");
				return false;
			}
			if (form_actualiza_registo.cod_postal.value.length == 0)
			{
				alert ("Tem que preencher o campo CODIGO POSTAL");
				return false;
			}
			if (form_actualiza_registo.cod_postal.value.length < 12)
			{
				alert ("O campo CÓDIGO POSTAL deve ter mais do que 11 caracteres");
				return false;
			}
			if (form_actualiza_registo.cod_postal.value.length > 30)
			{
				alert ("O campo CODIGO POSTAL nao deve ter mais do que 30 caracteres");
				return false;
			}
			if (form_actualiza_registo.telefone.value.length == 0)
			{
				alert ("Tem que preencher o campo TELEFONE");
				return false;
			}
			if (form_actualiza_registo.telefone.value.length != 9)
			{
				alert ("O campo TELEFONE deve ter 9 caracteres");
				return false;
			}
			if (isNaN(document.form_actualiza_registo.telefone.value) == true)
			{
				alert ("Tem que preencher o campo TELEFONE apenas com caracteres numericos");
				return false;
			}
			if (form_actualiza_registo.email.value.length == 0)
			{
				alert ("Tem que preencher o campo E-MAIL");
				return false;
			}
			if (form_actualiza_registo.email.value.length < 8)
			{
				alert ("O campo E-MAIL deve ter mais do que 7 caracteres");
				return false;
			}
			if (form_actualiza_registo.email.value.length > 40)
			{
				alert ("O campo E-MAIL nao deve ter mais do que 40 caracteres");
				return false;
			}
			if (form_actualiza_registo.palavra_passe_1.value.length == 0)
			{
				alert ("Tem que preencher o campo PALAVRA-PASSE");
				return false;
			}
			if (form_actualiza_registo.palavra_passe_2.value.length == 0)
			{
				alert ("Tem que re-introduzir novamente a PALAVRA-PASSE que escolheu");
				return false;
			}
			if (form_actualiza_registo.palavra_passe_1.value != form_actualiza_registo.palavra_passe_2.value)
			{
				alert ("As PALAVRAS-PASSE que introduziu nao coincidem");
				return false;
			}
			if (form_actualiza_registo.nib_numero.value != "NULL")
			{
				if (form_actualiza_registo.nib_numero.value.length == 0)
				{
					alert ("Tem que preencher o campo NUMERO DE IDENTIFICACAO BANCARIA");
					return false;
				}
				if (form_actualiza_registo.nib_numero.value.length != 21)
				{
					alert ("O campo NUMERO DE IDENTIFICACAO BANCARIA deve ter 21 caracteres");
					return false;
				}
				if (isNaN(document.form_actualiza_registo.nib_numero.value) == true)
				{
					alert ("Tem que preencher o campo NUMERO DE IDENTIFICACAO BANCARIA apenas com caracteres numericos");
					return false;
				}
			}
			if (form_actualiza_registo.pergunta_secreta.selectedIndex==0)
			{
				alert ("Tem que seleccionar uma PERGUNTA SECRETA");
				return false;
			}
			if (form_actualiza_registo.resposta_secreta.value.length == 0)
			{
				alert ("Tem que preencher o campo de RESPOSTA A PERGUNTA SECRETA");
				return false;
			}
			if (form_actualiza_registo.resposta_secreta.value.length < 2)
			{
				alert ("O campo de RESPOSTA A PERGUNTA SECRETA deve ter mais do que 1 caracter");
				return false;
			}
			if (form_actualiza_registo.resposta_secreta.value.length > 30)
			{
				alert ("O campo de RESPOSTA A PERGUNTA SECRETA nao deve ter mais do que 30 caracteres");
				return false;
			}
			if ((form_actualiza_registo.data_nasc_dd.selectIndex == 0) || (form_actualiza_registo.data_nasc_mm.selectedIndex == 0) || (form_actualiza_registo.data_nasc_aaaa.selectedIndex == 0))
			{
				alert ("Tem que seleccionar uma DATA DE NASCIMENTO");
				return false;
			}
			if ((form_actualiza_registo.data_nasc_mm.value == 2) && (form_actualiza_registo.data_nasc_dd.value == 30))
			{
				alert ("O campo DATA DE NASCIMENTO esta invalido");
				return false;
			}
			if ((form_actualiza_registo.data_nasc_mm.value == 2) && (form_actualiza_registo.data_nasc_dd.value == 31))
			{
				alert ("O campo DATA DE NASCIMENTO esta invalido");
				return false;
			}
			if ((form_actualiza_registo.data_nasc_mm.value == 4) && (form_actualiza_registo.data_nasc_dd.value == 31))
			{
				alert ("O campo DATA DE NASCIMENTO esta invalido");
				return false;
			}
			if ((form_actualiza_registo.data_nasc_mm.value == 6) && (form_actualiza_registo.data_nasc_dd.value == 31))
			{
				alert ("O campo DATA DE NASCIMENTO esta invalido");
				return false;
			}
			if ((form_actualiza_registo.data_nasc_mm.value == 9) && (form_actualiza_registo.data_nasc_dd.value == 31))
			{
				alert ("O campo DATA DE NASCIMENTO esta invalido");
				return false;
			}
			if ((form_actualiza_registo.data_nasc_mm.value == 11) && (form_actualiza_registo.data_nasc_dd.value == 31))
			{
				alert ("O campo DATA DE NASCIMENTO esta invalido");
				return false;
			}
			return true;
		}
    </script>
    <body>
		<?php
			if (!isset($_SESSION))
			{
				Session_start();
			}
			$nome_utilizador=$_GET["nome_utilizador"];
			$lig=mysql_connect("localhost","root","") or die ("Erro na conexão");
			mysql_select_db("esmc_shop",$lig) or die ("Erro na escolha da Base de Dados (ESMC Shop)");
			$query1="SELECT * from utilizadores where nome_utilizador='$nome_utilizador'";
			$res1=mysql_query($query1);
			$row1=mysql_fetch_array($res1);
		?>
		<div id="outer">
			<div id="header">
				<div id="logo">
					<a href="index_utilizador.php"><img src="images/logo.png" alt="ESMC Shop"></a>
				</div>
				<div id="nav">
					<ul>
						<li class="first">
							<a href="index_utilizador.php">In&iacutecio</a>
						</li>
						<li>
							<a href="pesquisa_avancada_artigos_utilizador.php">Pesquisa Avan&ccedilada</a>
						</li>
						<li>
							<a href="sobre_nos_utilizador.php">Sobre N&oacutes</a>
						</li>
						<li class="last">
							<a href="contactos_utilizador.php">Contactos e Links</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="banner">
				<img src="images/pic01.jpg" width="1180" height="305" alt="Escola Secund&aacuteria do Monte da Caparica">
			</div>
			<div id="main">
				<div id="content">
					<div id="box1">
						<div class="blogpost primary_wide2">
							<h2>Pesquisa R&aacute;pida</h2>
							<form name="pesquisa_rapida" method="POST" action="resultados_pesquisa_rapida_utilizador.php">
								<input type="text" maxlength="100" size="" class="inputBox_search" name="pesquisa_rapida_artigo_texto">
								&nbsp;
								<select name="pesquisa_rapida_categorias_escolha" class="inputBox_search" id="select_category">
									<option value="none" selected="selected">Todas as Categorias</option>
									<option value="Animais">Animais</option>
									<option value="Antiguidades">Antiguidades</option>
									<option value="Calcado">Cal&ccedil;ado</option>
									<option value="Computadores e Materiais Informaticos">Computadores e Materiais Inform&aacute;ticos</option>
									<option value="Consolas e Jogos">Consolas e Jogos</option>
									<option value="Fotografia e Video">Fotografia e V&iacute;deo</option>
									<option value="Livros de Literatura">Livros de Literatura</option>
									<option value="Livros Escolares">Livros Escolares</option>
									<option value="Musica">M&uacute;sica</option>
									<option value="Produtos Artisticos">Produtos Art&iacute;sticos</option>
									<option value="Telemoveis">Telem&oacute;veis</option>
									<option value="Vestuario">Vestu&aacute;rio</option>
								</select>
								<?php
									echo "<input type='hidden' name='nome_utilizador' value='" . $row1['nome_utilizador'] . "'>";
								?>
								&nbsp;
								<input name="Submit" type="submit" value="Pesquisar" class="inputButton_search">
							</form>
							<br>
						</div>
					</div>
					<div id="box4">
						<h3>Actualize o seu registo aqui, &eacute f&aacutecil!</h3>
						<ul class="sectionList">
							<li>
                           		<form name="form_actualiza_registo" method="post" action="processar_actualiza_registo_utilizador.php" onSubmit="return test_actualiza_registo();">
									<?php
										echo "<b>Informa&ccedil&otildees necess&aacuterias para actualizar o seu registo:</b>";
										echo "<br>";
										echo "<br>";
										echo "<p>";
											echo "<label for='nome_proprio' class='signup'>Nome Pr&oacuteprio</label>";
											echo "<input type='text' class='inputBox2' name='nome_proprio' value='" .$row1["nome_proprio"]."'>";
											echo "<br>";
											echo "<font id='sugestoes'>O Nome Pr&oacuteprio deve ter entre 2 a 14 caracteres</font>";
										echo "</p>";
										echo "<p>";
											echo "<label for='apelido' class='signup'>Apelido</label>";
											echo "<input type='text' class='inputBox2' name='apelido' value='" .$row1["apelido"]."'>";
											echo "<br>";
											echo "<font id='sugestoes'>O Apelido deve ter entre 2 a 14 caracteres</font>";
										echo "</p>";
										echo "<p>";
											echo "<label for='sexo' class='signup'>Sexo</label>";
											if ($row1["sexo"]=='Masculino')
											{
												echo "<input id='sexo_1' name='sexo_escolha' class='radio' type='radio' value='Masculino' checked/>&nbsp;Masculino";
												echo "&nbsp;&nbsp;&nbsp;&nbsp;";
												echo "<input id='sexo_2' name='sexo_escolha' class='radio' type='radio' value='Feminino'/>&nbsp;Feminino";
											}
											if ($row1["sexo"]=='Feminino')
											{
												echo "<input id='sexo_1' name='sexo_escolha' class='radio' type='radio' value='Masculino'/>&nbsp;Masculino";
												echo "&nbsp;&nbsp;&nbsp;&nbsp;";
												echo "<input id='sexo_2' name='sexo_escolha' class='radio' type='radio' value='Feminino' checked/>&nbsp;Feminino";
											}
										echo "</p>";
										echo "<p>";
										if ($row1["ano"]==7)
										{
											echo "<label for='ano_escolaridade' class='signup'>Ano de escolaridade que frequenta na escola</label>";
											echo "<select name='ano_escolaridade' class='inputBox2'>";
												echo "<option value='none'>Seleccione o ano de escolaridade que frequenta</option>";
												echo "<option value='7' selected>7&ordm ano</option>";
												echo "<option value='8'>8&ordm ano</option>";
												echo "<option value='9'>9&ordm ano</option>";
												echo "<option value='10'>10&ordm ano</option>";
												echo "<option value='11'>11&ordm ano</option>";
												echo "<option value='12'>12&ordm ano</option>";
											echo "</select>";
										}
										if ($row1["ano"]==8)
										{
											echo "<label for='ano_escolaridade' class='signup'>Ano de escolaridade que frequenta na escola</label>";
											echo "<select name='ano_escolaridade' class='inputBox2'>";
												echo "<option value='none'>Seleccione o ano de escolaridade que frequenta</option>";
												echo "<option value='7'>7&ordm ano</option>";
												echo "<option value='8' selected>8&ordm ano</option>";
												echo "<option value='9'>9&ordm ano</option>";
												echo "<option value='10'>10&ordm ano</option>";
												echo "<option value='11'>11&ordm ano</option>";
												echo "<option value='12'>12&ordm ano</option>";
											echo "</select>";
										}
										if ($row1["ano"]==9)
										{
											echo "<label for='ano_escolaridade' class='signup'>Ano de escolaridade que frequenta na escola</label>";
											echo "<select name='ano_escolaridade' class='inputBox2'>";
												echo "<option value='none'>Seleccione o ano de escolaridade que frequenta</option>";
												echo "<option value='7'>7&ordm ano</option>";
												echo "<option value='8'>8&ordm ano</option>";
												echo "<option value='9' selected>9&ordm ano</option>";
												echo "<option value='10'>10&ordm ano</option>";
												echo "<option value='11'>11&ordm ano</option>";
												echo "<option value='12'>12&ordm ano</option>";
											echo "</select>";
										}
										if ($row1["ano"]==10)
										{
											echo "<label for='ano_escolaridade' class='signup'>Ano de escolaridade que frequenta na escola</label>";
											echo "<select name='ano_escolaridade' class='inputBox2'>";
												echo "<option value='none'>Seleccione o ano de escolaridade que frequenta</option>";
												echo "<option value='7'>7&ordm ano</option>";
												echo "<option value='8'>8&ordm ano</option>";
												echo "<option value='9'>9&ordm ano</option>";
												echo "<option value='10' selected>10&ordm ano</option>";
												echo "<option value='11'>11&ordm ano</option>";
												echo "<option value='12'>12&ordm ano</option>";
											echo "</select>";
										}
										if ($row1["ano"]==11)
										{
											echo "<label for='ano_escolaridade' class='signup'>Ano de escolaridade que frequenta na escola</label>";
											echo "<select name='ano_escolaridade' class='inputBox2'>";
												echo "<option value='none'>Seleccione o ano de escolaridade que frequenta</option>";
												echo "<option value='7'>7&ordm ano</option>";
												echo "<option value='8'>8&ordm ano</option>";
												echo "<option value='9'>9&ordm ano</option>";
												echo "<option value='10'>10&ordm ano</option>";
												echo "<option value='11' selected>11&ordm ano</option>";
												echo "<option value='12'>12&ordm ano</option>";
											echo "</select>";
										}
										if ($row1["ano"]==12)
										{
											echo "<label for='ano_escolaridade' class='signup'>Ano de escolaridade que frequenta na escola</label>";
											echo "<select name='ano_escolaridade' class='inputBox2'>";
												echo "<option value='none'>Seleccione o ano de escolaridade que frequenta</option>";
												echo "<option value='7'>7&ordm ano</option>";
												echo "<option value='8'>8&ordm ano</option>";
												echo "<option value='9'>9&ordm ano</option>";
												echo "<option value='10'>10&ordm ano</option>";
												echo "<option value='11'>11&ordm ano</option>";
												echo "<option value='12' selected>12&ordm ano</option>";
											echo "</select>";
										}
										echo "</p>";
										echo "<p>";
										if ($row1["turma"]=='A')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A' selected>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='B')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B' selected>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='C')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C' selected>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='D')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D' selected>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='E')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E' selected>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='F')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F' selected>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='G')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G' selected>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='H')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H' selected>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='I')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I' selected>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='J')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J' selected>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='K')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K' selected>K</option>";
												echo "<option value='L'>L</option>";
											echo "</select>";
										}
										if ($row1["turma"]=='L')
										{
											echo "<label for='turma' class='signup'>A turma que frequenta na escola</label>";
											echo "<select name='turma' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua turma</option>";
												echo "<option value='A'>A</option>";
												echo "<option value='B'>B</option>";
												echo "<option value='C'>C</option>";
												echo "<option value='D'>D</option>";
												echo "<option value='E'>E</option>";
												echo "<option value='F'>F</option>";
												echo "<option value='G'>G</option>";
												echo "<option value='H'>H</option>";
												echo "<option value='I'>I</option>";
												echo "<option value='J'>J</option>";
												echo "<option value='K'>K</option>";
												echo "<option value='L' selected>L</option>";
											echo "</select>";
										}
											echo "</p>";
											echo "<p>";
												echo "<label for='morada' class='signup'>Morada</label>";
												echo "<input type='text' class='inputBox2' name='morada' value='" .$row1["morada"]."'>";
												echo "<br>";
												echo "<font id='sugestoes'>A Morada deve ter entre 8 a 40 caracteres</font>";
											echo "</p>";
											echo "<p>";
												echo "<label for='cidade' class='signup'>Cidade</label>";
												echo "<input type='text' class='inputBox2' name='cidade' value='" .$row1["cidade"]."'>";
												echo "<br>";
												echo "<font id='sugestoes'>A Cidade deve ter entre 4 a 40 caracteres</font>";
											echo "</p>";
										echo "<p>";
										if ($row1["distrito"]=='Aveiro')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro' selected>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Beja')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja' selected>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Braga')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga' selected>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Bragança')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca' selected>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Castelo Branco')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco' selected>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Coimbra')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra' selected>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Evora')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora' selected>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Faro')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro' selected>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarém'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Guarda')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda' selected>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Leiria')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria' selected>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Lisboa')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa' selected>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Portalegre')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre' selected>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Porto')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto' selected>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Santarem')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem' selected>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Setubal')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal' selected>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Viana do Castelo')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo' selected>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Vila Real')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real' selected>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Viseu')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem' selected>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu' selected>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Arquipelago dos Acores')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores' selected>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira'>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										if ($row1["distrito"]=='Arquipelago da Madeira')
										{
											echo "<label for='cidade' class='signup'>Distrito</label>";
											echo "<select name='distrito' class='inputBox2'>";
												echo "<option value='none'>Seleccione o distrito onde vive</option>";
												echo "<option value='Aveiro'>Aveiro</option>";
												echo "<option value='Beja'>Beja</option>";
												echo "<option value='Braga'>Braga</option>";
												echo "<option value='Braganca'>Bragan&ccedila</option>";
												echo "<option value='Castelo Branco'>Castelo Branco</option>";
												echo "<option value='Coimbra'>Coimbra</option>";
												echo "<option value='Evora'>&Eacutevora</option>";
												echo "<option value='Faro'>Faro</option>";
												echo "<option value='Guarda'>Guarda</option>";
												echo "<option value='Leiria'>Leiria</option>";
												echo "<option value='Lisboa'>Lisboa</option>";
												echo "<option value='Portalegre'>Portalegre</option>";
												echo "<option value='Porto'>Porto</option>";
												echo "<option value='Santarem'>Santar&eacutem</option>";
												echo "<option value='Setubal'>Set&uacutebal</option>";
												echo "<option value='Viana do Castelo'>Viana do Castelo</option>";
												echo "<option value='Vila Real'>Vila Real</option>";
												echo "<option value='Viseu'>Viseu</option>";
												echo "<option value='Arquipelago dos Acores'>Arquip&eacutelago dos A&ccedilores</option>";
												echo "<option value='Arquipelago da Madeira' selected>Arquip&eacutelago da Madeira</option>";
											echo "</select>";
										}
										echo "</p>";
										echo "<p>";
											echo "<label for='cod_postal' class='signup'>C&oacutedigo Postal</label>";
											echo "<input type='text' class='inputBox2' name='cod_postal' value='" .$row1["cod_postal"]."'>";
											echo "<br>";
											echo "<font id='sugestoes'>O C&oacutedigo Postal deve ter entre 12 a 30 caracteres</font>";
										echo "</p>";
										echo "<p>";
											echo "<label for='telefone' class='signup'>Telefone</label>";
											echo "<input type='text' class='inputBox2' name='telefone' value='" .$row1["telefone"]."'>";
											echo "<br>";
											echo "<font id='sugestoes'>O Telefone deve ter exactamente 9 d&iacutegitos</font>";
										echo "</p>";
										echo "<p>";
											echo "<label for='email' class='signup'>E-mail</label>";
											echo "<input type='text' class='inputBox2' name='email' value='" .$row1["email"]."'>";
											echo "<br>";
											echo "<font id='sugestoes'>O E-mail deve ter entre 8 a 40 caracteres</font>";
										echo "</p>";
										echo "<p>";
											echo "<label for='palavra_passe_1' class='signup'>Introduza uma palavra-passe</label>";
											echo "<input type='password' class='inputBox2' name='palavra_passe_1' value='" .$row1['password']. "'>";
										echo "</p>";
										echo "<p>";
											echo "<label for='palavra_passe_2' class='signup'>Introduza novamente a mesma palavra-passe</label>";
											echo "<input type='password' class='inputBox2' name='palavra_passe_2' value='" .$row1['password']. "'>";
											echo "<br>";
											echo "<font id='sugestoes'>As Palavras-Passe t&ecircm que coincidir</font>";
										echo "</p>";
										if ($row1['nib'] != NULL)
										{
											echo "<p>";
												echo "<label for='nib_numero' class='signup'>N&uacute;mero de Identifica&ccedil&atildeo Banc&aacute;ria</label>";
												echo "<input type='text' class='inputBox2' name='nib' value='" .$row1['nib']. "'>";
												echo "<br>";
												echo "<font id='sugestoes'>O N&uacute;mero de Identifica&ccedil&atildeo Banc&aacute;ria deve ter exactamente 21 d&iacute;gitos</font>";
											echo "</p>";
										}
										if ($row1['nib'] == NULL)
										{
											echo "<p>";
												echo "<label for='nib_condicao' class='signup'>J&aacute; possui N&uacute;mero de Identifica&ccedil;&atilde;o Banc&aacute;ria?</label>";
												echo "<input id='nib_1' name='nib_escolha' class='radio' type='radio' value='Sim' onClick='click_nib()' />&nbsp;Sim";
												echo "&nbsp;&nbsp;&nbsp;&nbsp;";
												echo "<input id='nib_2' name='nib_escolha' class='radio' type='radio' value='Nao' onClick='click_nib()' checked />&nbsp;Não";
											echo "</p>";
											echo "<p>";
												echo "<label for='nib_numero' class='signup'>N&uacute;mero de Identifica&ccedil&atildeo Banc&aacute;ria</label>";
												echo "<input type='text' class='inputBox2' name='nib' disabled>";
												echo "<br>";
												echo "<font id='sugestoes'>O N&uacute;mero de Identifica&ccedil&atildeo Banc&aacute;ria deve ter exactamente 21 d&iacute;gitos</font>";
											echo "</p>";
										}
										echo "<p>";
										if ($row1["pergunta_secreta"]=='Nome do Pai')
										{
											echo "<label for='pergunta_secreta' class='signup'>Escolha uma pergunta secreta</label>";
											echo "<select name='pergunta_secreta' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua pergunta-secreta</option>";
												echo "<option value='Nome do Pai' selected>O nome do seu pai</option>";
												echo "<option value='Nome da Mae'>O nome da sua m&atildee</option>";
												echo "<option value='Animal de Estimacao'>O nome do seu animal de estima&ccedil&atildeo</option>";
												echo "<option value='Local de Nascimento'>O local onde nasceu</option>";
												echo "<option value='Professor Preferido'>O nome do seu professor preferido</option>";
												echo "<option value='Programa de TV Preferido'>O seu programa de TV preferido</option>";
											echo "</select>";
										}
										if ($row1["pergunta_secreta"]=='Nome da Mae')
										{
											echo "<label for='pergunta_secreta' class='signup'>Escolha uma pergunta secreta</label>";
											echo "<select name='pergunta_secreta' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua pergunta-secreta</option>";
												echo "<option value='Nome do Pai'>O nome do seu pai</option>";
												echo "<option value='Nome da Mae' selected>O nome da sua m&atildee</option>";
												echo "<option value='Animal de Estimacao'>O nome do seu animal de estima&ccedil&atildeo</option>";
												echo "<option value='Local de Nascimento'>O local onde nasceu</option>";
												echo "<option value='Professor Preferido'>O nome do seu professor preferido</option>";
												echo "<option value='Programa de TV Preferido'>O seu programa de TV preferido</option>";
											echo "</select>";
										}
										if ($row1["pergunta_secreta"]=='Animal de Estimacao')
										{
											echo "<label for='pergunta_secreta' class='signup'>Escolha uma pergunta secreta</label>";
											echo "<select name='pergunta_secreta' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua pergunta-secreta</option>";
												echo "<option value='Nome do Pai'>O nome do seu pai</option>";
												echo "<option value='Nome da Mae'>O nome da sua m&atildee</option>";
												echo "<option value='Animal de Estimacao' selected>O nome do seu animal de estima&ccedil&atildeo</option>";
												echo "<option value='Local de Nascimento'>O local onde nasceu</option>";
												echo "<option value='Professor Preferido'>O nome do seu professor preferido</option>";
												echo "<option value='Programa de TV Preferido'>O seu programa de TV preferido</option>";
											echo "</select>";
										}
										if ($row1["pergunta_secreta"]=='Local de Nascimento')
										{
											echo "<label for='pergunta_secreta' class='signup'>Escolha uma pergunta secreta</label>";
											echo "<select name='pergunta_secreta' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua pergunta-secreta</option>";
												echo "<option value='Nome do Pai'>O nome do seu pai</option>";
												echo "<option value='Nome da Mae selected'>O nome da sua m&atildee</option>";
												echo "<option value='Animal de Estimacao'>O nome do seu animal de estima&ccedil&atildeo</option>";
												echo "<option value='Local de Nascimento' selected>O local onde nasceu</option>";
												echo "<option value='Professor Preferido'>O nome do seu professor preferido</option>";
												echo "<option value='Programa de TV Preferido'>O seu programa de TV preferido</option>";
											echo "</select>";
										}
										if ($row1["pergunta_secreta"]=='Professor Preferido')
										{
											echo "<label for='pergunta_secreta' class='signup'>Escolha uma pergunta secreta</label>";
											echo "<select name='pergunta_secreta' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua pergunta-secreta</option>";
												echo "<option value='Nome do Pai'>O nome do seu pai</option>";
												echo "<option value='Nome da Mae'>O nome da sua m&atildee</option>";
												echo "<option value='Animal de Estimacao'>O nome do seu animal de estima&ccedil&atildeo</option>";
												echo "<option value='Local de Nascimento'>O local onde nasceu</option>";
												echo "<option value='Professor Preferido' selected>O nome do seu professor preferido</option>";
												echo "<option value='Programa de TV Preferido'>O seu programa de TV preferido</option>";
											echo "</select>";
										}
										if ($row1["pergunta_secreta"]=='Programa de TV Preferido')
										{
											echo "<label for='pergunta_secreta' class='signup'>Escolha uma pergunta secreta</label>";
											echo "<select name='pergunta_secreta' class='inputBox2'>";
												echo "<option value='none'>Seleccione a sua pergunta-secreta</option>";
												echo "<option value='Nome do Pai'>O nome do seu pai</option>";
												echo "<option value='Nome da Mae'>O nome da sua m&atildee</option>";
												echo "<option value='Animal de Estimacao'>O nome do seu animal de estima&ccedil&atildeo</option>";
												echo "<option value='Local de Nascimento'>O local onde nasceu</option>";
												echo "<option value='Professor Preferido'>O nome do seu professor preferido</option>";
												echo "<option value='Programa de TV Preferido' selected>O seu programa de TV preferido</option>";
											echo "</select>";
										}
										echo "</p>";
										echo "<p>";
											echo "<label for='resposta_secreta' class='signup'>Introduza a resposta para a sua pergunta secreta</label>";
											echo "<input type='text' class='inputBox2' name='resposta_secreta' value='" .$row1["resposta_secreta"]."'>";
											echo "<br>";
											echo "<font id='sugestoes'>A Resposta &agrave sua Pergunta Secreta deve ter entre 2 a 30 caracteres</font>";
										echo "</p>";
										echo "<p>";
										$data_nasc = explode ('-', $row1["data_nasc"]);
										$dd = $data_nasc[2];
										$mm = $data_nasc[1];
										$aaaa = $data_nasc[0];
										if ($dd==1)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01' selected>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==2)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02' selected>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==3)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03' selected>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==4)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04' selected>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==5)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05' selected>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==6)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06' selected>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==7)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07' selected>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==8)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08' selected>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==9)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09' selected>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==10)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10' selected>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==11)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11' selected>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==12)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12' selected>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==13)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13' selected>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==14)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14' selected>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==15)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15' selected>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==16)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16' selected>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==17)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17' selected>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==18)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18' selected>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==19)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19' selected>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==20)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20' selected>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==21)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21' selected>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==22)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22' selected>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==23)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23' selected>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==24)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24' selected>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==25)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25' selected>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==26)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26' selected>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==27)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27' selected>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==28)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28' selected>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==29)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29' selected>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==30)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30' selected>30</option>";
												echo "<option value='31'>31</option>";
											echo "</select>";
										}
										if ($dd==31)
										{										
											echo "<label for='data_nasc' class='signup'>A sua data de nascimento</label>";
											echo "<select name='data_nasc_dd' class='inputBox3'>";
												echo "<option value='none'>Dia</option>";
												echo "<option value='01'>1</option>";
												echo "<option value='02'>2</option>";
												echo "<option value='03'>3</option>";
												echo "<option value='04'>4</option>";
												echo "<option value='05'>5</option>";
												echo "<option value='06'>6</option>";
												echo "<option value='07'>7</option>";
												echo "<option value='08'>8</option>";
												echo "<option value='09'>9</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'>11</option>";
												echo "<option value='12'>12</option>";
												echo "<option value='13'>13</option>";
												echo "<option value='14'>14</option>";
												echo "<option value='15'>15</option>";
												echo "<option value='16'>16</option>";
												echo "<option value='17'>17</option>";
												echo "<option value='18'>18</option>";
												echo "<option value='19'>19</option>";
												echo "<option value='20'>20</option>";
												echo "<option value='21'>21</option>";
												echo "<option value='22'>22</option>";
												echo "<option value='23'>23</option>";
												echo "<option value='24'>24</option>";
												echo "<option value='25'>25</option>";
												echo "<option value='26'>26</option>";
												echo "<option value='27'>27</option>";
												echo "<option value='28'>28</option>";
												echo "<option value='29'>29</option>";
												echo "<option value='30'>30</option>";
												echo "<option value='31' selected>31</option>";
											echo "</select>";
										}
										echo "&nbsp;&nbsp;";
										echo "/";
										echo "&nbsp;&nbsp;";
										if ($mm==1)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01' selected>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==2)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02' selected>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==3)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03' selected>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==4)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04' selected>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==5)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05' selected>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==6)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06' selected>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==7)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07' selected>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==8)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08' selected>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==9)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09' selected>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==10)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10' selected>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==11)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11' selected>Novembro</option>";
												echo "<option value='12'>Dezembro</option>";
											echo "</select>";
										}
										if ($mm==12)
										{
											echo "<select name='data_nasc_mm' class='inputBox4'>";
												echo "<option value='none'>M&ecircs</option>";
												echo "<option value='01'>Janeiro</option>";
												echo "<option value='02'>Fevereiro</option>";
												echo "<option value='03'>Mar&ccedilo</option>";
												echo "<option value='04'>Abril</option>";
												echo "<option value='05'>Maio</option>";
												echo "<option value='06'>Junho</option>";
												echo "<option value='07'>Julho</option>";
												echo "<option value='08'>Agosto</option>";
												echo "<option value='09'>Setembro</option>";
												echo "<option value='10'>Outubro</option>";
												echo "<option value='11'>Novembro</option>";
												echo "<option value='12' selected>Dezembro</option>";
											echo "</select>";
										}
											echo "&nbsp;&nbsp;";
											echo "/";
											echo "&nbsp;&nbsp;";
										if ($aaaa==2006)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006' selected>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==2005)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005' selected>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==2004)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004' selected>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==2003)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003' selected>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==2002)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002' selected>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==2001)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001' selected>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==2000)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000' selected>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1999)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999' selected>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1998)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998' selected>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1997)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997' selected>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1996)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996' selected>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1995)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995' selected>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1994)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994' selected>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1993)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993' selected>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1992)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992' selected>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1991)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991' selected>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1990)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990' selected>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1989)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989' selected>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1988)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988' selected>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1987)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987' selected>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1986)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986' selected>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1985)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985' selected>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1984)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984' selected>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1983)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983' selected>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1982)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982' selected>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1981)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981' selected>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1980)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980' selected>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1979)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979' selected>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1978)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978' selected>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1977)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977' selected>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1976)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976' selected>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1975)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975' selected>1975</option>";
												echo "<option value='1974'>1974</option>";
											echo "</select>";
										}
										if ($aaaa==1974)
										{
											echo "<select name='data_nasc_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2006'>2006</option>";
												echo "<option value='2005'>2005</option>";
												echo "<option value='2004'>2004</option>";
												echo "<option value='2003'>2003</option>";
												echo "<option value='2002'>2002</option>";
												echo "<option value='2001'>2001</option>";
												echo "<option value='2000'>2000</option>";
												echo "<option value='1999'>1999</option>";
												echo "<option value='1998'>1998</option>";
												echo "<option value='1997'>1997</option>";
												echo "<option value='1996'>1996</option>";
												echo "<option value='1995'>1995</option>";
												echo "<option value='1994'>1994</option>";
												echo "<option value='1993'>1993</option>";
												echo "<option value='1992'>1992</option>";
												echo "<option value='1991'>1991</option>";
												echo "<option value='1990'>1990</option>";
												echo "<option value='1989'>1989</option>";
												echo "<option value='1988'>1988</option>";
												echo "<option value='1987'>1987</option>";
												echo "<option value='1986'>1986</option>";
												echo "<option value='1985'>1985</option>";
												echo "<option value='1984'>1984</option>";
												echo "<option value='1983'>1983</option>";
												echo "<option value='1982'>1982</option>";
												echo "<option value='1981'>1981</option>";
												echo "<option value='1980'>1980</option>";
												echo "<option value='1979'>1979</option>";
												echo "<option value='1978'>1978</option>";
												echo "<option value='1977'>1977</option>";
												echo "<option value='1976'>1976</option>";
												echo "<option value='1975'>1975</option>";
												echo "<option value='1974' selected>1974</option>";
											echo "</select>";
										}
										echo "</p>";
										echo "<br>";
										echo "<input name='Submit' type='submit' value='Actualizar' class='inputButton3'>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;";
										echo "<input name='Reset' type='reset' value='Limpar' class='inputButton3'>";
									?>
								</form>
                       	    </li>
						</ul>
					</div>
				</div>
				<div id="sidebar">
					<?php
					echo "<h3>Bem-vindo, <i>" . $_SESSION["nome_utilizador"] . "</i></h3>";
					echo "<h3> O meu menu </h3>";
					?>
					<div class="form">
						<?php
							echo "<p>";
							echo "<li type=square><a href='registo_artigos_utilizador.php'>Adicionar artigos</a></li>";
							echo "</p>";
							echo "<p>";
							echo "<li type=square><a href='consultar_artigos_utilizador.php?nome_utilizador=" . $row1['nome_utilizador'] . "'>Consultar os meus artigos</a></li>";
							echo "</p>";
							echo "<p>";
							echo "<li type=square><a href='pesquisa_avancada_artigos_utilizador.php'>Pesquisa Avan&ccedil;ada de Artigos</a></li>";
							echo "</p>";
							echo "<p>";
							echo "<li type=square><a href='actualiza_registo_utilizador.php?nome_utilizador=" . $row1['nome_utilizador'] . "'>Alterar os meus dados</a></li>";
							echo "</p>";
							echo "<p>";
							echo "<li type=square><a href='cancelar_conta.php'>Cancelar conta</a></li>";
							echo "</p>";
							echo "<p>";
							echo "<li type=square><a href='processar_logout.php'>Sair</a></li>";
							echo "</p>";
						?>
					</div>
				</div>
				<br class="clear">
			</div>
		</div>
		<div id="copyright">
			ESMC Shop by <i>R&uacuteben Barreiro</i> for <a href="http://www.esec-monte-caparica.com/esec/">Escola Secund&aacuteria do Monte de Caparica</a>
		</div>	
</body>
</html>