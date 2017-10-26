@extends('.site.template.cabecalho')
@section('cabecalho')
<!-- insert into markers(name,address,lat,lng,type) values('teste','werqwer',-23.593986,-48.018683,'Ifsp'); -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalLabel">Selecione um filtro para a melhor visualização do mapa.</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-green btn-filter" value="/reciclar/f=papel"><span class="glyphicon glyphicon-file"></span> Papéis</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-green btn-filter" value="/reciclar/f=plastico"><span class="glyphicon glyphicon-cd"></span> Plásticos</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-green btn-filter" value="/reciclar/f=vidro"><span class="glyphicon glyphicon-glass"></span> Vidros</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-green btn-filter" value="/reciclar/f=metal"><span class="glyphicon glyphicon-oil"></span> Metais</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
      <button class="btn btn-blue filter"><strong>Filtro</strong></button>
      <div class="col-md-12" id="map"></div>
  </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
    $('.filter').click(function(){
      $('#modal').modal('show');
    });
    $('.btn-filter').click(function(){
      var url = $(this).val();
      $(location).attr('href',url);
    });
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

        @foreach($markers as $marker)
          var info{{ $marker->id }} = new google.maps.InfoWindow({
              content: "<h2>{{ $marker->name }}</h2>"
              +"<p>{{ $marker->content }}</p>"
              +"<h5>Endereço</h5> {{ $marker->address }}<br>"
              +"<h5>A cooperativa coleta os seguintes tipos de lixo</h5> <br>"
              @if($marker->papel)
                +"<span class=\"glyphicon glyphicon-file\"></span><strong> Papel</strong> "
              @endif
              @if($marker->plastico)
                +"<span class=\"glyphicon glyphicon-cd\"></span><strong> Plastico</strong> "
              @endif
              @if($marker->vidro)
                +"<span class=\"glyphicon glyphicon-glass\"></span><strong> Vidro</strong>"
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
        @endforeach
    }

</script>     
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKTFiIq0LFTvHk92BdJ1qnyUf_U3AGDOE&callback=initMap"></script>
@endpush