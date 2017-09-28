@foreach($infos as $info)
<h1>{{ $info->titulo }} do id: {{ $info->id }}</h1>
<p>{{ $info->texto }}</p>
<hr>
@endforeach