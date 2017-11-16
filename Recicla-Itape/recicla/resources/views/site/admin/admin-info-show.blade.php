@extends('site.template.admin')

@section('content')
<h1>Veja, edite e delete as informações feitas</h1>
<hr>
@if(!$infos->isEmpty())
<table class="table table-bordered table-hover">
	<tr>
		<th>ID</th>
		<th>Título</th>
		<th>Autor</th>
		<th>Criado em</th>
	</tr>
@foreach($infos as $info)
	<tr>
		<td>{{ $info->id }}</td>
		<td>{{ $info->titulo }}</td>
		<td>{{ $info->autor }}</td>
		<td>{{ $info->dataHora }}</td>
		<td><a href="/admin/info/edit={{ $info->id }}" class="btn btn-warning btn-sm">Editar</a></td>
		<td><a href="/admin/info/delete={{ $info->id }}" class="btn btn-danger btn-sm">Deletar</a></td>
	</tr>
@endforeach
</table>
@else
	<h3>Não há nenhum registro para editar</h3>
@endif

@if(Session::has('success'))
	<p class="alert alert-success">Informação apagada com sucesso</p>
@endif

@endsection