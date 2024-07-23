<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@stack('css')
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
	<title>Ajuda</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			$(".p-login").hover(function () {
				$(".r-login").toggle(300, "swing");
			});
		});
		$(document).ready(function () {
			$(".p-materiais").hover(function () {
				$(".r-materiais").toggle(300, "swing");
			});
		});
		$(document).ready(function () {
			$(".p-I-A").hover(function () {
				$(".r-I-A").toggle(300, "swing");
			});
		});
		$(document).ready(function () {
			$(".p-acesso").hover(function () {
				$(".r-acesso").toggle(300, "swing");
			});
		});
	</script>
</head>

<body>
	<header>
		<nav>
			<a class="logo" href="#">InvenTech</a>
			<ul class="nav-list">
				<li><a href="/">Inicio</a></li>
				<li><a href="/sobre">Sobre</a></li>
				<li><a href="/ia">IA</a></li>
				<li><a href="/ajuda">Ajuda</a></li>
				<li class="login"><a href="/login">Login</a></li>
			</ul>
		</nav>

	</header>
	<main>
		@yield('conteudo')
	</main>
</body>

</html>