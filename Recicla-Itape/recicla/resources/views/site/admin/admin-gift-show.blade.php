@extends('site.template.admin')

@section('content')
<h1>Veja, edite e delete as informações feitas</h1>
<hr>
@if(!$gifts->isEmpty())
<table class="table table-bordered table-hover">
	<tr>
		<th>ID</th>
		<th>Imagem</th>
		<th>Nome</th>
		<th>Pontos</th>
	</tr>
	@foreach($gifts as $gift)
	<tr>
		<td>{{ $gift->id }}</td>
		<td><img width="60" height="60" src="../../../uploads/gift/{{ $gift->imagem }}"></td>
		<td>{{ $gift->nome }}</td>
		<td>{{ $gift->pontos }}</td>
		<td><a href="/admin/gift/edit={{ $gift->id }}" class="btn btn-warning btn-sm">Editar</a></td>
		<td><a href="/admin/gift/delete={{ $gift->id }}" class="btn btn-danger btn-sm">Deletar</a></td>
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