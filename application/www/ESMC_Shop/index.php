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
		$lig=mysql_connect("localhost","root","") or die("Erro na conexão");
		mysql_select_db("esmc_shop",$lig) or die("Erro na escolha da Base de Dados (ESMC Shop)");
		$query1 = "SELECT * from artigos, licitacoes where artigos.id_artigo=licitacoes.id_artigo group by artigos.id_artigo order by count(licitacoes.id_licitacao) desc";
		$res1=mysql_query($query1);
		$query2 = "SELECT * from artigos order by id_artigo desc";
		$res2=mysql_query($query2);
	?>
		<div id="outer">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt="ESMC Shop"></a>
				</div>
				<div id="nav">
					<ul>
						<li class="first">
							<a href="index.php">In&iacutecio</a>
						</li>
						<li>
							<a href="pesquisa_avancada_artigos.html">Pesquisa Avan&ccedilada</a>
						</li>
						<li>
							<a href="sobre_nos.html">Sobre N&oacutes</a>
						</li>
						<li class="last">
							<a href="contactos.html">Contactos e Links</a>
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
							<form name="pesquisa_rapida" method="POST" action="resultados_pesquisa_rapida.php">
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
								&nbsp;
								<input name="Submit" type="submit" value="Pesquisar" class="inputButton_search">
							</form>
							<br>
						</div>
					</div>
					<div id="box2">
						<h3>Artigos em Destaque</h3>
						<ul class="sectionList">
						<?php
								$hora_actual_hh_1=date("H");
								$hora_actual_mm_1=date("i");
								$hora_actual_ss_1=date("s");
								$hora_actual_comp_1=$hora_actual_hh_1 . $hora_actual_mm_1 . $hora_actual_ss_1;
								$data_actual_dd_1=date("d");
								$data_actual_mm_1=date("m");
								$data_actual_aaaa_1=date("Y");
								$data_actual_comp_1=$data_actual_aaaa_1 . $data_actual_mm_1 . $data_actual_dd_1;
								$data_hora_actual_comp_1=$data_actual_comp_1 . $hora_actual_comp_1;
								if (mysql_num_rows($res1) == 0)
								{
									echo "<li>";
										echo "<h4>Ainda n&atilde;o existem artigos licitados em leil&atilde;o na nossa base de dados</h4>";
									echo "</li>";
								}
								else
								{	
									$cont1=1;
									while ($row1 = mysql_fetch_array ($res1))
									{
										if ($cont1 <= 4)
										{
											$hora_limite_1 = explode (':', $row1["hora_limite"]);
											$hora_limite_hh_1 =$hora_limite_1[0];
											$hora_limite_mm_1 =$hora_limite_1[1];
											$hora_limite_ss_1 =$hora_limite_1[2];
											$data_limite_1 = explode ('-', $row1["data_limite"]);
											$data_limite_dd_1 =$data_limite_1[2];
											$data_limite_mm_1 =$data_limite_1[1];
											$data_limite_aaaa_1 =$data_limite_1[0];
											$hora_limite_comp_1=$hora_limite_hh_1 . $hora_limite_mm_1 . $hora_limite_ss_1;
											$data_limite_comp_1=$data_limite_aaaa_1 . $data_limite_mm_1 . $data_limite_dd_1;									
											$data_hora_limite_comp_1=$data_limite_comp_1 . $hora_limite_comp_1;
											echo "<li>";
												echo "<h4>" . $row1['nome_artigo'] . "</h4>";
													echo "<img class='left' src='./imgs_leilao/" . $row1['foto_artigo'] . "' width='75' height='75'>";
													echo "<b>Descri&ccedil;&atilde;o do Artigo:</b>&nbsp;<i>" . $row1['descricao_artigo'] . "</i>";
													echo "<br>";
													echo "<b>Condi&ccedil;&atilde;o do Artigo:</b>&nbsp;" . $row1['condicao_artigo'];
													echo "<br>";
													if ($data_hora_limite_comp_1 > $data_hora_actual_comp_1)
													{
														echo "<b>Estado do Leil&atilde;o:</b>&nbsp;A Decorrer";
														echo "<br>";
														echo "<br>";
														echo "<a href='detalhes_artigo.php?id_artigo=" . $row1['id_artigo'] . "'>&raquo;&nbsp;Ver os detalhes deste artigo</a>";
													}
													if ($data_hora_limite_comp_1 <= $data_hora_actual_comp_1)
													{
														echo "<b>Estado do Leil&atilde;o:</b>&nbsp;Terminado";
														echo "<br>";
														echo "<br>";
														echo "<a href='detalhes_artigo.php?id_artigo=" . $row1['id_artigo'] . "'>&raquo;&nbsp;Ver os detalhes deste artigo</a>";
													}
											echo "</li>";
											$cont1=$cont1+1;
										}
										if ($cont1 > 4)
										{
	
										}
									}
								}
							?>
						</ul>
					</div>
					<div id="box3">
						<h3>Últimas Novidades</h3>
						<ul class="sectionList">
							<?php
								$hora_actual_hh_2=date("H");
								$hora_actual_mm_2=date("i");
								$hora_actual_ss_2=date("s");
								$hora_actual_comp_2=$hora_actual_hh_2 . $hora_actual_mm_2 . $hora_actual_ss_2;
								$data_actual_dd_2=date("d");
								$data_actual_mm_2=date("m");
								$data_actual_aaaa_2=date("Y");
								$data_actual_comp_2=$data_actual_aaaa_2 . $data_actual_mm_2 . $data_actual_dd_2;
								$data_hora_actual_comp_2=$data_actual_comp_2 . $hora_actual_comp_2;
								if (mysql_num_rows($res2) == 0)
								{
									echo "<li>";
										echo "<h4>Ainda n&atilde;o existem artigos em leil&atilde;o na nossa base de dados</h4>";
									echo "</li>";
								}
								else
								{	
									$cont2=1;
									while ($row2 = mysql_fetch_array ($res2))
									{
										if ($cont2 <= 4)
										{
											$hora_limite_2 = explode (':', $row2["hora_limite"]);
											$hora_limite_hh_2 =$hora_limite_2[0];
											$hora_limite_mm_2 =$hora_limite_2[1];
											$hora_limite_ss_2 =$hora_limite_2[2];
											$data_limite_2 = explode ('-', $row2["data_limite"]);
											$data_limite_dd_2 =$data_limite_2[2];
											$data_limite_mm_2 =$data_limite_2[1];
											$data_limite_aaaa_2 =$data_limite_2[0];
											$hora_limite_comp_2=$hora_limite_hh_2 . $hora_limite_mm_2 . $hora_limite_ss_2;
											$data_limite_comp_2=$data_limite_aaaa_2 . $data_limite_mm_2 . $data_limite_dd_2;									
											$data_hora_limite_comp_2=$data_limite_comp_2 . $hora_limite_comp_2;
											echo "<li>";
												echo "<h4>" . $row2['nome_artigo'] . "</h4>";
													echo "<img class='left' src='./imgs_leilao/" . $row2['foto_artigo'] . "' width='75' height='75'>";
													echo "<b>Descri&ccedil;&atilde;o do Artigo:</b>&nbsp;<i>" . $row2['descricao_artigo'] . "</i>";
													echo "<br>";
													echo "<b>Condi&ccedil;&atilde;o do Artigo:</b>&nbsp;" . $row2['condicao_artigo'];
													echo "<br>";
													if ($data_hora_limite_comp_2 > $data_hora_actual_comp_2)
													{
														echo "<b>Estado do Leil&atilde;o:</b>&nbsp;A Decorrer";
														echo "<br>";
														echo "<br>";
														echo "<a href='detalhes_artigo.php?id_artigo=" . $row2['id_artigo'] . "'>&raquo;&nbsp;Ver os detalhes deste artigo</a>";
													}
													if ($data_hora_limite_comp_2 <= $data_hora_actual_comp_2)
													{
														echo "<b>Estado do Leil&atilde;o:</b>&nbsp;Terminado";
														echo "<br>";
														echo "<br>";
														echo "<a href='detalhes_artigo.php?id_artigo=" . $row2['id_artigo'] . "'>&raquo;&nbsp;Ver os detalhes deste artigo</a>";
													}
											echo "</li>";
											$cont2=$cont2+1;
										}
										if ($cont2 > 4)
										{
	
										}
									}
								}
							?>
						</ul>
					</div>
				</div>
				<div id="sidebar">
					<h3>Inicie Sess&atildeo</h3>
					<div class="form">
						<form name="inicio_sessao" method="post" action="processar_login.php" id="login">
						<p>
							<label for="nome_utilizador" class="login">Nome de Utilizador</label> <input type="text" name="nome_utilizador" id="nome_utilizador" value="Nome de Utilizador" class="inputBox">
						</p>
						<p>
							<label for="password" class="login">Palavra-Passe</label> <input type="password" name="password" id="password" value="Palavra-Passe" class="inputBox">
						</p>
						<p>
							<input type="submit" name="login" value="Entrar" class="inputButton">
						</p>
						<br>
						<br>
						<br>
						<br>
						<p>
							<a href="registo.html">Ainda n&atildeo est&aacute registado? Registe-se!</a>
						</p>
						</form>
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
