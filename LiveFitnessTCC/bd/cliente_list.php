
<!DOCTYPE html>
<html>
<head>
	<title>Controle de Alunos - Live Fitness admin</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>
    <header class="header">
		<a href="" class="menu-icon"><img src="../img/Images_header/menu.svg" ></a>
		<a href="index.php" id="logo"><img src="../img/Images_header/logotipo.svg" ></a>
		<a href="https://www.instagram.com/livefitness85/" class="sociais"><img src="../img/Images_header/instagram.svg" ></a>
		<a href="https://www.facebook.com/Academia-Live-Fitness-568634870165470" class="sociais"><img src="../img/Images_header/facebook.svg" ></a>
		<a href="login.php" class="user"><img src="../img/Images_header/user.svg" ></a>
		<h1 class="titulo-header">GERENCIAR MATRÍCULA</h1>
    </header><br>
    <section class="container">
    	<h1 class="">Alunos</h1>
    	<table class="table" border="1">
			<th>Matrícula</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Endereço</th>
			<th>Telefone</th>
			<th>Ação</th>

			<?php 
				include 'Dao.php';
				$dao = new Dao();
				$clientes = $dao->get_all();
				foreach ($clientes as $cliente) 
				{
					echo "<tr>";
						echo "<td>";
							echo $cliente["cli_matric"];
						echo "</td>";

						echo "<td>";
							echo $cliente["cli_nome"];
						echo "</td>";

						echo "<td>";
							echo $cliente["cli_email"];
						echo "</td>";

						echo "<td>";
							echo $cliente["cli_endereco"];
						echo "</td>";	

						echo "<td>";
							echo $cliente["cli_tel"];
						echo "</td>";									

						echo "<td>";
							echo "<a href='cliente_edit.php?cli_matric=" . $cliente["cli_matric"] . "'>Editar</a> | ";
							echo "<a href='cliente_delete.php?cli_matric=" . $cliente["cli_matric"] . "'>Excluir</a>";
						echo "</td>";
					echo "</tr>";					
				}
			?>
		</table><br>	
		<a href="../matricula.php"><button type="submit" class="botao" style="width: 190px; margin: 0 auto">Criar uma nova conta</button></a>	
    </section>
</body>
</html>