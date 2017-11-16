@extends('.site.template.cabecalho')
@section('cabecalho')
@push('estilos')
 <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/jquery.sweet-modal.min.css') }}" />
  <script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
  <script type="text/javascript">
    tinymce.init({ selector: '#texto' });
  </script>
  <!-- Google Fonts -->
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script>
   $(document).ready(function(){
     $('.pagina').click(function(){

       var pagina = this.id;
       pagina = "/"+ pagina;


       $.ajax({
         type: "GET",
         url: pagina,
         success: function(data){
          $('#conteudo').html(data);
        }
      });

     });
   });
 </script>
@endpush

<nav id="mySidenav" class="sidebar">
  <div class="sidenav-image">
    <h1>ADMIN</h1>
  </div>
  <button class="closebtn" onclick="closeNav()">&times;</button>
  <a href="#" class="pagina" id="info">Nova Informação/Tutorial</a>
  <a href="#" class="pagina" id="ponto">Novo Ponto no Quero Reciclar</a>
  <a href="#" class="pagina" id="coop">Nova Cooperativa</a>
  <a href="#" class="pagina" id="gift">Nova Recompensa</a>
</nav>
<nav class="col-md-2 sidebar-lg hidden-xs hidden-sm">
 <h1>ADMIN</h1>
 <a href="/admin">Nova Informação</a>
 <a class="pagina" id="ponto">Novo Ponto no Quero Reciclar</a>
 <a class="pagina" id="coop">Nova Cooperativa</a>
 <a class="pagina" id="gift">Nova Recompensa</a>
</nav>
<div class="col-md-2"></div>
<div id="conteudo" class="container col-md-10">
  @yield('content')
</div>
@push('scripts')
<!-- Script NavBar -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/eb29782670.js"></script>
<script src="{{ URL::asset('js/jquery.sweet-modal.min.js') }}"></script>
<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
</script>
<script type="text/javascript">
  $(document).on('click', '.btn-green', function(){
    var pagina = $(this).attr('data-type');
    pagina = '/admin/'+pagina+'/send';

        //tranforma o form em array
        var dado = {};
        $('.form-control').each(function(){
          dado[$(this).attr('name')] = $(this).val();
        });
        // verifica se existe input do tipo checkbox
        if($('.check').length > 0){
          $('.check').each(function(){
            dado[$(this).attr('name')] = $(this).is(':checked') ? 1 : 0;
          });
        }
        if ($('#texto').length > 0){
          dado['texto'] = tinymce.get('texto').getContent();
        }
        // tranforma array em json
        JSON.stringify(dado);
        console.log(dado);
        $.ajax({
          type: 'POST',
          data: dado,
          dataType: 'text',
          url: pagina,
          success: function(data){
            $.sweetModal({
              content: data,
              icon: $.sweetModal.ICON_SUCCESS
            });
          }
        });
      });
    </script>
@endpush
@endsection
 