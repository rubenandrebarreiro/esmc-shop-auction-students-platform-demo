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
				$_SESSION["nome_utilizador"]=$_GET["nome_utilizador"];
			}
			$nome_utilizador=$_GET["nome_utilizador"];
			$con = mysqli_connect("localhost","root","","esmc_shop") or die("Erro na conexão");
			$res1 = mysqli_query($con, "SELECT * from utilizadores where nome_utilizador='" . $_SESSION["nome_utilizador"] . "'");
			$row1 = mysqli_fetch_array($res1);
			$res2 = mysqli_query($con, "SELECT * from artigos, utilizadores, categorias where artigos.nome_utilizador='$nome_utilizador' and artigos.nome_utilizador=utilizadores.nome_utilizador and categorias.id_categoria=artigos.id_categoria");
			$num_rows2 = mysqli_num_rows($res2);
			$res3 = mysqli_query($con, "SELECT * from artigos, licitacoes where licitacoes.nome_utilizador='$nome_utilizador' and artigos.id_artigo=licitacoes.id_artigo group by licitacoes.id_artigo");
			$num_rows3 = mysqli_num_rows($res3);
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
					<div id="box2">
						<h3>Os meus artigos em leil&atilde;o</h3>
						<ul class="sectionList">
							<?php
								$hora_actual_hh=date("H");
								$hora_actual_mm=date("i");
								$hora_actual_ss=date("s");
								$hora_actual_comp=$hora_actual_hh . $hora_actual_mm . $hora_actual_ss;
								$data_actual_dd=date("d");
								$data_actual_mm=date("m");
								$data_actual_aaaa=date("Y");
								$data_actual_comp=$data_actual_aaaa . $data_actual_mm . $data_actual_dd;
								$data_hora_actual_comp=$data_actual_comp . $hora_actual_comp;
								if (mysqli_num_rows($res2) == 0)
								{
									echo "<li>";
										echo "<h4>N&atilde;o tem artigos para leiloar adicionados</h4>";
									echo "</li>";
								}
								else
								{
									while ($row2 = mysqli_fetch_array ($res2))
									{	
										$hora_limite = explode (':', $row2["hora_limite"]);
										$hora_limite_hh =$hora_limite[0];
										$hora_limite_mm =$hora_limite[1];
										$hora_limite_ss =$hora_limite[2];
										$data_limite = explode ('-', $row2["data_limite"]);
										$data_limite_dd =$data_limite[2];
										$data_limite_mm =$data_limite[1];
										$data_limite_aaaa =$data_limite[0];
										$hora_limite_comp=$hora_limite_hh . $hora_limite_mm . $hora_limite_ss;
										$data_limite_comp=$data_limite_aaaa . $data_limite_mm . $data_limite_dd;									
										$data_hora_limite_comp=$data_limite_comp . $hora_limite_comp;
										echo "<li>";
											echo "<h4>" . $row2['nome_artigo'] . "</h4>";
											echo "<img class='left' src='./imgs_leilao/" . $row2['foto_artigo'] . "' width='75' height='75'>";
											echo "<b>Descri&ccedil;&atilde;o do Artigo:</b>&nbsp;<i>" . $row2['descricao_artigo'] . "</i>";
											echo "<br>";
											echo "<b>Condi&ccedil;&atilde;o do Artigo:</b>&nbsp;" . $row2['condicao_artigo'];
											echo "<br>";
											if ($data_hora_limite_comp > $data_hora_actual_comp)
											{
												echo "<b>Estado do Leil&atilde;o:</b>&nbsp;A Decorrer";
												echo "<br>";
												echo "<br>";
												echo "<a href='detalhes_artigo_utilizador.php?id_artigo=" . $row2['id_artigo'] . "'>&raquo;&nbsp;Ver os detalhes deste artigo</a>";
												
											}
											if ($data_hora_limite_comp <= $data_hora_actual_comp)
											{
												echo "<b>Estado do Leil&atilde;o:</b>&nbsp;Terminado";
												echo "<br>";
												echo "<br>";
												echo "<a href='detalhes_artigo_utilizador.php?id_artigo=" . $row2['id_artigo'] . "'>&raquo;&nbsp;Ver os detalhes deste artigo</a>";
											}
										echo "</li>";
									}
								}
							?>
						</ul>
					</div>
					<div id="box2">
						<h3>Os artigos que estou a seguir</h3>
						<ul class="sectionList">
						<?php
							$hora_actual_hh=date("H");
							$hora_actual_mm=date("i");
							$hora_actual_ss=date("s");
							$hora_actual_comp=$hora_actual_hh . $hora_actual_mm . $hora_actual_ss;
							$data_actual_dd=date("d");
							$data_actual_mm=date("m");
							$data_actual_aaaa=date("Y");
							$data_actual_comp=$data_actual_aaaa . $data_actual_mm . $data_actual_dd;
							$data_hora_actual_comp=$data_actual_comp . $hora_actual_comp;
							if (mysqli_num_rows($res3) == 0)
							{	
								echo "<li>";
									echo "<h4>Neste momento n&atilde;o est&aacute; a seguir nenhum artigo em leil&atilde;o</h4>";
								echo "</li>";
							}
							else
							{
								while ($row3 = mysql_fetch_array ($res3))
								{	
									$hora_limite = explode (':', $row3["hora_limite"]);
									$hora_limite_hh =$hora_limite[0];
									$hora_limite_mm =$hora_limite[1];
									$hora_limite_ss =$hora_limite[2];
									$data_limite = explode ('-', $row3["data_limite"]);
									$data_limite_dd =$data_limite[2];
									$data_limite_mm =$data_limite[1];
									$data_limite_aaaa =$data_limite[0];
									$hora_limite_comp=$hora_limite_hh . $hora_limite_mm . $hora_limite_ss;
									$data_limite_comp=$data_limite_aaaa . $data_limite_mm . $data_limite_dd;									
									$data_hora_limite_comp=$data_limite_comp . $hora_limite_comp;
									echo "<li>";
									echo "<h4>" . $row3['nome_artigo'] . "</h4>";
										echo "<img class='left' src='./imgs_leilao/" . $row3['foto_artigo'] . "' width='75' height='75'>";
										echo "<b>Descri&ccedil;&atilde;o do Artigo:</b>&nbsp;<i>" . $row3['descricao_artigo'] . "</i>";
										echo "<br>";
										echo "<b>Condi&ccedil;&atilde;o do Artigo:</b>&nbsp;" . $row3['condicao_artigo'];
										echo "<br>";
										if ($data_hora_limite_comp > $data_hora_actual_comp)
										{
											echo "<b>Estado do Leil&atilde;o:</b>&nbsp;A Decorrer";
											echo "<br>";
											echo "<br>";
											echo "<a href='detalhes_artigo_utilizador.php?id_artigo=" . $row3['id_artigo'] . "'>&raquo;&nbsp;Ver os detalhes deste artigo</a>";
										}
										if ($data_hora_limite_comp <= $data_hora_actual_comp)
										{
											echo "<b>Estado do Leil&atilde;o:</b>&nbsp;Terminado";
											echo "<br>";
											echo "<br>";
											echo "<a href='detalhes_artigo_utilizador.php?id_artigo=" . $row3['id_artigo'] . "'>&raquo;&nbsp;Ver os detalhes deste artigo</a>";
										}
									echo "</li>";
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