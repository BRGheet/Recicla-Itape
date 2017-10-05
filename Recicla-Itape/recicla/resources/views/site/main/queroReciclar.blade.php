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
@push('scripts')
<script type="text/javascript">
	  function initMap() {
        var meio = {lat: -23.588225, lng: -48.040106};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: meio,
          zoom: 13,
          /*Minimo zoom limite*/
          minZoom:13,
          zoomControl: true,
          scaleControl: true,
          streetViewControl: false,
          /*Desabilita ctrl para zoon*/
          gestureHandling: 'greedy'
        });

        /*@foreach($markers as $marker)
        	var info{{ $marker->id }} = new google.maps.InfoWindow({
          		content: "<h1>{{ $marker->name }}</h1>"
          		+"<p>{{ $marker->content }}</p>"
          		+"<br><strong>Endereço:</strong> {{ $marker->address }}<br>"
          		@if($marker->papel)
          			+"<strong>Papel</strong> "
          		@endif
          		@if($marker->plastico)
          			+" <strong>Plastico</strong> "
          		@endif
          		@if($marker->vidro)
          			+"<strong>Vidro</strong>"
          		@endif
        	});
       	 	var marker{{ $marker->id }} = new google.maps.Marker({
         		position: {lat: {{ $marker->lat }}, lng: {{ $marker->lng }} },
          		map: map,
          		title: "{{ $marker->name }}"
        	});
        	marker{{ $marker->id }}.addListener('click', function(){
          		info{{ $marker->id }}.open(map,marker{{ $marker->id }})
        	});

        	marker{{ $marker->id }}.setMap(map);
        @endforeach*/
    }

</script>     
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKTFiIq0LFTvHk92BdJ1qnyUf_U3AGDOE&callback=initMap"></script>
@endpush