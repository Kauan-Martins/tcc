<?php 
    /*include 'bd/cliente.php';
    $cliente = set_cliente($_POST["txtName"]);*/
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Informações do Cliente - L!VE FITNESS</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" >

	<!----- Fontes ----->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!----- CSS ----->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="script/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="script/script.js"></script>
</head>
<body>
    <header class="header">
		<a href="" class="menu-icon"><img src="img/Images_header/menu.svg" ></a>
		<a href="index.php" id="logo"><img src="img/Images_header/logotipo.svg" ></a>
		<a href="https://www.instagram.com/livefitness85/" class="sociais"><img src="img/Images_header/instagram.svg" ></a>
		<a href="https://www.facebook.com/Academia-Live-Fitness-568634870165470" class="sociais"><img src="img/Images_header/facebook.svg" ></a>
		<a href="login.php" class="user"><img src="img/Images_header/user.svg" ></a>
		<h1 class="titulo-header">MATRÍCULA</h1>
    </header><br>
    
    <section class="container">
		<form method="POST" action="pagamento-cliente.php" class="form-container" id="matricula">
            <h1 class="form-titulo">Detalhes da Compra</h1>
            <!--label><?php //echo "Olá" .$nome; ?></label--><br>
            <label>ESCOLHA SEU PLANO:</label>
            <select id="select" name="select" required="">
                <option value="">Selecione aqui o seu Plano</option>
                  <option value="musc-men" required="">Plano de Musculação MENSAL</option> 
                  <option value="musc-tri" > Plano de Musculação TRIMESTRAL</option>
                  <option value="musc-sem"> Plano de Musculação SEMESTRAL</option>
                  <option value="musc-anual"> Plano de Musculação ANUAL</option> 
                  <option value="familia" >Plano Família</option>
                  <option value="especial1">Horário Especial - 11:00 ás 15:00</option>
                  <option value="especial2">Horário Especial - 11:00 ás 17:00</option>
            </select>
            <br>
            <label>PREÇO:</label>
            <div id="planos">
                <div id="musc-men">
                    <p class="texto-preco">R$75,00</p>
                </div>
                <div id="musc-tri">
                    <p class="texto-preco">2x R$85,00</p>
                </div>
                <div id="musc-sem">
                    <p class="texto-preco">3x R$115,00</p>
                </div>
                <div id="musc-anual">
                    <p class="texto-preco">12x R$50,00</p>
                </div>
                <div id="familia">
                    <p class="texto-preco">R$50,00</p>
                </div>
                <div id="especial1">
                    <p class="texto-preco">R$35,00</p>
                </div>
                <div id="especial2">
                    <p class="texto-preco">R$40,00</p>
                </div>
            </div><br>
            <button type="submit" class="botao">Próximo >></button><br>
        </form>
    </section>
    <br><br>
</body>
</html>