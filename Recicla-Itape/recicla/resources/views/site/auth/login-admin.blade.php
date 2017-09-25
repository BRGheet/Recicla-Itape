@extends('.site.template.html')
@section('html')
<div class="container">
	<div class="row" id="pwd-container">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<section class="login-form">
				<h1>Login Admin</h1>
				<form method="POST" action="{{url('/admin/login')}}">
					{!!csrf_field()!!}
					<input type="email" name="email" placeholder="Email" required class="form-control input-lg"/>
					 <input type="password" class="form-control input-lg" id="password" placeholder="Senha" required=""
					 name="password" />
					<button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Entrar</button>
				</form>
			</div>
			</section>
		</div>
		</div>
	</div>
</div>
@endsection

