<h1>Nova Recompensa</h1>
<p class="lead">Adicione uma nova recompensa ao usuário</p>
<div class="col-md-offset-2 col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
      	Painel
    	</div>
    	<div class="panel-body">
    		<form id="upload" enctype="multipart/form-data">
		    	<label for="rec">Nome da recompensa</label>
				<input id="rec" type="text" name="nome"  class="form-control">
				<br>
				<label for="desc">Descrição</label>
				<input id="desc" type="text" name="desc" class="form-control">
				<br>
				<label for="pontos">Pontos</label>
				<input id="pontos" type="text" name="pontos" class="form-control">
				<br>
				<label for="imagem">Faça o Upload da imagem<span class="font-red">*</span></label>
				<input id="imagem" type="file" name="imagem">
				<br>
			</form>
			<button class="btn btn-green" data-type="gift">Submeter</button>
    	</div>
  	</div>
</div>
