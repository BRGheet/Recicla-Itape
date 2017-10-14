<h1>Novo Ponto no Mapa</h1>
<p class="lead">Adicione um ponto no mapa que represente uma nova cooperativa</p>
<div class="col-md-offset-2 col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
      	Painel
    	</div>
    	<div class="panel-body">
		    <label for="nome">Nome da cooperativa</label>
			<input id="nome" type="text" name="nome"  class="form-control">
			<br>
			<form class="form-inline">
				<div class="form-group">
					<input type="text" name="latitude" placeholder="Latitude do local: " class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="longitude" placeholder="Longitude do local: " class="form-control">
				</div>
			</form>
			<br>
			<h3>Tipo de lixo que recolhe: </h3>
			<label class="checkbox-inline"><input type="checkbox" class="check" name="papel">Papel</label>
			<label class="checkbox-inline"><input type="checkbox" class="check" name="plastico">Plastico</label>
			<label class="checkbox-inline"><input type="checkbox" class="check" name="vidro">Vidro</label>
			<br>
			<br>
			<button class="btn btn-green" data-type="ponto">Submeter</button>
    	</div>
  	</div>
</div>