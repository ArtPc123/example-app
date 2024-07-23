@extends('website.index')

@section('conteudo')
		<div class="texto">
			<h1 class='titulo'>Sobre nós</h1>
			<p>Nossa empresa criou esse sistema com<br>
			<span>Inteligencia Artificial</span> para que seja ágil e fácil<br>
			para os trabalhadores encontrarem o que<br>
			buscam, como também <span>diminuir o tempo que é<br>
			gasto dentro do almoxarifado.</span>  Além de<br>
			reposição de estoque e <span>compras automáticas</span><br>
			sendo autorizadas pelo financeiro da empresa.</p>
			<p>Desta forma geramos um <span>apoio ao financeiro</span> e<br>
			aos trabalhadores, fazendo com que assim não<br>
			fosse necessário adquirir mais um funcionário.</p>
		</div>
		<img class='imagem' src='assets/images/image3.png' alt='manwithbox'>
@endsection

@push('css')
<link rel='Stylesheet' href='assets/css/stylessobre.css'>
@endpush
