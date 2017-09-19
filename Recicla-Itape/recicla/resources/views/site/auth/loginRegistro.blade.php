@extends('.site.template.cabecalho')
@section('cabecalho')

<div class="container">
  <img id="cad-bg" src="{{ URL::asset('img/registro.jpg') }}" alt="Background">
  <!-- <img style="transform: scale(0.5); text-align: center;" src="img/logo.png" alt="Logo do Recicla Itape"> -->
  <h1 class="title_LoginCadas">Faça o Login ou Cadastre-se</h1>
  <hr>
  <div class="row">
    <div class="cadastro col-md-5">
      <p class="lead">Ainda não tem um cadastro ?</p>
      <h1 class="green">Cadastre-se</h1>

      <!-- Div para alertas de erros -->
        @if ($errors->has('name'))
          <div class="alert alert-danger" role="alert">
            <p>{{ $errors->first('name') }}</p>
            <p>{{ $errors->first('email') }}</p>
            <p>{{ $errors->first('password') }}</p>
            <p>{{ $errors->first('password_confirmation') }}</p>
          </div>
        @endif
    
      <form method="POST" action="{{ route('register') }}">

        {!!csrf_field()!!}
        <label for="nome">Nome</label>
        <input id="nome" type="text" name="name" class="form-control"  value="{{old('name')}}" placeholder="Digite seu nome completo"><br>

        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Digite seu e-mail"><br>

        <label for="senha">Senha</label>
        <input id="senha" type="password" name="password" class="form-control" placeholder="Ao menos 8 digitos" value="{{old('password')}}">
        <br>

        <label for="senha2">Confirme a senha</label>
        <input id="senha2" type="password" class="form-control" placeholder="Digite novamente sua senha" name="password_confirmation" value="{{old('password_confirmation')}}"><br>

        <button class="btn btn-green">Cadastrar</button>
      </form>
    </div>


    <div class="cadastro col-md-5 col-md-offset-2">
      <p class="lead">Caso já tenha uma conta,</p>
      <h1 class="blue">Entre Agora</h1>
      @if ($errors->has('email'))
        <div class="alert alert-danger" role="alert">
          <p>{{ $errors->first('email') }}</p>
        </div>
      @endif
      @if ($errors->has('password'))
        <div class="alert alert-danger" role="alert">
          <p>{{ $errors->first('password') }}</p>
        </div>
      @endif
      <form  method="POST" action="{{ route('login') }}">

        {!!csrf_field()!!}
        <label for="nome">E-mail</label>
        <input id="nome" type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Digite seu email">
        <br>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="senha">Senha</label>
        <input id="senha" type="password" name="password" class="form-control" placeholder="Digite sua senha">
        <br>

        <a href="{{ route('password.request') }}">Esqueci a minha senha</a>
        <br>
        <br>
        <button class="btn btn-green pull-right">Entrar</button>
      </form>
    </div>
  </div>
  @endsection