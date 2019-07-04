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
						<h3>Contactos e Links</h3>
						<ul class="sectionList">
							<li class="first">
								<h4>Site da Escola</h4>
								<a href="http://www.esec-monte-caparica.com/esec/" target="_blank">
								<img class="left" src="images/site01.jpg" width="75" height="75" alt="Site da Escola Secundária do Monte de Caparica">
								</a>
								<span>
								<a href="http://www.esec-monte-caparica.com/esec/" target="_blank">
								<b>Site da Escola Secund&aacuteria do Monte de Caparica</b>
								</a>
								<br>
								Informações sobre a escola, alunos, eventos escolares e muito mais!
								</span>
							</li>
							<li>
								<h4>Moodle da Escola</h4>
								<img class="left" src="images/site02.jpg" width="75" height="75" alt="Moodle da Escola Secundária do Monte de Caparica">
								<span>
								<a href="http://moodle.esec-monte-caparica.com/moodle/" target="_blank">
								<b>Moodle da Escola Secund&aacuteria do Monte de Caparica</b>
								</a>
								<br>
								Plantaforma Moodle da Escola Secund&aacuteria do Monte de Caparica para a comunidade escolar.
								</span>
							</li>
							<li>
								<h4>E-mail da Escola</h4>
								<img class="left" src="images/site03.jpg" width="75" height="75" alt="E-mail da Escola Secundária do Monte de Caparica">
								<span>
								<a href="mailto:esmonte@mail.telepac.pt">
								<b>esmonte@mail.telepac.pt</b>
								</a>
								<br>
								Se tiver qualquer d&uacutevida, pode contactar-nos atrav&ecircs do nosso e-mail.
								</span>
							</li>
							<li>
								<h4>Telefone e Fax da Escola</h4>
								<img class="left" src="images/site04.jpg" width="75" height="75" alt="Telefone e Fax da Escola">
								<span>
								<b>Telefone:</b>
								212946120
								<br>
								<b>Fax:</b>
								212946125
								</span>
							</li>
							<li class="last">
								<h4>Morada da Escola</h4>
								<img class="left" src="images/site05.jpg" width="75" height="75" alt="Rua Projectada V à Rua da Urraca - 2825-105 Monte de Caparica, Portugal">
								<span>
								<a href="http://maps.google.com/maps?q=Escola+Secund%C3%A1ria+do+Monte+de+Caparica,+Portugal&hl=pt-BR&ie=UTF8&ll=38.66214,-9.198335&spn=0.005806,0.011362&sll=73.596356,-94.573574&sspn=0.033595,0.181789&oq=Escola+Se&hq=Escola+Secund%C3%A1ria+do+Monte+de+Caparica,+Portugal&t=m&z=17" target="_blank">
								<b>Morada da Escola Secund&aacuteria do Monte de Caparica no Google Maps</b>
								</a>
								<br>
								Rua Projectada V &agrave Rua da Urraca - 2825-105 Monte de Caparica, Portugal
								</span>
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