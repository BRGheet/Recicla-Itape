@extends('site.template.admin')

@section('content')
<h1>Veja, edite e delete as informações feitas</h1>
<hr>
@if(!$coops->isEmpty())
<table class="table table-bordered table-hover">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Endereço</th>
		<th>Telefone</th>
	</tr>
@foreach($coops as $coop)
	<tr>
		<td>{{ $coop->id }}</td>
		<td>{{ $coop->nome }}</td>
		<td>{{ $coop->endereco }}</td>
		<td>{{ $coop->telefone }}</td>
		<td><a href="/admin/coop/edit={{ $coop->id }}" class="btn btn-warning btn-sm">Editar</a></td>
		<td><a href="/admin/coop/delete={{ $coop->id }}" class="btn btn-danger btn-sm">Deletar</a></td>
	</tr>
@endforeach
</table>
@else
	<h3>Não há nenhum registro para editar</h3>
@endif

@if(Session::has('success'))
	<p class="alert alert-success">Cooperativa apagada com sucesso</p>
@endif

@endsection