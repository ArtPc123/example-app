@extends ('website.index')

		@section('conteudo')
		<img src='assets/images/image2.png' alt='Whouse'>

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
@endsection

@push('css')
<link rel='Stylesheet' href='assets/css/styleslogin.css'>
@endpush

