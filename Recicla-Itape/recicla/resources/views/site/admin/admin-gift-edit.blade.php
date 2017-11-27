@extends('site.template.admin')

@section('content')
<h1>Nova Recompensa</h1>
<p class="lead">Adicione uma nova recompensa ao usuário</p>
<div class="col-md-offset-2 col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
      	Painel
    	</div>
    	<div class="panel-body">
    		@foreach($gifts as $gift)
    		<form id="upload" enctype="multipart/form-data">
    			<label for="id">ID</label>
    			<input class="form-control" id="id" type="text" name="id" value="{{ $gift->id }}" readonly>
    			<br>
		    	<label for="rec">Nome da recompensa</label>
				<input id="rec" type="text" name="nome"  class="form-control" value="{{ $gift->nome }}">
				<br>
				<label for="desc">Descrição</label>
				<input id="desc" type="text" name="descricao" class="form-control" value="{{ $gift->descricao }}">
				<br>
				<label for="pontos">Pontos</label>
				<input id="pontos" type="text" name="pontos" class="form-control" value="{{ $gift->pontos }}">
				<br>
				<label for="imagem">Faça o Upload da imagem (Opcional)</label>
				<input id="imagem" type="file" name="imagem">
				<br>
			</form>
			@endforeach
			<button class="btn btn-green" data-type="gift" data-cod="2">Submeter</button>
    	</div>
  	</div>
</div>
@endsection