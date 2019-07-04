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
		function test_registo_artigos()
		{
			chck1=false;
			chck2=false;			
			
			if (form_registo_artigos.nome_artigo.value.length == 0)
			{
				alert ("Tem que preencher o campo NOME DO ARTIGO");
				return false;
			}
			if (form_registo_artigos.nome_artigo.value.length < 2)
			{
				alert ("O campo NOME DO ARTIGO deve ter mais do que 1 caracter");
				return false;
			}
			if (form_registo_artigos.nome_artigo.value.length > 26)
			{
				alert ("O campo NOME DO ARTIGO nao deve ter mais do que 26 caracteres");
				return false;
			}
			if (form_registo_artigos.foto_artigo.value.length == 0)
			{
				alert ("Tem que seleccionar uma foto para ser a FOTO DO ARTIGO");
				return false;
			}
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
			if ((form_registo_artigos.licitacao_base_ee.value.length == 0) || (form_registo_artigos.licitacao_base_cc.value.length == 0))
			{
				alert ("Tem que preencher o campo LICITACAO BASE OU PRECO INICIAL");
				return false;
			}
			if (form_registo_artigos.licitacao_base_cc.value.length > 2)
			{
				alert ("O campo LICITACAO BASE OU PRECO INICIAL esta invalido");
				return false;
			}
			if ((isNaN(document.form_registo_artigos.licitacao_base_ee.value) == true) || (isNaN(document.form_registo_artigos.licitacao_base_cc.value) == true))
			{
				alert ("Tem que preencher o campo LICITACAO BASE OU PRECO INICIAL apenas com caracteres numericos");
				return false;
			}
			if ((form_registo_artigos.preco_final_ee.value.length == 0) || (form_registo_artigos.preco_final_cc.value.length == 0))
			{
				alert ("Tem que preencher o campo PRECO FINAL");
				return false;
			}
			if (form_registo_artigos.preco_final_cc.value.length > 2)
			{
				alert ("O campo PRE�O FINAL esta invalido");
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
			
			$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
			$res1=mysqli_query($con, "SELECT * from utilizadores where nome_utilizador='" . $_SESSION["nome_utilizador"] . "'");
			$row1 = mysqli_fetch_array($res1);
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
			$dia_sem_actual="S&aacute;bado";
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
						<h3>Adicione aqui o artigo que deseja leiloar!</h3>
						<ul class="sectionList">
							<li>
                           		<form enctype="multipart/form-data" name="form_registo_artigos" method="post" action="processar_registo_artigos_utilizador.php" onSubmit="return test_registo_artigos();">
									<b>Informa&ccedil&otildees necess&aacuterias para registar um artigo:</b>
									<br>
									<br>
									<p>
										<label for="nome_artigo" class="signup">Nome do Artigo</label>
										<input type="text" class="inputBox2" name="nome_artigo">
										<br>
										<font id="sugestoes">O Nome do Artigo deve ter entre 2 a 26 caracteres e n&atilde;o pode ser alterado posteriormente</font>
									</p>
									<p>
										<label for="foto_artigo" class="signup">Foto do Artigo</label>
										<input type="text" id="foto_artigo" name="foto_artigo" class="file_input_textbox" readonly="readonly">
										<br>
										<font id="sugestoes">A Foto do Artigo dever&aacute ser da extens&atildeo .JPG ou .BMP, n&atilde;o deve ter mais que 2 MB e n&atilde;o pode ser alterada posteriormente</font>
										<div class="file_input_div">
										<input type="button" value="Procurar foto..." class="file_input_button">
										<input type="file" class="file_input_hidden" name="foto_artigo_hidden" onchange="javascript: document.getElementById('foto_artigo').value = this.files[0].name">
										</div>
									</p>
									<p>
										<label for="descricao_artigo" class="signup">Descri&ccedil&atildeo do Artigo</label>
										<textarea name="descricao_artigo" COLS=42 ROWS=6 class="inputBox2"></textarea>
										<br>
										<font id="sugestoes">A Descri&ccedil&atildeo do Artigo deve ter entre 8 a 60 caracteres</font>
									</p>
									<p>
										<label for="condicao_artigo" class="signup">Condi&ccedil&atildeo do Artigo</label>
										<input id="condicao_artigo_1" name="condicao_artigo_escolha" class="radio" type="radio" value="Novo" />&nbsp;Novo
										&nbsp;&nbsp;&nbsp;&nbsp;
										<input id="condicao_artigo_2" name="condicao_artigo_escolha" class="radio" type="radio" value="Usado" />&nbsp;Usado
									</p>
									<p>
										<label for='hora_data_limite' class='signup'>Hora e Data Limite do Leil&atildeo</label>
										<select name='hora_limite_hh' class='inputBox3'>
											<option value='none'>Horas</option>
											<option value='00'>00</option>
											<option value='01'>01</option>
											<option value='02'>02</option>
											<option value='03'>03</option>
											<option value='04'>04</option>
											<option value='05'>05</option>
											<option value='06'>06</option>
											<option value='07'>07</option>
											<option value='08'>08</option>
											<option value='09'>09</option>
											<option value='10'>10</option>
											<option value='11'>11</option>
											<option value='12'>12</option>
											<option value='13'>13</option>
											<option value='14'>14</option>
											<option value='15'>15</option>
											<option value='16'>16</option>
											<option value='17'>17</option>
											<option value='18'>18</option>
											<option value='19'>19</option>
											<option value='20'>20</option>
											<option value='21'>21</option>
											<option value='22'>22</option>
											<option value='23'>23</option>
										</select>
										&nbsp;&nbsp;
										:
										&nbsp;&nbsp;
										<select name='hora_limite_mm' class='inputBox4'>
											<option value='none'>Minutos</option>
											<option value='00'>00</option>
											<option value='01'>01</option>
											<option value='02'>02</option>
											<option value='03'>03</option>
											<option value='04'>04</option>
											<option value='05'>05</option>
											<option value='06'>06</option>
											<option value='07'>07</option>
											<option value='08'>08</option>
											<option value='09'>09</option>
											<option value='10'>10</option>
											<option value='11'>11</option>
											<option value='12'>12</option>
											<option value='13'>13</option>
											<option value='14'>14</option>
											<option value='15'>15</option>
											<option value='16'>16</option>
											<option value='17'>17</option>
											<option value='18'>18</option>
											<option value='19'>19</option>
											<option value='20'>20</option>
											<option value='21'>21</option>
											<option value='22'>22</option>
											<option value='23'>23</option>
											<option value='24'>24</option>
											<option value='25'>25</option>
											<option value='26'>26</option>
											<option value='27'>27</option>
											<option value='28'>28</option>
											<option value='29'>29</option>
											<option value='30'>30</option>
											<option value='31'>31</option>
											<option value='32'>32</option>
											<option value='33'>33</option>
											<option value='34'>34</option>
											<option value='35'>35</option>
											<option value='36'>36</option>
											<option value='37'>37</option>
											<option value='38'>38</option>
											<option value='39'>39</option>
											<option value='40'>40</option>
											<option value='41'>41</option>
											<option value='42'>42</option>
											<option value='43'>43</option>
											<option value='44'>44</option>
											<option value='45'>45</option>
											<option value='46'>46</option>
											<option value='47'>47</option>
											<option value='48'>48</option>
											<option value='49'>49</option>
											<option value='50'>50</option>
											<option value='51'>51</option>
											<option value='52'>52</option>
											<option value='53'>53</option>
											<option value='54'>54</option>
											<option value='55'>55</option>
											<option value='56'>56</option>
											<option value='57'>57</option>
											<option value='58'>58</option>
											<option value='59'>59</option>
										</select>
										&nbsp;&nbsp;
										de
										&nbsp;&nbsp;
										<select name='data_limite_dd' class='inputBox3'>
											<option value='none'>Dia</option>
											<option value='01'>1</option>
											<option value='02'>2</option>
											<option value='03'>3</option>
											<option value='04'>4</option>
											<option value='05'>5</option>
											<option value='06'>6</option>
											<option value='07'>7</option>
											<option value='08'>8</option>
											<option value='09'>9</option>
											<option value='10'>10</option>
											<option value='11'>11</option>
											<option value='12'>12</option>
											<option value='13'>13</option>
											<option value='14'>14</option>
											<option value='15'>15</option>
											<option value='16'>16</option>
											<option value='17'>17</option>
											<option value='18'>18</option>
											<option value='19'>19</option>
											<option value='20'>20</option>
											<option value='21'>21</option>
											<option value='22'>22</option>
											<option value='23'>23</option>
											<option value='24'>24</option>
											<option value='25'>25</option>
											<option value='26'>26</option>
											<option value='27'>27</option>
											<option value='28'>28</option>
											<option value='29'>29</option>
											<option value='30'>30</option>
											<option value='31'>31</option>
										</select>
										&nbsp;&nbsp;
										/
										&nbsp;&nbsp;
										<select name='data_limite_mm' class='inputBox4'>
											<option value='none'>M&ecircs</option>
											<option value='01'>Janeiro</option>
											<option value='02'>Fevereiro</option>
											<option value='03'>Mar&ccedilo</option>
											<option value='04'>Abril</option>
											<option value='05'>Maio</option>
											<option value='06'>Junho</option>
											<option value='07'>Julho</option>
											<option value='08'>Agosto</option>
											<option value='09'>Setembro</option>
											<option value='10'>Outubro</option>
											<option value='11'>Novembro</option>
											<option value='12'>Dezembro</option>
										</select>
										&nbsp;&nbsp;
										/
										&nbsp;&nbsp;
										<select name='data_limite_aaaa' class='inputBox3'>
											<option value='none'>Ano</option>
											<option value='2020'>2020</option>
											<option value='2019'>2019</option>
											<option value='2018'>2018</option>
											<option value='2017'>2017</option>
											<option value='2016'>2016</option>
											<option value='2015'>2015</option>
											<option value='2014'>2014</option>
											<option value='2013'>2013</option>
											<option value='2012'>2012</option>
											<option value='2011'>2011</option>
										</select>
										<br>
									<?php 
										echo "<font id='sugestoes'>Dever&aacute introduzir uma hora e data posteriores &agraves actuais, conv&eacutem lembrar que neste momento &eacute " . $dia_sem_actual . ", dia " . $dia_mes_actual . " de " . $mes_actual . " de " . $ano_actual . " e s&atildeo " . $hora_actual . " hora(s) e " . $minuto_actual . " minuto(s)</font>";
									?>										
									</p>
									<p>
										<label for="licitacao_base" class="signup">Licita&ccedil&atildeo Base ou Pre&ccedilo Inicial</label>
										<input type="text" class="inputBox5" name="licitacao_base_ee">&nbsp;&nbsp;,&nbsp;&nbsp;<input type="text" class="inputBox6" name="licitacao_base_cc">&nbsp;&nbsp;&euro;
										<br>
										<font id="sugestoes">A Licita&ccedil&atildeo Base ou Pre&ccedilo Inicial n&atildeo pode ser alterado posteriormente</font>
									</p>
									<p>
										<label for="preco_final" class="signup">Pre&ccedilo Final</label>
										<input type="text" class="inputBox5" name="preco_final_ee">&nbsp;&nbsp;,&nbsp;&nbsp;<input type="text" class="inputBox6" name="preco_final_cc">&nbsp;&nbsp;&euro;
									</p>
									<p>
										<label for="custos_envio" class="signup">Custos de Envio</label>
										<input type="text" class="inputBox5" name="custos_envio_ee">&nbsp;&nbsp;,&nbsp;&nbsp;<input type="text" class="inputBox6" name="custos_envio_cc">&nbsp;&nbsp;&euro;
									</p>
									<p>
										<label for="forma_pagamento" class="signup">Forma de Pagamento</label>
										<input id="forma_pagamento_1" name="forma_pagamento_escolha" class="radio" type="radio" value="Dinheiro" />&nbsp;Dinheiro
										&nbsp;&nbsp;&nbsp;&nbsp;
										<input id="forma_pagamento_2" name="forma_pagamento_escolha" class="radio" type="radio" value="Multibanco" />&nbsp;Multibanco
									</p>
									<p>
										<label for="categoria" class="signup">Categoria do Artigo</label>
										<select name="categoria" class="inputBox2">
											<option value="none">Seleccione uma Categoria</option>
											<option value="Animais">Animais</option>
											<option value="Antiguidades">Antiguidades</option>
											<option value="Calcado">Cal&ccedilado</option>
											<option value="Computadores e Materiais Informaticos">Computadores e Materiais Inform&aacuteticos</option>
											<option value="Consolas e Jogos">Consolas e Jogos</option>
											<option value="Fotografia e Video">Fotografia e V&iacutedeo</option>
											<option value="Livros de Literatura">Livros de Literatura</option>
											<option value="Livros Escolares">Livros Escolares</option>
											<option value="Musica">M&uacutesica</option>
											<option value="Produtos Artisticos">Produtos Art&iacutesticos</option>
											<option value="Telemoveis">Telem&oacuteveis</option>
											<option value="Vestuario">Vestu&aacuterio</option>
										</select>
									</p>
									<br>
										<input name="Submit" type="submit" value="Registar" class="inputButton3">
										&nbsp;&nbsp;&nbsp;&nbsp;
										<input name="Reset" type="reset" value="Limpar" class="inputButton3">
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