<h1>Nova Informação</h1>
<p class="lead">Adicione alguma novidade ou informação para o usuário.</p>
<div class="col-md-offset-2 col-md-7">
  <div class="panel panel-primary">
    <div class="panel-heading">
      Painel
    </div>
    <div class="panel-body">
        <label for="titulo">Titulo</label>
        <input id="titulo" type="text" name="titulo" class="form-control">
        <br>
        <label for="autor">Autor</label>
        <input id="autor" type="text" name="autor"  class="form-control">
        <br>
        <label for="texto">Texto</label>
        <textarea id="texto" name="texto" class="form-control"></textarea>
        <br>
      <button id="button" class="btn btn-green">Submeter</button>
    </div>
  </div>
</div>
<!-- @section('script')
  <script type="text/javascript">
    $('#button').click(function(){
      $.ajax({
        type: 'POST',
        data: {'titulo' : $_POST['titulo'],'autor':$_POST['autor'], 'texto' : $_POST['texto']}
        dataType: 'json',
        url: '/admin/info/send',
        beforeSend: function(){
          $('#res').html('Carregando...');
        }
        success: function(data){
          if(data){
            $('#res').html('Sucesso');
          }
        }
      });
    });
  </script>
@endsection -->