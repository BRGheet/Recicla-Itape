@extends('.site.template.cabecalho')
@section('cabecalho')
@include('.site.includes.sidebarUser')
<div class="col-md-9 InformMain">
	<div class="row">
		<div class="IformTitle">
			<h2>CONFIRA AS PROMOÇÕES ATIVAS</h2>
		</div>
		<div class="promoActive col-md-12">

			<div class="col-sm-6 col-md-3 PromoItensMain">
				<div class="row">
					<div class="thumbnail PromoUserThub" style="z-index: -2">
						<img src="https://www.mcdonalds.com/content/dam/usa/nutrition/items/evm/h-mcdonalds-Double-Quarter-Pounder-with-Cheese-Extra-Value-Meals.png" alt="Imagem não encontrada" >
					</div>
					<div class="caption">
						<div class="row">
							<div class="col-md-12">
								<p>Aproveite os Lanches no <strong>McDonald's</strong>
									na compra de 1 ganha outro para realizar a troca é necessario pelo menos <span>10 pontos.</span></p>	
								</div>
							</div>
							<div class="ReadMorePromo col-md-12">
								<button>SAIBA MAIS</button>
							</div>
						</div>
					</div>
				</div>


				<div class="col-sm-6 col-md-3 PromoItensMain">
					<div class="row">
						<div class="thumbnail PromoUserThub" style="z-index: -2">
							<img src="https://pbs.twimg.com/media/DLPQSQxXkAAQcu6.jpg:small" alt="Imagem não encontrada" >
						</div>
						<div class="caption">
							<div class="row">
								<div class="col-md-12">
									<p>Aproveite os Lanches no <strong>Bob's</strong>
									na compra de 1 ganha outro para realizar a troca é necessario pelo menos 10 pontos.</p>	
								</div>
							</div>
							<div class="ReadMorePromo col-md-12">
								<button>SAIBA MAIS</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3 PromoItensMain">
					<div class="row">
						<div class="thumbnail PromoUserThub" style="z-index: -2">
							<img src="http://www.subway.com/~/media/new_zealand/promotions/marquees/mobile/subw0006_web_banner_nz_585x305px_v02.jpg" alt="Imagem não encontrada" >
						</div>
						<div class="caption">
							<div class="row">
								<div class="col-md-12">
									<p>Aproveite os Lanches no <strong>Sabway</strong>
									na compra de 1 ganha outro para realizar a troca é necessario pelo menos 10 pontos.</p>	
								</div>
							</div>
							<div class="ReadMorePromo col-md-12">
								<button>SAIBA MAIS</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3 PromoItensMain">
					<div class="row">
						<div class="thumbnail PromoUserThub" style="z-index: -2">
							<img src="http://www.fadepizza.com.br/domains/fadepizza.com.br/media/site/slide-3.jpg" alt="Imagem não encontrada" >
						</div>
						<div class="caption">
							<div class="row">
								<div class="col-md-12">
									<p>Aproveite os Pizzas no <strong>Pizza Hut</strong>
									<br>Para realizar a troca é necessario pelo menos 30 pontos.</p>	
								</div>
							</div>
							<div class="ReadMorePromo col-md-12">
								<button>SAIBA MAIS</button>
							</div>
						</div>
					</div>
				</div>



				<div class="col-sm-6 col-md-3 PromoItensMain">
					<div class="row">
						<div class="thumbnail PromoUserThub" style="z-index: -2">
							<img src="http://www.bemparana.com.br/comerecurtir/wp-content/uploads/2015/06/Jantar-Rom%C3%A2ntico.jpg" alt="Imagem não encontrada" >
						</div>
						<div class="caption">
							<div class="row">
								<div class="col-md-12">
									<p>Aproveite seu <strong>Jantar</strong> troque pontos
									<br>Para realizar a troca é necessario pelo menos 10 pontos.</p>	
								</div>
							</div>
							<div class="ReadMorePromo col-md-12">
								<button>SAIBA MAIS</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3 PromoItensMain">
					<div class="row">
						<div class="thumbnail PromoUserThub" style="z-index: -2">
							<img src="https://destemperados.s3.amazonaws.com/arquivos/ckeditor/gGT45vrm6HhVvB8Vg9/569407e351a714.89140705.JPG" alt="Imagem não encontrada" >
						</div>
						<div class="caption">
							<div class="row">
								<div class="col-md-12">
									<p>Troque seus pontos em <strong>Sorvete</strong>
									<br>Para realizar a troca é necessario pelo menos 10 pontos.</p>	
								</div>
							</div>
							<div class="ReadMorePromo col-md-12">
								<button>SAIBA MAIS</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




	</div>
</div>
<style type="text/css">
.caption{
	border-right: 1px solid #B5B5B5;
	border-left: 1px solid #B5B5B5;
	border-bottom: 1px solid #B5B5B5;
	border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;
	max-height: 200px;
}
.caption p{
	max-height: 160px;
	padding: 10px;
}
.caption span{
	font-weight: bold;
}
</style>
@endsection


