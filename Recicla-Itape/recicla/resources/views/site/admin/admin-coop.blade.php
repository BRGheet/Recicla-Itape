<h1>Nova Cooperativa</h1>
<p class="lead">Adicione uma nova cooperativa no sistema</p>
<div class="col-md-offset-2 col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
      	Painel
    	</div>
    	<div class="panel-body">
    		<form id="upload" enctype="multipart/form-data">
			    <label for="nome">Nome da cooperativa<span class="font-red">*</span></label>
				<input id="nome" type="text" name="nome"  class="form-control">
				<br>
				<label for="end">Endereço<span class="font-red">*</span></label>
				<input id="end" type="text" name="endereco" class="form-control">
				<br>
				<label for="tel">Telefone<span class="font-red">*</span></label>
				<input id="tel" type="text" name="telefone" class="form-control">
				<br>
				<h3>Tipo de lixo que recolhe: <span class="font-red">*</span></h3>
				<label class="checkbox-inline"><input class="check" type="checkbox" name="papel">Papel</label>
				<label class="checkbox-inline"><input class="check" type="checkbox" name="plastico">Plastico</label>
				<label class="checkbox-inline"><input class="check" type="checkbox" name="vidro">Vidro</label>
				<br>
				<br>
				<label for="imagem">Faça o Upload da imagem<span class="font-red">*</span></label>
				<input id="imagem" type="file" name="imagem">
			</form>
			<br>
			<button class="btn btn-green" data-type="coop" data-cod="1">Submeter</button>
    	</div>
  	</div>
</div>
