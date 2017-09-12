@extends('.site.template.admin')

@section('content')

<h1>Nova Recompensa</h1>
<p class="lead">Adicione uma nova recompensa ao usuário</p>
<div class="col-md-offset-2 col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
      	Painel
    	</div>
    	<div class="panel-body">
		    	<label for="rec">Nome da recompensa</label>
				<input id="rec" type="text" name="recompensa"  class="form-control">
				<br>
				<label for="desc">Descrição</label>
				<input id="desc" type="text" name="descricao" class="form-control">
				<br>
				<label for="pontos">Pontos</label>
				<input id="pontos" type="text" name="pontos" class="form-control">
				<br>
				<span class="lead">Faça o upload de uma imagem</span>
				<br>
				<button class="btn btn-green"><i class="glyphicon glyphicon-circle-arrow-up"></i> Enviar Imagem</button>
				<br>
				<br>
				<button class="btn btn-green">Submeter</button>
    	</div>
  	</div>
</div>

@endsection

