@extends('.site.template.cabecalho')
@section('cabecalho')
<div class="container TutoriaisMain">
	<div class="Title">
		@forelse($noticias as $news)
		<h1>{{$news->titulo}}</h1>
		<p>
			<i class="fa fa-user" aria-hidden="true">: Miqueias</i> 

			<i class="fa fa-calendar-check-o" aria-hidden="true">{{$news->data}}</i>

			<i class="fa fa-clock-o" aria-hidden="true">12:13</i>
		</p>	
	</div>
	<div class="videoImage">
		<iframe src="https://www.youtube.com/embed/keSDOp6ZaOA" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="container textTutorial">
		<p>
			Se tem uma coisa que é defendida nos videos e artigos do Me Poupe! é o uso da criatividade e a aplicação da palavra SUSTENTABILIDADE num sentido mais amplo da palavra. Ser sustentável não é apenas usar madeira de reflorestamento, separar os recicláveis do lixo orgânico ou abrir mão das sacolas de plástico no supermercado. Quando falamos de sustentabilidade na vida financeira estamos nos referindo explicitamente à nossa capacidade de fazer mais com menos e, dessa forma, fazer sobrar dinheiro no final do mês utilizando o minimo de recursos possível através de uma decoração com reciclagem.
		</p>
	</div>
</div>
@empty
<h1>Desculpa Nenhuma Noticia Encontrada!</h1>
@endforelse
@endsection