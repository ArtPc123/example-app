@extends('website.index')

@section('conteudo')

		<div class="container">
			<div class="texto">
				<h1>Cadastro de Funcionários</h1>
			</div>
			
			<form>
				<div class='dados'>
					<label for='nome'>Nome do item</label><br>
					<input type='text' id='nome' name='nome' placeholder='Digite seu nome' required><br>

					<label for='cpf'>código do item</label><br>
					<input type='text' id='cpf' name='CPF' placeholder='Digite seu CPF' required><br>

					<label for='e-mail'>Posição do item (corredor e prateleira)</label><br>
					<input type='text' id='e-mail' name='e-mail' placeholder='Digite seu E-mail' required><br>
                <input type="submit" value="Enviar">	
			</form>
		</div>
@endsection

@push ('css')
		<link rel='Stylesheet' href='assets/css/stylesregistro.css'>
@endpush