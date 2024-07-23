@extends('website.index')

@section('conteudo')

		<div class="container">
			<div class="texto">
				<h1>Cadastro de Funcionários</h1>
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

				</div>
                <input type="submit" value="Enviar">	
			</form>
		</div>
@endsection

@push ('css')
		<link rel='Stylesheet' href='assets/css/stylesregistro.css'>
@endpush