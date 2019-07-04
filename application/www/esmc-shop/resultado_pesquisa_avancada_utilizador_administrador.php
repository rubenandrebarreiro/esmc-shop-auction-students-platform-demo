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
			
			$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
			
			$res1 = mysqli_query($con, "SELECT * from utilizadores where nome_utilizador='" . $_SESSION["nome_utilizador"] . "'");
			$row1 = mysqli_fetch_array($res1);
			
			$nome_utilizador=$_POST["nome_utilizador"];
			$nome_proprio=$_POST["nome_proprio"];
			$apelido=$_POST["apelido"];
			$ano_escolaridade=$_POST["ano_escolaridade"];
			$turma=$_POST["turma"];
			
			$res2 = mysqli_query($con, "SELECT * from utilizadores where turma like '%$turma%' and ano like '%$ano_escolaridade%' and apelido like '%$apelido%' and nome_proprio like '%$nome_proprio%' and nome_utilizador like '%$nome_utilizador%'");
			$num_rows2 = mysqli_num_rows($res2);
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
						<h3>Os resultados da minha pesquisa avan&ccedil;ada de utilizadores</h3>
						<ul class="sectionList">
							<?php
								if (mysqli_num_rows($res2) == 0)
								{
									echo "<li>";
										echo "<h4>N&atilde;o foram encontrados utilizadores para a sua pesquisa avan&ccedil;ada de utilizadores</h4>";
									echo "</li>";
								}
								else
								{
									while ($row2 = mysqli_fetch_array ($res2))
									{	
										if ($row2['nome_utilizador'] == 'Administrador')
										{
										}
										else
										{
											echo "<li>";
												echo "<h4>" . $row2['nome_utilizador'] . "</h4>";
												echo "<br>";
												echo "<b>Nome Pr&oacute;prio:</b>&nbsp;<i>" . $row2['nome_proprio'] . "</i>";
												echo "<br>";
												echo "<b>Apelido:</b>&nbsp;<i>" . $row2['apelido'] . "</i>";
												echo "<br>";
												echo "<b>Sexo:</b>&nbsp;" . $row2['sexo'];
												echo "<br>";
												echo "<b>Ano/Turma:</b>&nbsp;" . $row2['ano'] . "&deg;" . $row2['turma'];
												echo "<br>";
												echo "<b>Telefone:</b>&nbsp;" . $row2['telefone'];
												echo "<br>";
												echo "<b>E-mail:</b>&nbsp;" . $row2['email'];
												echo "<br>";
												$data_nasc = explode ('-', $row2["data_nasc"]);
												$data_nasc_dd =$data_nasc[2];
												$data_nasc_mm =$data_nasc[1];
												$data_nasc_aaaa =$data_nasc[0];
												echo "<b>Data de Nascimento:</b>&nbsp;" . $data_nasc_dd . "/" . $data_nasc_mm . "/" . $data_nasc_aaaa;
												echo "<br>";
												echo "<br>";
												echo "<a href='remover_utilizador_administrador.php?nome_utilizador=" . $row2['nome_utilizador'] . "'>&raquo;&nbsp;Eliminar este utilizador</a>";
											echo "</li>";
										}
									}
								}
							?>
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