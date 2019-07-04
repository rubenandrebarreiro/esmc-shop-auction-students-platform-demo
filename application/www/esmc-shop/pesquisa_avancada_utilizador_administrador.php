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
	<body>
		<?php
			if (!isset($_SESSION))
			{
				Session_start();
			}
			$nome_utilizador=$_SESSION["nome_utilizador"];
			$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
			$res1 = mysqli_query($con, "SELECT * from utilizadores where nome_utilizador='$nome_utilizador'");
			$row1 = mysqli_fetch_array($res1);
		?>
		<div id="outer">
			<div id="header">
				<div id="logo">
					<a href="index_administrador.php"><img src="images/logo.png" alt="ESMC Shop"></a>
				</div>
				<div id="nav">
					<ul>
						<li class="first">
							<a href="index_administrador.php">In&iacutecio</a>
						</li>
						<li>
							<a href="pesquisa_avancada_artigos_administrador.php">Pesquisa Avan&ccedilada</a>
						</li>
						<li>
							<a href="sobre_nos_administrador.php">Sobre N&oacutes</a>
						</li>
						<li class="last">
							<a href="contactos_administrador.php">Contactos e Links</a>
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
							<form name="pesquisa_rapida" method="POST" action="resultados_pesquisa_rapida_administrador.php">
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
						<h3>Introduza aqui os par&acirc;metros para pesquisar um utilizador</h3>
						<ul class="sectionList">
							<li>
								<form name="form_pesquisa_avancada_utilizador" method="post" action="resultado_pesquisa_avancada_utilizador_administrador.php">
									<b>Introduza os par&acirc;metros que achar necess&aacute;rios para a pesquisa:</b>
									<br>
									<br>
									<p>
										<label for="nome_utilizador" class="signup">Nome de Utilizador</label>
										<input type="text" class="inputBox2" name="nome_utilizador">
									</p>
									<p>
										<label for="nome_proprio" class="signup">Nome Pr&oacuteprio</label>
										<input type="text" class="inputBox2" name="nome_proprio">
									</p>
									<p>
										<label for="apelido" class="signup">Apelido</label>
										<input type="text" class="inputBox2" name="apelido">
									</p>
									<p>
										<label for="ano_escolaridade" class="signup">Ano de escolaridade que frequenta na escola</label>
										<select name="ano_escolaridade" class="inputBox2">
											<option value="">Seleccione o ano de escolaridade que frequenta</option>
											<option value="7">7&ordm ano</option>
											<option value="8">8&ordm ano</option>
											<option value="9">9&ordm ano</option>
											<option value="10">10&ordm ano</option>
											<option value="11">11&ordm ano</option>
											<option value="12">12&ordm ano</option>
										</select>
									</p>
									<p>
										<label for="turma" class="signup">Turma que frequenta na escola</label>
										<select name="turma" class="inputBox2">
											<option value="">Seleccione a turma que frequenta</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
											<option value="E">E</option>
											<option value="F">F</option>
											<option value="G">G</option>
											<option value="H">H</option>
											<option value="I">I</option>
											<option value="J">J</option>
											<option value="K">K</option>
											<option value="L">L</option>
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
							echo "<li type=square><a href='pesquisa_avancada_utilizador_administrador.php'>Pesquisa Avan&ccedil;ada de Utilizadores</a></li>";
							echo "</p>";
							echo "<p>";
							echo "<li type=square><a href='pesquisa_avancada_artigos_administrador.php'>Pesquisa Avan&ccedil;ada de Artigos</a></li>";
							echo "</p>";
							echo "<p>";
							echo "<li type=square><a href='actualiza_registo_administrador.php?nome_utilizador=" . $row1['nome_utilizador'] . "'>Alterar os meus dados</a></li>";
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