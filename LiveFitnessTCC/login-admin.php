<!DOCTYPE html>
<html>
<head>
	<title>Login - L!VE FITNESS</title>
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
		<h1 class="titulo-header">LOGIN ADMIN</h1>
    </header><br>
    
    <section class="container">
		<form method="POST" action="area-restrita-admin.php" class="form-container" id="login"><br>
			<label>E-mail</label>	
			<input type="email" name="email-login" placeholder="usuario@gmail.com">
			<br>
			<label>Senha</label>
			<input type="password" name="senha-login" placeholder="">
			<br>
            <button type="submit" class="botao">Enviar</button><br>

		</form>
    </section>
</body>
</html>