@extends('.site.template.cabecalho')
@section('cabecalho')
<div class="container-fluid TutoriaisMain">
	<div class="Title">
		@forelse($tutoriais as $news)
		<h1>{{$news->titulo}}</h1>
		<p>
			<i class="fa fa-user" aria-hidden="true"> Autor: Miqueias</i> 

			<i class="fa fa-calendar-check-o" aria-hidden="true"> Data:{{ 
				date('d/m/Y', strtotime($news->dataHora ))
			}}</i>

			<i class="fa fa-clock-o" aria-hidden="true"> Hora:{{date('H:i', strtotime($news->dataHora ))}}</i>
		</p>	
	</div>

	<div class="row">
		<div class="col-md-2 tutoLeft">
			 <!-- <img src="{{URL::asset('img/teste.jpg')}}" alt="profile Pic" height="300" width="200"> -->
		</div>
		<div class="col-md-8 tutoCenter">
			<div class="VideoPlay col-md-12">
				<iframe src="{{$news->video}}" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-md-12 textTutorial">
				<p>{{$news->texto}}</p>
			</div>
		</div>
		<div class="col-md-2 tutoRight"></div>
	</div>
</div>
@empty
<h1>Desculpa Nenhuma Noticia Encontrada!</h1>
@endforelse
<style type="text/css">
	body{
		background-color: #FFFAFA;
	}
</style>
@endsection