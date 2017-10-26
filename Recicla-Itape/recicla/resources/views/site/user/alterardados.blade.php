@extends('.site.template.cabecalho')
@section('cabecalho')
@include('.site.includes.sidebarUser')
<div class="col-md-9 InformMain">
	<div class="row">
		<div class="IformTitle">
			<h2>Alterar Dados</h2>
		</div>
		<div class="col-md-12 formUserUpda">
			<form>
				<label>
					Nome:<br>
					<input type="text" name="" placeholder="Miquéias Fernando">
				</label>
				<label>
					Email:<br>
					<input type="email" name="" style="width: 270px;" placeholder="miqueiasfernando@gmail.com">
				</label><br>
				<label>Senha:<br>
					<input type="password" name="" placeholder="***************">
				</label>
				<label>
					Confirmar nova senha:<br>
					<input type="password" name=""  placeholder="***************">
				</label>
			</form>
		</div>
	</div>
</div>

@endsection