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
			$id_artigo=$_GET["id_artigo"];
			$lig=mysql_connect("localhost","root","") or die("Erro na conexão");
			mysql_select_db("esmc_shop",$lig) or die("Erro na escolha da Base de Dados (ESMC Shop)");
			$query2 = "SELECT * from licitacoes where id_artigo='$id_artigo'";
			$res2=mysql_query($query2);
			$num_rows2 = mysql_num_rows($res2);
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
					<div id="box4">
						<h3>Hist&oacute;rico de Licita&ccedil;&otilde;es deste artigo</h3>
						<ul class='sectionList'>
							<?php
								if (mysql_num_rows($res2) == 0)
								{
									echo "<li>";
										echo "<h4>N&atilde;o existem ainda licita&ccedil;&otilde;es por este artigo</h4>";
									echo "</li>";
								}
								else
								{
									echo "<li>";
										echo "<table border='0' cellspacing='14' bgcolor='black' align='center' width=740>";
										echo "<tr>";
											echo "<td align='center' bgcolor='#C5C5C5'><font color='black'><b>Nome de Utilizador</b></font></td>";
											echo "<td align='center' bgcolor='#C5C5C5'><font color='black'><b>Valor da Licita&ccedil;&atilde;o</b></font></td>";
											echo "<td align='center' bgcolor='#C5C5C5'><font color='black'><b>Hora da Licita&ccedil;&atilde;o</b></font></td>";
											echo "<td align='center' bgcolor='#C5C5C5'><font color='black'><b>Data da Licita&ccedil;&atilde;o</b></font></td>";
										echo "</tr>";
										while ($row2 = mysql_fetch_array ($res2))
										{	
											$valor_licitacao = explode ('.', $row2["valor_licitacao"]);
											$valor_licitacao_ee = $valor_licitacao[0];
											$valor_licitacao_cc = $valor_licitacao[1];
											$hora_licitacao = explode (':', $row2["hora_licitacao"]);
											$hora_licitacao_hh =$hora_licitacao[0];
											$hora_licitacao_mm =$hora_licitacao[1];
											$hora_licitacao_ss =$hora_licitacao[2];
											$data_licitacao = explode ('-', $row2["data_licitacao"]);
											$data_licitacao_dd =$data_licitacao[2];
											$data_licitacao_mm =$data_licitacao[1];
											$data_licitacao_aaaa =$data_licitacao[0];
											echo "<tr>";
												echo "<td align='center' bgcolor='#C5C5C5'><font color='black'>" . $row2["nome_utilizador"] . "</font></td>";
												echo "<td align='center' bgcolor='#C5C5C5'><font color='black'>" . $valor_licitacao_ee . "," . $valor_licitacao_cc . "&nbsp;&euro;</font></td>";
												echo "<td align='center' bgcolor='#C5C5C5'><font color='black'>" . $hora_licitacao_hh . ":" . $hora_licitacao_mm . ":" . $hora_licitacao_ss . "</font></td>";
												echo "<td align='center' bgcolor='#C5C5C5'><font color='black'>" . $data_licitacao_dd . "/" . $data_licitacao_mm . "/" . $data_licitacao_aaaa . "</font></td>";
											echo "</tr>";
										}
										echo "</table>";
									echo "</li>";
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