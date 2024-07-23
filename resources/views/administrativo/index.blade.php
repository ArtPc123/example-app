<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@stack('css')
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
	<title>admin</title>
</head>

<body>
<header>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="indexlog.php">InvenTech ADM</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Funcionários<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="clientes_listar.php">Lista</a></li>
                            <li><a href="clientes_cadastro.php">Cadastro</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Itens<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="filmes_listar.php">Lista</a></li>
                            <li><a href="filmes_cadastro.php">Cadastro</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="usuario_listar.php">Lista</a></li>
                            <li><a href="registrar.php">Cadastro</a></li>
                        </ul>
                    </li>
					 <li>
                        <a href="login.php">Login<span class="caret"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

	<main>
		@yield('conteudo')
	</main>
</body>

</html>