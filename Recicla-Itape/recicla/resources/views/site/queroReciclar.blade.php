@extends('.site.template.cabecalho')
@section('cabecalho')
<div class="container-fluid">
	<div class="row">
		<div class="nav-side-menu col-md-2">
			<div class="brand">Filtro</div>
			<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

			<div class="menu-list">

				<ul id="menu-content" class="menu-content collapse out">

					<li>
						<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>Papel</a>
					</li>

					<li  data-toggle="collapse" data-target="#products" class="collapsed">
						<a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Plastico</a>
					</li>

					<li data-toggle="collapse" data-target="#service" class="collapsed">
						<a href="#"><i class="fa fa-database" aria-hidden="true"></i> Metal</a>
					</li>  

					<li data-toggle="collapse" data-target="#new" class="collapsed">
						<a href="#"><i class="fa fa-car fa-lg"></i> Oleo</a>
					</li>

					<li>
						<a href="#"><i class="fa fa-glass" aria-hidden="true"></i> Vidro</a>
					</li>

					<li>
						<a href="#"><i class="fa fa-desktop" aria-hidden="true"></i> Eletrônicos</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="map" class="col-md-10"></div>
	</div>
</div>
@endsection