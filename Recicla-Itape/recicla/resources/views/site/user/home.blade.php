@extends('.site.template.cabecalho')
@section('cabecalho')

<div class="container UserContentMain">
	<div class="row">
		<div class="sidebarUser col-md-3">
			<h2>STATUS DA SUA CONTA</h2>
			<div class="col-md-12 userButtons">
				<dl class="pontosUser">
					<dt>Atualmente você tem:</dt>
					<dd><span>0</span><br>
					Pontos Disponíveis.</dd>
				</dl>
				<!-- Botoes conta -->
				<nav class="menu-user-btn">
					<ul>
						<li>
							<a href="">
								MINHA CONTA
							</a>
						</li>
						<li>
							<a href="">
								MEUS PONTOS
							</a>
						</li>
						<li>
							<a href="">
								MEUS VOUCHERS
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="col-md-9 InformMain">
			<div class="row">
				<div class="IformTitle">
					<h2>CONFIRA AS PROMOÇÕES ATIVAS</h2>
				</div>
				<div class="promoActive col-md-12">


					<div class="col-sm-6 col-md-4 PromoItensMain">
						<div class="row">
							<div class="thumbnail PromoUserThub">
								<img src="https://www.mcdonalds.com/content/dam/usa/nutrition/items/evm/h-mcdonalds-Double-Quarter-Pounder-with-Cheese-Extra-Value-Meals.png" alt="Imagem não encontrada" >
								<div class="caption">
									<div class="col-md-12 MarcaPromo">
										<img src="https://seeklogo.com/images/M/mcdonald-s-logo-0D95A820B2-seeklogo.com.png" style="height: 50px;">
									</div>
								</div>
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</div>
@endsection


