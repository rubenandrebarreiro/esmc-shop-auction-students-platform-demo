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
		function test_pesquisa_avancada_artigos()
		{
			chck1=false;
			chck2=false;
			for (i=0; i < document.form_pesquisa_avancada_artigos.condicao_artigo_escolha.length; i++)
			{
				if (document.form_pesquisa_avancada_artigos.condicao_artigo_escolha[i].checked == true)
				{
					chck1=true;
					break;
				}
			}
			if (chck1==false)
			{
					alert ("Tem de seleccionar uma CONDICAO DO ARTIGO (Novo/Usado) para pesquisar"); 
					return false;
			}
			if ((form_pesquisa_avancada_artigos.data_limite_dd.selectIndex == 0) || (form_pesquisa_avancada_artigos.data_limite_mm.selectedIndex == 0) || (form_pesquisa_avancada_artigos.data_limite_aaaa.selectedIndex == 0))
			{
				alert ("Tem que seleccionar uma DATA LIMITE DO LEILAO para pesquisar");
				return false;
			}
			if ((form_pesquisa_avancada_artigos.data_limite_mm.value == 2) && (form_pesquisa_avancada_artigos.data_limite_dd.value == 30))
			{
				alert ("O campo DATA LIMITE DO LEILAO para pesquisar esta invalido");
				return false;
			}
			if ((form_pesquisa_avancada_artigos.data_limite_mm.value == 2) && (form_pesquisa_avancada_artigos.data_limite_dd.value == 31))
			{
				alert ("O campo DATA LIMITE DO LEILAO para pesquisar esta invalido");
				return false;
			}
			if ((form_pesquisa_avancada_artigos.data_limite_mm.value == 4) && (form_pesquisa_avancada_artigos.data_limite_dd.value == 31))
			{
				alert ("O campo DATA LIMITE DO LEILAO para pesquisar esta invalido");
				return false;
			}
			if ((form_pesquisa_avancada_artigos.data_limite_mm.value == 6) && (form_pesquisa_avancada_artigos.data_limite_dd.value == 31))
			{
				alert ("O campo DATA LIMITE DO LEILAO para pesquisar esta invalido");
				return false;
			}
			if ((form_pesquisa_avancada_artigos.data_limite_mm.value == 9) && (form_pesquisa_avancada_artigos.data_limite_dd.value == 31))
			{
				alert ("O campo DATA LIMITE DO LEILAO para pesquisar esta invalido");
				return false;
			}
			if ((form_pesquisa_avancada_artigos.data_limite_mm.value == 11) && (form_pesquisa_avancada_artigos.data_limite_dd.value == 31))
			{
				alert ("O campo DATA LIMITE DO LEILAO para pesquisar esta invalido");
				return false;
			}
			for (ii=0; ii < document.form_pesquisa_avancada_artigos.forma_pagamento_escolha.length; ii++)
			{
				if (document.form_pesquisa_avancada_artigos.forma_pagamento_escolha[ii].checked == true)
				{
					chck2=true;
					break;
				}
			}
			if (chck2==false)
			{
					alert ("Tem de seleccionar uma FORMA DE PAGAMENTO (Dinheiro/Multibanco) para pesquisar"); 
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
			$res1 = mysqli_query($con, "SELECT * from utilizadores where nome_utilizador='" . $_SESSION["nome_utilizador"] . "'");
			$row1 = mysqli_fetch_array($res1);
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
						<h3>Introduza aqui os par&acirc;metros para pesquisar um artigo</h3>
						<ul class="sectionList">
							<li>
								<form name="form_pesquisa_avancada_artigos" method="post" action="resultado_pesquisa_avancada_artigos_utilizador.php" onSubmit="return test_pesquisa_avancada_artigos();">
									<b>Introduza os par&acirc;metros que achar necess&aacute;rios para a pesquisa:</b>
									<br>
									<br>
									<p>
										<label for="nome_artigo" class="signup">Nome do Artigo</label>
										<input type="text" class="inputBox2" name="nome_artigo">
									</p>
									<p>
										<label for="condicao_artigo" class="signup">Condi&ccedil&atildeo do Artigo</label>
										<input id="condicao_artigo_1" name="condicao_artigo_escolha" class="radio" type="radio" value="Novo" />&nbsp;Novo
										&nbsp;&nbsp;&nbsp;&nbsp;
										<input id="condicao_artigo_2" name="condicao_artigo_escolha" class="radio" type="radio" value="Usado" />&nbsp;Usado
									</p>
									<p>
										<label for='data_limite' class='signup'>Data Limite do Leil&atilde;o at&eacute;</label>
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
									</p>
									<p>
										<label for="forma_pagamento" class="signup">Forma de Pagamento</label>
										<input id="forma_pagamento_1" name="forma_pagamento_escolha" class="radio" type="radio" value="Dinheiro" />&nbsp;Dinheiro
										&nbsp;&nbsp;&nbsp;&nbsp;
										<input id="forma_pagamento_2" name="forma_pagamento_escolha" class="radio" type="radio" value="Multibanco" />&nbsp;Multibanco
									</p>
									<p>
										<label for="nome_utilizador" class="signup">Nome do Utilizador</label>
										<input type="text" class="inputBox2" name="nome_utilizador">
									</p>
									<p>
										<label for="categoria" class="signup">Categoria do Artigo</label>
										<select name="categoria" class="inputBox2">
											<option value="">Seleccione uma Categoria</option>
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
										<input name="Submit" type="submit" value="Pesquisar" class="inputButton3">
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