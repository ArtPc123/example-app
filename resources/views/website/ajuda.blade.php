@extends('website.index')

@section('conteudo')
<h1 class="titulo">PERGUNTAS FREQUENTES</h1>
		<div class="caixas">
			<div class="p-login">
				<button>Problemas com o login <img src="assets/images/Rectangle 2.png" alt=""> </button>
				<p class="r-login">Para resolver problemas de login, verifique suas credenciais, limpe o cache do navegador e tente reiniciar o dispositivo. Se<br>persistir, considere redefinir sua senha ou entrar em contato com o suporte técnico.</p>
			</div>
			<div class="p-materiais">
				<button>Problemas com os materiais <img src="assets/images/Rectangle 2.png" alt=""></button>
				<p class="r-materiais">Em caso de problema no cadastro dos materiais, reinicie o site e tente realiza-lo novamente, se o erro persistir procure o suporte técnico. Caso o problema seja com a perca de localização você deverá pedir suporte ao IA, se mesmo assim não resolver entre em contato com a empresa.</p>
			</div>
			<div class="p-I-A">
				<button>Problemas com a inteligência artificial <img src="assets/images/Rectangle 2.png" alt=""></button>
				<p class="r-I-A">Se houver qualquer defeito com o uso da Inteligencia Artificial, primeiramente reinicie a página, feche e abra o sistema novamente ou refaça o login, se mesmo após realizar esses procedimentos o defeito persistir procure o suporte técnico da IA.</p>
			</div>
			<div class="p-acesso">
				<button>Estou cadastrado mas continuo sem acesso <img src="assets/images/Rectangle 2.png" alt=""></button>
				<p class="r-acesso">Caso esteja cadastrado e não conseguir acessar sua conta, tente redefinir sua senha ou tente entrar em outro dispositivo. Se o problema persistir, entre em contato com o suporte ao cliente para assistência personalizada.</p>
			</div>
		</div>
@endsection


@push('css')
<link rel='Stylesheet' href='assets/css/stylesajuda.css'>
@endpush
