@extends('.site.template.cabecalho')
@section('cabecalho')
<div class="container CooperativasMain"> 
	<div class="row">

		<div class="col-md-12 titleCoope">
			<h1>Cooperativas</h1>
			<p>
				As cooperativas de reciclagem desenvolvem o processo de tratamento dos materiais recicláveis e os enviam às empresas recicladoras, mas até esta fase existe uma série de etapas que a antecedem.As cooperativas de reciclagem ajudam a gerar empregos e colaboram para a valorização do trabalho de catadores.

				Uma cooperativa do Distrito Federal, chamada “100 Dimensões”, realiza cursos de capacitação profissional, promove oficinas de artesanato com parte do material recolhido e é constantemente chamada para trabalhar em eventos.

				A reciclagem auxilia no processo de preservação ambiental, ao passo que diminui o uso de recursos naturais para a fabricação de embalagens.
			</p>
		</div>
		<div class="titleList">
			<p>Lista de Cooperativas</p>
		</div>
		<div class="listagemCoop col-md-4">
			<p>Coop. de Reciclagem de Itapetininga</p>
			<p><strong>Endereço:</strong> Rua Orlando Scotto, 68</p>
			<p><strong>Bairro:</strong> Vila Arlindo Luz</p>
			<p><strong>Cep:</strong> 18214-385</p>
			<a href="#" class="btn btn-primary" role="button">Mais Informaçães</a>
		</div>
		<div class="listagemCoop col-md-4">
			<p>Carrefour Sorocaba Norte</p>
			<p><strong>Endereço:</strong>Avenida Brasil, 376</p>
			<p><strong>Bairro:</strong> Terra Vermelha</p>
			<p><strong>Cep:</strong> 18065-100</p>
			<a href="#" class="btn btn-primary" role="button">Mais Informaçães</a>
		</div>
		<div class="listagemCoop col-md-4">
			<p>COOP - UnidadeTatuí</p>
			<p><strong>Endereço:</strong>Rua Onze de Agosto, 3045</p>
			<p><strong>Bairro:</strong> Valinho</p>
			<p><strong>Cep:</strong> 18275-000</p>
			<a href="#" class="btn btn-primary" role="button">Mais Informaçães</a>
		</div>

		

	</div>
</div>
<style type="text/css">
*{
	list-style: none;
}
body{
	background-color: #ededed;
}
</style>
@endsection