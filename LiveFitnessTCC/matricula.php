<!DOCTYPE html>
<html>
<head>
	<title>Matrícula - L!VE FITNESS</title>
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
		<form method="POST" action="bd/CRUD_clientes.php" class="form-container" id="matricula">
        <!--action="planos-cliente.php"-->
            <h1 class="form-titulo">Informações do Cliente</h1><br>
            <label>Informe seu nome</label>
            <input type="name" name="txtName" autofocus="">
            <br>
            <label>Informe seu e-mail</label>
            <input type="email" name="txtEmail" placeholder="usuario@email.com">
            <br>
            <label>Informe sua senha</label>
            <input type="password" name="txtSenha">
            <br>
            <label>Informe seu Endereço</label>
            <input type="text" name="txtEnd">
            <br>
            <label>Informe seu telefone ou celular</label>
            <input type="tel" name="txtTel">
            <br>
            <button type="submit" class="botao">Próximo >>></button>
            <a href="login.php" class="form-txt"><p>Já é um aluno?
            <br>Clique aqui para fazer login!</p></a>

            <input type="hidden" name="acao" value="criar_cli">
        </form>
    </section>
    <br><br>
</body>
</html>