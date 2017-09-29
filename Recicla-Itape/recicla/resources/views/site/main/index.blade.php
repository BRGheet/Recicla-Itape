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

		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail1">
						<!-- <img src=""> -->
					</div>
					<div class="caption">
						<h3>Decoração com Reciclagem</h3>
						<p>Aqui você vai descobrir maneiras fantásticas de fazer decoração com reciclagem.Com objetos feitos à mão você pode melhorar o visual da sua casa inteira, desde o jardim, até o quarto, cozinha, sala e banheiro. Sendo assim, mostraremos aqui vários artesanatos simples, todos feitos com materiais recicláveis, tais como: latas, garrafas de vidro, caixotes e papelão.</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>


			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail2">
						<!-- <img src=""> -->
					</div>
					<div class="caption">
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa voluptate, quae quibusdam. Doloremque similique, reiciendis sit quibusdam aperiam? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail3">
						<!-- <img src=""> -->
					</div>
					<div class="caption">
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa voluptate, quae quibusdam. Doloremque similique, reiciendis sit quibusdam aperiam? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>


			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail4">
						<!-- <img src=""> -->
					</div>
					<div class="caption">
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa voluptate, quae quibusdam. Doloremque similique, reiciendis sit quibusdam aperiam? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>
		</div>

	</header>
	@endsection
