@extends('.site.template.cabecalho')
@section('cabecalho')
@include('.site.includes.sidebarUser')
<div class="col-md-9 InformMain">
	<div class="row">
		<div class="IformTitle">
			<h2>ALTERAR DADOS</h2>
		</div>
		<div class="col-md-12 formUserUpda">
			<form>
				<label>
					Nome:<br>
					<input type="text" name="" value={{ Auth::user()->name }}>
				</label>
				<label>
					Email:<br>
					<input type="email" name="" readonly="true" style="width: 270px;" value={{ Auth::user()->email }}>
				</label><br>
				<label>Senha:<br>
					<input type="password" name="" placeholder="***************">
				</label>
				<label>
					Confirmar nova senha:<br>
					<input type="password" name=""  placeholder="***************">
				</label>
			</form>
			<button type="button" class="btn btn-primary">Atualizar Dados</button>
		</div>
	</div>
</div>
@endsection