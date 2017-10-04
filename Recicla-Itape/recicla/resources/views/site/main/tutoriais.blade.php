@extends('.site.template.cabecalho')
@section('cabecalho')
<div class="container TutoriaisMain">
	<div class="Title">
		@forelse($noticias as $news)
		<h1>{{$news->titulo}}</h1>
		<p>
			<i class="fa fa-user" aria-hidden="true">: Miqueias</i> 

			<i class="fa fa-calendar-check-o" aria-hidden="true">{{$news->data}}</i>

			<i class="fa fa-clock-o" aria-hidden="true">12:13</i>
		</p>	
	</div>
	<div class="videoImage">
		<iframe src="https://www.youtube.com/embed/keSDOp6ZaOA" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="container textTutorial">
		<p>
			Reciclar significa transformar objetos materiais usados em novos produtos para o consumo. Esta necessidade  foi despertada pelos seres humanos, a partir do momento em que se verificaram os benefícios que este procedimento trás para o planeta Terra.
			
			Importância e vantagens da reciclagem 
			
			A partir da década de 1980, a produção de embalagens e produtos descartáveis  aumentou significativamente, assim como a produção de lixo, principalmente nos países desenvolvidos. Muitos governos e ONGs estão cobrando de empresas posturas responsáveis: o crescimento econômico deve estar aliado à preservação do meio ambiente. Atividades como campanhas de coleta seletiva de lixo e reciclagem de alumínio e papel, já são comuns em várias partes do mundo.
			
			No processo de reciclagem, que além de preservar o meio ambiente também gera riquezas, os materiais mais reciclados são o vidro, o alumínio, o papel e o plástico. Esta reciclagem contribui para a diminuição significativa da poluição do solo, da água e do ar. Muitas indústrias estão reciclando materiais como uma forma de reduzir os custos de produção.
			
			Outro benefício da reciclagem é a quantidade de empregos que ela tem gerado nas grandes cidades. Muitos desempregados estão buscando trabalho neste setor e conseguindo renda para manterem suas famílias. Cooperativas de catadores de papel e alumínio já são uma boa realidade nos centros urbanos do Brasil.
			
			Muitos materiais como, por exemplo, o alumínio pode ser reciclado com um nível de reaproveitamento de quase 100%. Derretido, ele retorna para as linhas de produção das indústrias de embalagens, reduzindo os custos para as empresas.
			
			Muitas campanhas educativas têm despertado a atenção para o problema do lixo nas grandes cidades. Cada vez mais, os centros urbanos, com grande crescimento populacional, têm encontrado dificuldades em conseguir locais para instalarem depósitos de lixo. Portanto, a reciclagem apresenta-se como uma solução viável economicamente, além de ser ambientalmente correta. Nas escolas, muitos alunos são orientados pelos professores a separarem o lixo em suas residências. Outro dado interessante é que já é comum nos grandes condomínios a reciclagem do lixo.
		</p>
	</div>
</div>
@empty
<h1>Desculpa Nenhuma Noticia Encontrada!</h1>
@endforelse
@endsection