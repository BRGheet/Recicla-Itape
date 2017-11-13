<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Recicla Itapê</title>
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
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
</head>
<body>
   <nav class="navbar navbar-default navbar-green">
    <div class="container">
      <div class="navbar-header cor-branco">
        <!-- <a href="#" class="navbar-brand"><img src="img/logo.png" alt="Logo do Recicla Itapê"></a>-->
        <button type="button" onclick="openNav()" class="navbar-toggle pull-left">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
        <a href="/" class="navbar-brand hidden-xs">Recicla Itapê</a>
        <a href="/" class="navbar-brand hidden-sm hidden-md hidden-lg">Recicla Itapê</a>                
      </div>
      <div class="col-md-6 col-md-offset-3 hidden-xs">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/reciclar">Quero Reciclar</a></li>
          <li><a href="/cooperativas">Cooperativas</a></li>
        </ul>
      </div>
      <div class="nav navbar-nav navbar-right">
        <div class="dropdown hidden-xs">
          @if (Auth::guest())
          <a href="{{url('cadastro/login')}}"><button class="btn btn-blue-outline navbar-btn">Entrar</button></a>
          @else
          <div class="btn-group">
            <button type="button" class="btn btn-blue-outline navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#">Resgatar Vouchers</a></li>
              <li><a href="/vouchers">Vouchers</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/minha_conta">Minha Conta</a></li>
              <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Sair</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}</form>
            </li>
          </ul>
        </div>
        @endif
      </div>
    </div>
  </div>
</nav>
  <nav class="navbar navbar-default navbar-green hidden-lg hidden-md">
    <div class="container">
      <div class="navbar-header cor-branco">
       <!-- <a href="#" class="navbar-brand"><img src="img/logo.png" alt="Logo do Recicla Itapê"></a>-->
       <button type="button" onclick="openNav()" class="navbar-toggle pull-left">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 
      <a href="index.html" class="navbar-brand hidden-xs">Recicla Itapê</a>
      <a href="index.html" class="navbar-brand hidden-sm hidden-md hidden-lg">Recicla Itapê</a>                
    </div>
  </div>
</nav>

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
<!-- Script NavBar -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('js/Navbar.js') }}"></script>
<script src="https://use.fontawesome.com/eb29782670.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
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
    @yield('script')
  </body>
  </html>