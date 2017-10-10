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

      @if ($errors->cadastro->first('name'))
      <span class="help-block">
        <strong>{{ $errors->cadastro->first('name')}}</strong>
      </span>
      @endif

      @if ($errors->cadastro->first('email'))
      <span class="help-block">
        <strong>{{ $errors->cadastro->first('email')}}</strong>
      </span>
      @endif

      @if ($errors->cadastro->first('password'))
      <span class="help-block">
        <strong>{{ $errors->cadastro->first('password')}}</strong>
      </span>
      @endif

      @if ($errors->cadastro->first('Senha_Confirme'))
      <span class="help-block">
        <strong>{{ $errors->cadastro->first('Senha_Confirme')}}</strong>
      </span>
      @endif

      <form method="POST" action="{{ route('register') }}">

        {!!csrf_field()!!}
        <label for="nome">Nome</label>
        <input id="nome" type="text" name="Nome" class="form-control"  value="{{old('Nome')}}" placeholder="Digite seu nome completo"><br>

        <label for="email">E-mail</label>
        <input id="email" type="email" name="Email" class="form-control"  value="{{old('Email')}}" placeholder="Digite seu e-mail"><br>

        <label for="senha">Senha</label>
        <input id="senha" type="password" name="Senha" class="form-control" placeholder="Ao menos 8 digitos" value="{{old('Senha')}}">
        <br>

        <label for="senha2">Confirme a senha</label>
        <input id="senha2" type="password" class="form-control" placeholder="Digite novamente sua senha" name="Senha_Confirme" value="{{old('Senha_Confirme')}}"><br>

        <button class="btn btn-green">Cadastrar</button>
      </form>
    </div>


    <div class="cadastro col-md-5 col-md-offset-2">
      <p class="lead">Caso já tenha uma conta,</p>
      <h1 class="blue">Entre Agora</h1>
      <form  method="POST" action="{{ route('login') }}">

        {!!csrf_field()!!}
        @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
        <label for="nome">E-mail</label>
        <input id="nome" type="email" name="email" class="form-control"  placeholder="Digite seu email" value="{{old('email')}}" required="required">
        <br>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="senha">Senha</label>
          <input id="senha" type="password" name="password" class="form-control" placeholder="Digite sua senha" value="{{old('password')}}" required="required">
          <br>

          <a href="{{ route('password.request') }}">Esqueci a minha senha</a>
          <br>
          <br>
          <button class="btn btn-green pull-right">Entrar</button>
        </form>
      </div>
    </div>
    @endsection