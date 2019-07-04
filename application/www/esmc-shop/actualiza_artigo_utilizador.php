<?php session_start();?>
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
		function test_actualiza_artigos()
		{
			chck1=false;
			chck2=false;			
			if (form_registo_artigos.descricao_artigo.value.length == 0)
			{
				alert ("Tem que preencher o campo DESCRICAO DO ARTIGO");
				return false;
			}
			if (form_registo_artigos.descricao_artigo.value.length < 8)
			{
				alert ("O campo DESCRICAO DO ARTIGO deve ter mais do que 7 caracteres");
				return false;
			}
			if (form_registo_artigos.descricao_artigo.value.length > 60)
			{
				alert ("O campo DESCRICAO DO ARTIGO nao deve ter mais do que 60 caracteres");
				return false;
			}
			for (i=0; i < document.form_registo_artigos.condicao_artigo_escolha.length; i++)
			{
				if (document.form_registo_artigos.condicao_artigo_escolha[i].checked == true)
				{
					chck1=true;
					break;
				}
			}
			if (chck1==false)
			{
					alert ("Tem de seleccionar uma CONDICAO DO ARTIGO (Novo/Usado)"); 
					return false;
			}
			if ((form_registo_artigos.hora_limite_hh.selectIndex == 0) || (form_registo_artigos.hora_limite_mm.selectIndex == 0) || (form_registo_artigos.data_limite_dd.selectIndex == 0) || (form_registo_artigos.data_limite_mm.selectedIndex == 0) || (form_registo_artigo.data_limite_aaaa.selectedIndex == 0))
			{
				alert ("Tem que seleccionar uma HORA E DATA LIMITE DO LEILAO");
				return false;
			}
			if ((form_registo_artigos.data_limite_mm.value == 2) && (form_registo_artigos.data_limite_dd.value == 30))
			{
				alert ("O campo HORA E DATA LIMITE DO LEILAO esta invalido");
				return false;
			}
			if ((form_registo_artigos.data_limite_mm.value == 2) && (form_registo_artigos.data_limite_dd.value == 31))
			{
				alert ("O campo HORA E DATA LIMITE DO LEILAO esta invalido");
				return false;
			}
			if ((form_registo_artigos.data_limite_mm.value == 4) && (form_registo_artigos.data_limite_dd.value == 31))
			{
				alert ("O campo HORA E DATA LIMITE DO LEILAO esta invalido");
				return false;
			}
			if ((form_registo_artigos.data_limite_mm.value == 6) && (form_registo_artigos.data_limite_dd.value == 31))
			{
				alert ("O campo HORA E DATA LIMITE DO LEILAO esta invalido");
				return false;
			}
			if ((form_registo_artigos.data_limite_mm.value == 9) && (form_registo_artigos.data_limite_dd.value == 31))
			{
				alert ("O campo HORA E DATA LIMITE DO LEILAO esta invalido");
				return false;
			}
			if ((form_registo_artigos.data_limite_mm.value == 11) && (form_registo_artigos.data_limite_dd.value == 31))
			{
				alert ("O campo HORA E DATA LIMITE DO LEILAO esta invalido");
				return false;
			}
			if ((form_registo_artigos.preco_final_ee.value.length == 0) || (form_registo_artigos.preco_final_cc.value.length == 0))
			{
				alert ("Tem que preencher o campo PRECO FINAL");
				return false;
			}
			if (form_registo_artigos.preco_final_cc.value.length > 2)
			{
				alert ("O campo PRECO FINAL esta invalido");
				return false;
			}
			if ((isNaN(document.form_registo_artigos.preco_final_ee.value) == true) || (isNaN(document.form_registo_artigos.preco_final_cc.value) == true))
			{
				alert ("Tem que preencher o campo PRECO FINAL apenas com caracteres numericos");
				return false;
			}
			if ((form_registo_artigos.custos_envio_ee.value.length == 0) || (form_registo_artigos.custos_envio_cc.value.length == 0))
			{
				alert ("Tem que preencher o campo CUSTOS DE ENVIO");
				return false;
			}
			if (form_registo_artigos.custos_envio_cc.value.length > 2)
			{
				alert ("O campo CUSTOS DE ENVIO esta invalido");
				return false;
			}
			if ((isNaN(document.form_registo_artigos.custos_envio_ee.value) == true) || (isNaN(document.form_registo_artigos.custos_envio_cc.value) == true))
			{
				alert ("Tem que preencher o campo CUSTOS DE ENVIO apenas com caracteres numericos");
				return false;
			}
			for (ii=0; ii < document.form_registo_artigos.forma_pagamento_escolha.length; ii++)
			{
				if (document.form_registo_artigos.forma_pagamento_escolha[ii].checked == true)
				{
					chck2=true;
					break;
				}
			}
			if (chck2==false)
			{
					alert ("Tem de seleccionar uma FORMA DE PAGAMENTO (Dinheiro/Multibanco)"); 
					return false;
			}
			if (form_registo_artigos.categorias.selectedIndex == 0)
			{
				alert ("Tem que seleccionar uma CATEGORIA");
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
			$id_artigo = $_GET["id_artigo"];
			mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
			$res1 = mysqli_query($con, "SELECT * from utilizadores where nome_utilizador='" . $_SESSION["nome_utilizador"] . "'");
			$row1 = mysqli_fetch_array($res1);
			$res2 = mysqli_query($con, "SELECT * from artigos, utilizadores, categorias where artigos.id_artigo='$id_artigo' and artigos.nome_utilizador='" . $_SESSION["nome_utilizador"] . "' and artigos.nome_utilizador = utilizadores.nome_utilizador and artigos.id_categoria=categorias.id_categoria");
			$row2 = mysqli_fetch_array($res2);
		?>
		<?php
			if (date("l")=="Sunday")
			{
				$dia_sem_actual="Domingo";
			}
			if (date("l")=="Monday")
			{
				$dia_sem_actual="Segunda-Feira";
			}
			if (date("l")=="Tuesday")
			{
				$dia_sem_actual="Ter�a-Feira";
			}
			if (date("l")=="Wednesday")
			{
				$dia_sem_actual="Quarta-Feira";
			}
			if (date("l")=="Thursday")
			{
				$dia_sem_actual="Quinta-Feira";
			}
			if (date("l")=="Friday")
			{
				$dia_sem_actual="Sexta-Feira";
			}
			if (date("l")=="Saturday")
			{
				$dia_sem_actual="S�bado";
			}
			$dia_mes_actual=date("d");
			if (date("F")=="January")
			{
				$mes_actual="Janeiro";
			}
			if (date("F")=="February")
			{
				$mes_actual="Fevereiro";
			}
			if (date("F")=="March")
			{
				$mes_actual="Mar�o";
			}
			if (date("F")=="April")
			{
				$mes_actual="Abril";
			}
			if (date("F")=="May")
			{
				$mes_actual="Maio";
			}
			if (date("F")=="June")
			{
				$mes_actual="Junho";
			}
			if (date("F")=="July")
			{
				$mes_actual="Julho";
			}
			if (date("F")=="August")
			{
				$mes_actual="Agosto";
			}
			if (date("F")=="September")
			{
				$mes_actual="Setembro";
			}
			if (date("F")=="October")
			{
				$mes_actual="Outubro";
			}
			if (date("F")=="November")
			{
				$mes_actual="Novembro";
			}
			if (date("F")=="December")
			{
				$mes_actual="Dezembro";
			}
			$ano_actual=date("Y");
			$hora_actual=date("H");
			$minuto_actual=date("i");
			$data_hora_hoje = date("d/m/Y - H:i");
			$hora_limite = explode (':', $row2["hora_limite"]);
			$hora_limite_hh = $hora_limite[0];
			$hora_limite_mm = $hora_limite[1];
			$data_limite = explode ('-', $row2["data_limite"]);
			$data_limite_dd = $data_limite[2];
			$data_limite_mm = $data_limite[1];
			$data_limite_aaaa = $data_limite[0];
			$preco_final = explode ('.', $row2["preco_final"]);
			$preco_final_ee = $preco_final[0];
			$preco_final_cc = $preco_final[1];
			$custos_envio = explode ('.', $row2["custos_envio"]);
			$custos_envio_ee = $custos_envio[0];
			$custos_envio_cc = $custos_envio[1];
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
						<h3>Aqui pode actualizar os dados do seu artigo para leiloar</h3>
						<ul class='sectionList'>
							<li>
                           	<form enctype='multipart/form-data' name='form_registo_artigos' method='post' action='processar_actualiza_artigos_utilizador.php' onSubmit='return test_actualiza_artigos();'>
							<?php								
								echo "<b>Informa&ccedil&otildees necess&aacuterias para actualizar um artigo para leil&atilde;o:</b>";
								echo "<p>";
										echo "<h4>" . $row2['nome_artigo'] . "</h4>";
								echo "</p>";
								echo "<input type='text' class='inputBox2' name='id_artigo' value='" . $id_artigo . "' hidden>";
									echo "<p>";
									echo "<img class='left' src='./imgs_leilao/" . $row2['foto_artigo'] . "' width='75' height='75'>";
									echo "</p>";
									echo "<br>";
									echo "<br>";
									echo "<br>";
									echo "<br>";
									echo "<p>";
										echo "<label for='descricao_artigo' class='signup'>Descri&ccedil&atildeo do Artigo</label>";
										echo "<textarea name='descricao_artigo' COLS=42 ROWS=6 class='inputBox2'>" . $row2['descricao_artigo'] . "</textarea>";
										echo "<br>";
										echo "<font id='sugestoes'>A Descri&ccedil&atildeo do Artigo deve ter entre 8 a 60 caracteres</font>";
									echo "</p>";
									echo "<p>";
										echo "<label for='condicao_artigo' class='signup'>Condi&ccedil&atildeo do Artigo</label>";
										if ($row2["condicao_artigo"]=='Novo')
										{
											echo "<input id='condicao_artigo_1' name='condicao_artigo_escolha' class='radio' type='radio' value='Novo' checked />&nbsp;Novo";
											echo "&nbsp;&nbsp;&nbsp;&nbsp;";
											echo "<input id='condicao_artigo_2' name='condicao_artigo_escolha' class='radio' type='radio' value='Usado' />&nbsp;Usado";
										}
										if ($row2["condicao_artigo"]=='Usado')
										{
											echo "<input id='forma_pagamento_1' name='condicao_artigo_escolha' class='radio' type='radio' value='Novo' />&nbsp;Novo";
											echo "&nbsp;&nbsp;&nbsp;&nbsp;";
											echo "<input id='forma_pagamento_2' name='condicao_artigo_escolha' class='radio' type='radio' value='Usado' checked />&nbsp;Usado";
										}
									echo "</p>";
									echo "<p>";
										if ($hora_limite_hh==00)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00' selected>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==1)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01' selected>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==2)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02' selected>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==3)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03' selected>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==4)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04' selected>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==5)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05' selected>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==6)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06' selected>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==7)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07' selected>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==8)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08' selected>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==9)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09' selected>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==10)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==11)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==12)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
												echo "<option value='10'>10</option>";
												echo "<option value='11'11</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==13)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==14)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==15)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==16)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==17)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==18)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==19)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==20)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==21)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==22)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										if ($hora_limite_hh==23)
										{
											echo "<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>";
											echo "<select name='hora_limite_hh' class='inputBox3'>";
												echo "<option value='none'>Horas</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
											echo "</select>";
										}
										echo "&nbsp;&nbsp;";
										echo ":";
										echo "&nbsp;&nbsp;";
										if ($hora_limite_mm==0)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00' selected>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==1)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01' selected>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==2)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02' selected>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==3)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03' selected>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==4)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04' selected>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==5)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05' selected>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==6)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06' selected>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==7)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07' selected>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==8)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08' selected>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==9)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09' selected>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==10)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==11)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==12)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==13)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==14)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==15)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==16)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==17)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==18)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==19)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==20)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==21)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==22)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==23)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==24)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==25)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==26)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==27)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==28)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==29)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==30)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==31)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==32)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32' selected>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==33)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33' selected>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==23)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34' selected>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==35)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35' selected>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==36)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36' selected>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==37)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37' selected>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==38)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38' selected>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==39)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39' selected>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==40)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40' selected>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==41)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41' selected>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==42)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42' selected>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==43)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43' selected>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==44)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44' selected>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==45)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45' selected>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==46)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46' selected>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==47)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47' selected>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==48)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48' selected>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==49)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49' selected>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==50)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50' selected>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==51)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51' selected>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==52)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52' selected>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==53)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53' selected>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==54)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54' selected>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==55)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55' selected>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==56)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56' selected>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==57)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57' selected>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==58)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58' selected>58</option>";
												echo "<option value='59'>59</option>";
											echo "</select>";
										}
										if ($hora_limite_mm==59)
										{
											echo "<select name='hora_limite_mm' class='inputBox4'>";
												echo "<option value='none'>Minutos</option>";
												echo "<option value='00'>00</option>";
												echo "<option value='01'>01</option>";
												echo "<option value='02'>02</option>";
												echo "<option value='03'>03</option>";
												echo "<option value='04'>04</option>";
												echo "<option value='05'>05</option>";
												echo "<option value='06'>06</option>";
												echo "<option value='07'>07</option>";
												echo "<option value='08'>08</option>";
												echo "<option value='09'>09</option>";
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
												echo "<option value='32'>32</option>";
												echo "<option value='33'>33</option>";
												echo "<option value='34'>34</option>";
												echo "<option value='35'>35</option>";
												echo "<option value='36'>36</option>";
												echo "<option value='37'>37</option>";
												echo "<option value='38'>38</option>";
												echo "<option value='39'>39</option>";
												echo "<option value='40'>40</option>";
												echo "<option value='41'>41</option>";
												echo "<option value='42'>42</option>";
												echo "<option value='43'>43</option>";
												echo "<option value='44'>44</option>";
												echo "<option value='45'>45</option>";
												echo "<option value='46'>46</option>";
												echo "<option value='47'>47</option>";
												echo "<option value='48'>48</option>";
												echo "<option value='49'>49</option>";
												echo "<option value='50'>50</option>";
												echo "<option value='51'>51</option>";
												echo "<option value='52'>52</option>";
												echo "<option value='53'>53</option>";
												echo "<option value='54'>54</option>";
												echo "<option value='55'>55</option>";
												echo "<option value='56'>56</option>";
												echo "<option value='57'>57</option>";
												echo "<option value='58'>58</option>";
												echo "<option value='59' selected>59</option>";
											echo "</select>";
										}
										echo "&nbsp;&nbsp;";
										echo "de";
										echo "&nbsp;&nbsp;";
										if ($data_limite_dd==1)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==2)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==3)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==4)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==5)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==6)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==7)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==8)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==9)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==10)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==11)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==12)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==13)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==14)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==15)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==16)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==17)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==18)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==19)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==20)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==21)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==22)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==23)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==24)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==25)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==26)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==27)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==28)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==29)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==30)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_dd==31)
										{
											echo "<select name='data_limite_dd' class='inputBox3'>";
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
										if ($data_limite_mm==1)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm==2)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm==3)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm==4)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm==5)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm==6)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm==7)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm == 8)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm==9)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm==10)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm==11)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_mm==12)
										{
											echo "<select name='data_limite_mm' class='inputBox4'>";
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
										if ($data_limite_aaaa==2020)
										{
											echo "<select name='data_limite_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2020' selected>2020</option>";
												echo "<option value='2019'>2019</option>";
												echo "<option value='2018'>2018</option>";
												echo "<option value='2017'>2017</option>";
												echo "<option value='2016'>2016</option>";
												echo "<option value='2015'>2015</option>";
												echo "<option value='2014'>2014</option>";
												echo "<option value='2013'>2013</option>";
												echo "<option value='2012'>2012</option>";
												echo "<option value='2011'>2011</option>";
											echo "</select>";
										}
										if ($data_limite_aaaa==2019)
										{
											echo "<select name='data_limite_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2020'>2020</option>";
												echo "<option value='2019' selected>2019</option>";
												echo "<option value='2018'>2018</option>";
												echo "<option value='2017'>2017</option>";
												echo "<option value='2016'>2016</option>";
												echo "<option value='2015'>2015</option>";
												echo "<option value='2014'>2014</option>";
												echo "<option value='2013'>2013</option>";
												echo "<option value='2012'>2012</option>";
												echo "<option value='2011'>2011</option>";
											echo "</select>";
										}
										if ($data_limite_aaaa==2018)
										{
											echo "<select name='data_limite_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2020'>2020</option>";
												echo "<option value='2019'>2019</option>";
												echo "<option value='2018' selected>2018</option>";
												echo "<option value='2017'>2017</option>";
												echo "<option value='2016'>2016</option>";
												echo "<option value='2015'>2015</option>";
												echo "<option value='2014'>2014</option>";
												echo "<option value='2013'>2013</option>";
												echo "<option value='2012'>2012</option>";
												echo "<option value='2011'>2011</option>";
											echo "</select>";
										}
										if ($data_limite_aaaa==2017)
										{
											echo "<select name='data_limite_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2020'>2020</option>";
												echo "<option value='2019'>2019</option>";
												echo "<option value='2018'>2018</option>";
												echo "<option value='2017' selected>2017</option>";
												echo "<option value='2016'>2016</option>";
												echo "<option value='2015'>2015</option>";
												echo "<option value='2014'>2014</option>";
												echo "<option value='2013'>2013</option>";
												echo "<option value='2012'>2012</option>";
												echo "<option value='2011'>2011</option>";
											echo "</select>";
										}
										if ($data_limite_aaaa==2016)
										{
											echo "<select name='data_limite_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2020'>2020</option>";
												echo "<option value='2019'>2019</option>";
												echo "<option value='2018'>2018</option>";
												echo "<option value='2017'>2017</option>";
												echo "<option value='2016' selected>2016</option>";
												echo "<option value='2015'>2015</option>";
												echo "<option value='2014'>2014</option>";
												echo "<option value='2013'>2013</option>";
												echo "<option value='2012'>2012</option>";
												echo "<option value='2011'>2011</option>";
											echo "</select>";
										}
										if ($data_limite_aaaa==2015)
										{
											echo "<select name='data_limite_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2020'>2020</option>";
												echo "<option value='2019'>2019</option>";
												echo "<option value='2018'>2018</option>";
												echo "<option value='2017'>2017</option>";
												echo "<option value='2016'>2016</option>";
												echo "<option value='2015' selected>2015</option>";
												echo "<option value='2014'>2014</option>";
												echo "<option value='2013'>2013</option>";
												echo "<option value='2012'>2012</option>";
												echo "<option value='2011'>2011</option>";
											echo "</select>";
										}
										if ($data_limite_aaaa==2014)
										{
											echo "<select name='data_limite_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2020'>2020</option>";
												echo "<option value='2019'>2019</option>";
												echo "<option value='2018'>2018</option>";
												echo "<option value='2017'>2017</option>";
												echo "<option value='2016'>2016</option>";
												echo "<option value='2015'>2015</option>";
												echo "<option value='2014' selected>2014</option>";
												echo "<option value='2013'>2013</option>";
												echo "<option value='2012'>2012</option>";
												echo "<option value='2011'>2011</option>";
											echo "</select>";
										}
										if ($data_limite_aaaa==2013)
										{
											echo "<select name='data_limite_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2020'>2020</option>";
												echo "<option value='2019'>2019</option>";
												echo "<option value='2018'>2018</option>";
												echo "<option value='2017'>2017</option>";
												echo "<option value='2016'>2016</option>";
												echo "<option value='2015'>2015</option>";
												echo "<option value='2014'>2014</option>";
												echo "<option value='2013' selected>2013</option>";
												echo "<option value='2012'>2012</option>";
												echo "<option value='2011'>2011</option>";
											echo "</select>";
										}
										if ($data_limite_aaaa==2012)
										{
											echo "<select name='data_limite_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2020'>2020</option>";
												echo "<option value='2019'>2019</option>";
												echo "<option value='2018'>2018</option>";
												echo "<option value='2017'>2017</option>";
												echo "<option value='2016'>2016</option>";
												echo "<option value='2015'>2015</option>";
												echo "<option value='2014'>2014</option>";
												echo "<option value='2013'>2013</option>";
												echo "<option value='2012' selected>2012</option>";
												echo "<option value='2011'>2011</option>";
											echo "</select>";
										}
										if ($data_limite_aaaa==2011)
										{
											echo "<select name='data_limite_aaaa' class='inputBox3'>";
												echo "<option value='none'>Ano</option>";
												echo "<option value='2020'>2020</option>";
												echo "<option value='2019'>2019</option>";
												echo "<option value='2018'>2018</option>";
												echo "<option value='2017'>2017</option>";
												echo "<option value='2016'>2016</option>";
												echo "<option value='2015'>2015</option>";
												echo "<option value='2014'>2014</option>";
												echo "<option value='2013'>2013</option>";
												echo "<option value='2012'>2012</option>";
												echo "<option value='2011' selected>2011</option>";
											echo "</select>";
										}
										echo "<br>";
										echo "<font id='sugestoes'>Dever&aacute introduzir uma hora e data posteriores &agraves actuais, conv&eacutem lembrar que neste momento &eacute " . $dia_sem_actual . ", dia " . $dia_mes_actual . " de " . $mes_actual . " de " . $ano_actual . " e s&atildeo " . $hora_actual . " hora(s) e " . $minuto_actual . " minuto(s)</font>";
									echo "</p>";
									echo "<p>";
										echo "<label for='preco_final' class='signup'>Pre&ccedilo Final</label>";
										echo "<input type='text' class='inputBox5' name='preco_final_ee' value='$preco_final_ee'>&nbsp;&nbsp;,&nbsp;&nbsp;<input type='text' class='inputBox6' name='preco_final_cc' value='$preco_final_cc'>&nbsp;&nbsp;&euro;";
									echo "</p>";
									echo "<p>";
										echo "<label for='custos_envio' class='signup'>Custos de Envio</label>";
										echo "<input type='text' class='inputBox5' name='custos_envio_ee' value='$custos_envio_ee'>&nbsp;&nbsp;,&nbsp;&nbsp;<input type='text' class='inputBox6' name='custos_envio_cc' value='$custos_envio_cc'>&nbsp;&nbsp;&euro;";
									echo "</p>";
									echo "<p>";
										echo "<label for='forma_pagamento' class='signup'>Forma de Pagamento</label>";
										if ($row2["forma_pagamento"]=='Dinheiro')
										{
											echo "<input id='forma_pagamento_1' name='forma_pagamento_escolha' class='radio' type='radio' value='Dinheiro' checked />&nbsp;Dinheiro";
											echo "&nbsp;&nbsp;&nbsp;&nbsp;";
											echo "<input id='forma_pagamento_2' name='forma_pagamento_escolha' class='radio' type='radio' value='Multibanco' />&nbsp;Multibanco";
										}
										if ($row2["forma_pagamento"]=='Multibanco')
										{
											echo "<input id='forma_pagamento_1' name='forma_pagamento_escolha' class='radio' type='radio' value='Dinheiro' />&nbsp;Dinheiro";
											echo "&nbsp;&nbsp;&nbsp;&nbsp;";
											echo "<input id='forma_pagamento_2' name='forma_pagamento_escolha' class='radio' type='radio' value='Multibanco' checked />&nbsp;Multibanco";
										}
									echo "</p>";
									echo "<p>";
										echo "<label for='categoria' class='signup'>Categoria do Artigo</label>";
										if ($row2["nome_categoria"]=='Animais')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais' selected>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Antiguidades')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades' selected>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Calcado')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado' selected>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Computadores e Materiais Informaticos')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos' selected>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Consolas e Jogos')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos' selected>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Fotografia e Video')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video' selected>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Livros de Literatura')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura' selected>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Livros Escolares')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares' selected>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Musica')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica' selected>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Produtos Artisticos')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos' selected>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Telemoveis')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis' selected>Telem&oacuteveis</option>";
												echo "<option value='Vestuario'>Vestu&aacuterio</option>";
											echo "</select>";
										}
										if ($row2["nome_categoria"]=='Vestuario')
										{
											echo "<select name='categoria' class='inputBox2'>";
												echo "<option value='none'>Seleccione uma Categoria</option>";
												echo "<option value='Animais'>Animais</option>";
												echo "<option value='Antiguidades'>Antiguidades</option>";
												echo "<option value='Calcado'>Cal&ccedilado</option>";
												echo "<option value='Computadores e Materiais Informaticos'>Computadores e Materiais Inform&aacuteticos</option>";
												echo "<option value='Consolas e Jogos'>Consolas e Jogos</option>";
												echo "<option value='Fotografia e Video'>Fotografia e V&iacutedeo</option>";
												echo "<option value='Livros de Literatura'>Livros de Literatura</option>";
												echo "<option value='Livros Escolares'>Livros Escolares</option>";
												echo "<option value='Musica'>M&uacutesica</option>";
												echo "<option value='Produtos Artisticos'>Produtos Art&iacutesticos</option>";
												echo "<option value='Telemoveis'>Telem&oacuteveis</option>";
												echo "<option value='Vestuario' selected>Vestu&aacuterio</option>";
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