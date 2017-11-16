@extends('.site.template.admin')

@section('content')

<h1>Nova Informação ou Tutorial</h1>
<p class="lead">Adicione alguma novidade ou informação ou tutorial para o usuário.</p>
<p class="lead">Opções com um "<span class="font-red">*</span>" são obrigatórias</p>
<div class="col-md-offset-2 col-md-7">
  <div class="panel panel-primary">
    <div class="panel-heading">
      Painel
  </div>
  <div class="panel-body">
    <label for="titulo">Titulo<span class="font-red">*</span></label>
    <input id="titulo" type="text" name="titulo" class="form-control">
    <br>
    <label for="autor">Autor</label>
    <input id="autor" type="text" name="autor"  class="form-control DesativaInput" readonly="true" value="{{Auth::user()->name}}">
    <br>
    <label for="video">Vídeo</label>
    <input type="text" name="video" id="video" class="form-control">
    <br>
    <label for="resumo">Resumo do texto<span class="font-red">*</span></label>
    <textarea class="form-control" id="resumo" name="resumo"></textarea>
    <br>
    <label for="texto">Texto<span class="font-red">*</span></label>
    <textarea id="texto" name="texto" class="form-control"></textarea>
    <br>
    <button class="btn btn-green" data-type="info">Submeter</button>
</div>
</div>
</div>

@endsection
