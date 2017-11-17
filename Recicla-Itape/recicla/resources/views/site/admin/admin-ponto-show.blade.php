@extends('site.template.admin')

@section('content')
<h1>Veja, edite e delete as informações feitas</h1>
<hr>
@if(!$pontos->isEmpty())
<table class="table table-bordered table-hover">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Endereço</th>
	</tr>
@foreach($pontos as $ponto)
	<tr>
		<td>{{ $ponto->id }}</td>
		<td>{{ $ponto->name }}</td>
		<td>{{ $ponto->address }}</td>
		<td><a href="/admin/ponto/edit={{ $ponto->id }}" class="btn btn-warning btn-sm">Editar</a></td>
		<td><a href="/admin/ponto/delete={{ $ponto->id }}" class="btn btn-danger btn-sm">Deletar</a></td>
	</tr>
@endforeach
</table>
@else
	<h3>Não há nenhum registro para editar</h3>
@endif

@if(Session::has('success'))
	<p class="alert alert-success">Marcador apagado com sucesso</p>
@endif

@endsection