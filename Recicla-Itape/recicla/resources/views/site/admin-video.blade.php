@extends('.site.template.admin')

@section('content')

<h1>Novo Vídeo</h1>
<p class="lead">Adicione um novo vídeo</p>
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
        <textarea id="texto" class="form-control"></textarea>
        <br>
        <label for="video">Vídeo</label>
        <input id="video" type="text" name="video" class="form-control">
        <br>
        <button class="btn btn-green">Submeter</button>
    </div>
  </div>
</div>

@endsection