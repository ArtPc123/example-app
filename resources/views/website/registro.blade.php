@extends('website.index')

@section('conteudo')
		<img src='assets/images/image6.png' alt='men'>

		<div class="container">
			<div class="texto">
				<h1>Cadastre-se</h1>
				<h2>Realize o cadastro para ter acesso a nossos recursos</h1>
			</div>
			
			<form>
				<div class='dados'>
					<label for='nome'>Nome</label><br>
					<input type='text' id='nome' name='nome' placeholder='Digite seu nome' required><br>

					<label for='cpf'>CPF</label><br>
					<input type='text' id='cpf' name='CPF' placeholder='Digite seu CPF' required><br>

					<label for='e-mail'>E-mail</label><br>
					<input type='text' id='e-mail' name='e-mail' placeholder='Digite seu E-mail' required><br>
				</div>
				<div class='senha'>							
					<label for='senha'>Senha</label><br>
					<input type='password' id='senha' name='senha' placeholder='Digite sua senha' required><br>

					<label for='confir-senha'>Confirmar Senha</label><br>
					<input type='password' id='confir-senha' name='senha' placeholder='Confirme sua senha' required><br>
				</div>	
				<div class='lembrar'>	
					<input type='checkbox' id='lembrar' name='lembrar'>
					<label for='lembrar'>Lembrar seu login</label>
				</div>
			</form>
	
			<button><a href="indexlog.html">Login</a></button><br>
			<h2 class="conta">Já possui uma conta?<a href="login.html"> Fazer Login</a></h2>
		</div>
@endsection

@push ('css')
		<link rel='Stylesheet' href='assets/css/stylesregistro.css'>
@endpush