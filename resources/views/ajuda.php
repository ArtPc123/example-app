<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='Stylesheet' href='estilos/stylesajuda.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
	<title>Ajuda</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		$(".p-login").hover(function(){
		$(".r-login").toggle(300,"swing");
		});
		});
		$(document).ready(function(){
		$(".p-materiais").hover(function(){
		$(".r-materiais").toggle(300,"swing");
		});
		});
		$(document).ready(function(){
		$(".p-I-A").hover(function(){
		$(".r-I-A").toggle(300,"swing");
		});
		});
		$(document).ready(function(){
		$(".p-acesso").hover(function(){
		$(".r-acesso").toggle(300,"swing");
		});
		});
	</script>
</head>
<body>
	<header>
		<nav>
			<a class="logo" href="#">InvenTech</a>
			<ul class="nav-list">
				<li><a href="index.html">Inicio</a></li>
				<li><a href="sobre.html">Sobre</a></li>
				<li><a href="ia.html">IA</a></li>
				<li><a href="ajuda.html">Ajuda</a></li>
				<div class="login"><a href="login.html">Login</a></div>
			</ul>
		</nav>
	</header>
	<main>
		<h1 class="titulo">PERGUNTAS FREQUENTES</h1>
		<div class="caixas">
			<div class="p-login">
				<button>Problemas com o login <img src="/images/Rectangle 2.png" alt=""> </button>
				<p class="r-login">Para resolver problemas de login, verifique suas credenciais, limpe o cache do navegador e tente reiniciar o dispositivo. Se<br>persistir, considere redefinir sua senha ou entrar em contato com o suporte técnico.</p>
			</div>
			<div class="p-materiais">
				<button>Problemas com os materiais <img src="/images/Rectangle 2.png" alt=""></button>
				<p class="r-materiais">Em caso de problema no cadastro dos materiais, reinicie o site e tente realiza-lo novamente, se o erro persistir procure o suporte técnico. Caso o problema seja com a perca de localização você deverá pedir suporte ao IA, se mesmo assim não resolver entre em contato com a empresa.</p>
			</div>
			<div class="p-I-A">
				<button>Problemas com a inteligência artificial <img src="/images/Rectangle 2.png" alt=""></button>
				<p class="r-I-A">Se houver qualquer defeito com o uso da Inteligencia Artificial, primeiramente reinicie a página, feche e abra o sistema novamente ou refaça o login, se mesmo após realizar esses procedimentos o defeito persistir procure o suporte técnico da IA.</p>
			</div>
			<div class="p-acesso">
				<button>Estou cadastrado mas continuo sem acesso <img src="/images/Rectangle 2.png" alt=""></button>
				<p class="r-acesso">Caso esteja cadastrado e não conseguir acessar sua conta, tente redefinir sua senha ou tente entrar em outro dispositivo. Se o problema persistir, entre em contato com o suporte ao cliente para assistência personalizada.</p>
			</div>
		</div>
	</main>
</body>
</html>

			
				

	