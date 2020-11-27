<!DOCTYPE html>
<html>
<head>
	<title>Informações de Pagamento - L!VE FITNESS</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" >

	<!----- Fontes ----->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!----- CSS ----->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
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
		<form method="POST" action="matricula-concluida.php" class="form-container" id="matricula">
            <h1 class="form-titulo">Informações de pagamento</h1><br>
            <div id="imagens-cartoes">
                <img src="img/images_form/visa.jpg">
                <img src="img/images_form/elo.png">
                <img src="img/images_form/mastercard.png">
            </div><br>
            <label>Número do Cartão</label>
            <input type="text" name="nome-cartao" placeholder="0000 0000 0000 0000">
            <br>
            <label>Nome do Titular</label>
            <div class="form-nome-sobrenome">
                <input type="name" name="titular-nome" placeholder="Nome">
                <input type="name" name="titular-sobrenome" placeholder="Sobrenome">
            </div>
            
            <br>
            <label>Vencimento</label>
            <input type="date" name="venc-cartao">
            <br>
            <label>Código de Segurança (CVV)</label>
            <input type="number" name="cvv-cartao" placeholder="000">
            <br>
            <button type="submit" class="botao">Próximo >></button><br>
        </form>
    </section>
    <br><br>
</body>
</html>