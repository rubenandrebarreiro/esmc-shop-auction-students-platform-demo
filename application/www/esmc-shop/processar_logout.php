<?php session_start();?>
<html>
	<head>
		<title>ESMC Shop - Aqui s&oacute n&atildeo encontra o que n&atildeo quer!</title>
	</head>
	<body>
		<?php
			if (!isset($_SESSION))
			{
				session_start();
				session_destroy();
				include("index.php");	
			}
			else
			{
				session_destroy();
				include("index.php");
			}
		?>
	</body>
</html>