@extends('.site.template.cabecalho')
@section('cabecalho')

<div class="container">
  <img id="cad-bg" src="{{ URL::asset('img/registro.jpg') }}" alt="Background">
  <!-- <img style="transform: scale(0.5); text-align: center;" src="img/logo.png" alt="Logo do Recicla Itape"> -->

  <hr>
  <div class="row">
    <div class="cadastro col-md-5">
      <p class="lead">Ainda não tem um cadastro ?</p>
      <h1 class="green">Cadastre-se</h1>
      @if(isset($errors)&& count($errors) > 0)
      <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
      </div>
      @endif
      <label for="nome">Nome</label>

      <form method="post" action="{{url('/cadastro/')}}">
        {!!csrf_field()!!}
        <input id="nome" type="text" name="nome" class="form-control" placeholder="Digite seu nome completo" value="{{old('nome')}}">
        <input type="hidden" name="admin" value="true">
        <br>
        <label for="senha">Senha</label>
        <input id="senha" type="password" name="senha" class="form-control" placeholder="Ao menos 8 digitos">
        <br>
        <label for="senha2">Confirme a senha</label>
        <input id="senha2" type="password" class="form-control" placeholder="Digite novamente sua senha" >
        <br>
        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" class="form-control" placeholder="Digite seu Email" value="{{old('email')}}">
        <br>
        <button class="btn btn-green">Cadastrar</button>
      </form>
    </div>
    <div class="cadastro col-md-5 col-md-offset-2">
      <p class="lead">Caso já tenha uma conta,</p>
      <h1 class="blue">Entre Agora</h1>
      <label for="nome">E-mail</label>
      <input id="nome" type="email" name="nome" class="form-control">
      <br>
      <label for="senha">Senha</label>
      <input id="senha" type="password" name="senha" class="form-control">
      <br>
      <a href="#">Esqueci a minha senha</a>
      <br>
      <br>
      <button class="btn btn-green pull-right">Entrar</button>
    </div>
  </div>
</div>
@endsection