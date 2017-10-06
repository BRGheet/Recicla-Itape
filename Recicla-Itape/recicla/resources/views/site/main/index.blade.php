@extends('.site.template.cabecalho')
@section('cabecalho')
<!-- Carousel -->
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
	<div class="overlay" id="carousel"></div>
	<ol class="carousel-indicators">
		<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#bs-carousel" data-slide-to="1"></li>
		<li data-target="#bs-carousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">
		<div class="item slides active">
			<div class="slide-1"></div>
			<div class="hero">
				<hgroup>
					<h1>Recicle seu Lixo</h1>        
					<h3>Ajude o Meio Ambiente</h3>
				</hgroup>
				<a href="/reciclar"><button class="btn btn-hero btn-lg" role="button">Procure No Mapa</button></a>
			</div>
		</div>
		<div class="item slides">
			<div class="slide-2"></div>
			<div class="hero">        
				<hgroup>
					<h1>Lixo no Lixo</h1>        
					<h3>Ganhe Recompensas</h3>
				</hgroup>       
				<button class="btn btn-hero btn-lg" role="button">Veja Agora</button>
			</div>
		</div>

		<div class="item slides">
			<div class="slide-3"></div>
			<div class="hero">        
				<hgroup>
					<h1>Tutoriais sobre reciclagem</h1>        
					<h3>Aprenda a Reciclar</h3>
				</hgroup>
				<a href="#Tutoriais"><button class="btn btn-hero btn-lg" role="button">Clique Aqui</button></a>
			</div>
		</div>
	</div>
</div> 


<!-- Tutoriais Reciclagem -->


<header id="box1" class="container-fluid box1">
	<div class="container">
		<div class="titulo">
			<h1 id="Tutoriais">Tutoriais sobre a reciclagem</h1>
			<p>Aprenda a reciclar de forma correta!</p>
		</div>
		@forelse($tutoriais as $tuto)
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail" style="background-image:url('img/tutoriais/{{$tuto->img}}');">
					</div>
					<div class="caption">
						<h3>{{$tuto->titulo}}.</h3>
						<p>{{$tuto->resumo}}</p>
						<p><a href="/tutoriais/{{$tuto->id}}" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>
			@empty
			<p style="text-align: center; font-size: 1.5em;">Nenhum Tutorial Encontrado</p>
		
		@endforelse
		<div class="col-md-12 paginacao">
			{!!  $tutoriais->links() !!}
		</div>
<!-- 	

			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail2">
			
					</div>
					<div class="caption">
						<h3>Lixo Organico</h3>
						<p>Reciclar, diminuir e transformar o seu próprio lixo doméstico ou da empresa em que trabalha são algumas das sugestões feitas à população pela campanha lançada pela Prefeitura de Curitiba. Todas as peças publicitárias têm o terapeuta Dr.Sigmundo como protagonista. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail3">
		
					</div>
					<div class="caption">
						<h3>Como Reciclar</h3>
						<p>A reciclagem é um meio de assegurar que os itens que terminamos de utilizar voltem para a pilha de recursos que poderão ser utilizados novamente ao serem transformados em alguma outra coisa ou simplesmente limpos e reutilizados. A reciclagem ajuda a conservar matérias-primas e muitas vezes também ajuda a economizar energia que seria utilizada por fabricantes para produzir novos produtos do zero.</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>


			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail4">
				
					</div>
					<div class="caption">
						<h3>Separação do lixo</h3>
						<p>As empresas comprometidas com o desenvolvimento sustentável adotam conceitos como otimização de recursos, redução de desperdício, tecnologia, conhecimento, bom senso e responsabilidade na adoção de boas práticas ambientais.Dessa forma, a separação do lixo se enquadra nessas práticas com a possibilidade de reutilizar, reciclar, agregar valor ao material reciclado, aumentar o tempo de vida dos aterros sanitários e diminuir o impacto ambiental quanto a disposição final dos rejeitos.
 						</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div> -->
		</div>
	</header>
	@endsection
