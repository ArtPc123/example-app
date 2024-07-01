<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel='Stylesheet' href='estilos/styleslogin.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
</head>
<body>
	<header>
        <nav>
            <a class="logo" href="#">InvenTech</a>
            <ul class="nav-list">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="ia.html">IA</a></li>
                <li><a href="ajudalog.html">Ajuda</a></li>
                <div class="login"><a href="login.html">Login</a></div>
            </ul>
        </nav>
    </header>
	<main>
		<img src='images/image2.png' alt='Whouse'>

		<div class="container">
			<div class="texto">
				<h1>Bem Vindo!</h1>
				<h2>Insira seus dados para entrar</h1>
			</div>
			
			<form>
				<div class='cpf'>
					<label for='cpf'>CPF</label><br>
					<input type='text' id='cpf' name='CPF' placeholder='Digite seu CPF' required><br>
				</div>
				<div class='senha'>							
					<label for='senha'>Senha</label><br>
					<input type='password' id='senha' name='senha' placeholder='Digite sua senha' required><br>
				</div>	
				<div class='lembrar'>	
					<input type='checkbox' id='lembrar' name='lembrar'>
					<label for='lembrar'>Lembrar seu login</label>
				</div>
			</form>
	
			<button><a href="indexlog.html">Login</a></button><br>
			<h2 class="cadastro">Não possui cadastro?<a href="registro.html"> Cadastre-se</a></h2>
		</div>

	</main>
</body>
</html>
