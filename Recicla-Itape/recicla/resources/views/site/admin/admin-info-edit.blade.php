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
        @foreach($infos as $info)
        <form id="upload" enctype="multipart/form-data">
            <label for="id">ID</label>
            <input class="form-control" id="id" type="text" name="id" value="{{ $info->id }}" readonly>
            <label for="titulo">Titulo<span class="font-red">*</span></label>
            <input id="titulo" type="text" name="titulo" class="form-control" value="{{ $info->titulo }}">
            <br>
            <label for="autor">Autor</label>
            <input id="autor" type="text" name="autor"  class="form-control" value="{{ $info->autor }}">
            <br>
            <label for="video">Vídeo</label>
            <input type="text" name="video" id="video" class="form-control" value="{{ $info->video }}">
            <br>
            <label for="resumo">Resumo do texto<span class="font-red">*</span></label>
            <textarea class="form-control" id="resumo" name="resumo">{{ $info->resumo }}</textarea>
            <br>
            <label for="texto">Texto<span class="font-red">*</span></label>
            <textarea id="texto" name="texto" class="form-control">{{ $info->texto }}</textarea>
            <br>
        </form>
        @endforeach
        <button class="btn btn-green" data-cod="2" data-type="info">Submeter</button>
    </div>
  </div>
</div>
  
@endsection