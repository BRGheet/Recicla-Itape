@extends('.site.template.cabecalho')
@section('cabecalho')
<div class="container">
	<img id="cad-bg" src="{{ URL::asset('img/registro.jpg') }}" alt="Background">
	<h1 class="title_LoginCadas">Login do Administrador</h1>
	<hr>
	<div class="row ContentAdmin">
		<div class="cadastro col-md-6">
			<p class="lead">Atenção área restrita</p>
			<h1 class="green">Administrador</h1>
			<form method="POST" action="{{url('/admin/login')}}">
				{!!csrf_field()!!}
				<label for="nome">Email</label>

				<input id="nome" type="email" name="email" class="form-control"  value="{{old('email')}}" placeholder="Digite seu email" required="required"><br>

				<label for="senha">Senha</label>
				<input id="senha" type="password" name="password" class="form-control" placeholder="Ao menos 8 digitos" value="{{old('Senha')}}" required="required">
				<br>
				<button class="btn btn-green">Login</button>
			</div>
			<style type="text/css">
			.ContentAdmin{
				display: -webkit-flex;
				display: flex;
				-webkit-align-items: center;
				align-items: center;
				-webkit-justify-content: center;
				justify-content: center;
			}
			p{
				color: red;
			}
		</style>
@endsection

