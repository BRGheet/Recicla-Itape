<h1>Novo Ponto no Mapa</h1>
<p class="lead">Adicione um ponto no mapa que represente uma nova cooperativa</p>
<div class="col-md-offset-2 col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
      	Painel
    	</div>
    	<div class="panel-body">
    		<form id="upload" enctype="multipart/form-data">
			    <label for="nome">Nome da cooperativa</label><span class="font-red">*</span>
				<input id="nome" type="text" name="nome"  class="form-control">
				<br>
				<label for="descricao">Descrição</label><span class="font-red">*</span>
				<textarea id="descricao" class="form-control" name="descricao"></textarea>
				<br>
				<label for="endereco">Endereço</label><span class="font-red">*</span>
				<input id="endereco" type="text" name="endereco" class="form-control">
				<br>
				<label for="lat">Latitude</label><span class="font-red">*</span>
				<input id="lat" type="text" name="latitude" placeholder="Latitude do local: " class="form-control">
				<br>
				<label for="lng">Longitude</label><span class="font-red">*</span>
				<input id="lng" type="text" name="longitude" placeholder="Longitude do local: " class="form-control">
				<h3>Tipo de lixo que recolhe: </h3> 
				<label class="checkbox-inline"><input type="checkbox" class="check" name="papel">Papel</label>
				<label class="checkbox-inline"><input type="checkbox" class="check" name="plastico">Plastico</label>
				<label class="checkbox-inline"><input type="checkbox" class="check" name="vidro">Vidro</label>
				<br>
				<br>
			</form>
			<button class="btn btn-green" data-type="ponto" data-cod="1">Submeter</button>
    	</div>
  	</div>
</div>