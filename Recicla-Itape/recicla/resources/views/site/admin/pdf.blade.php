@extends('site.template.admin')

@section('content')

<h2>Teste do JSPDF</h2>
<hr>
<button class="btn btn-blue">Gerar PDF</button>
<br>
<iframe width="700px" height="500px" id="pdf" src="" type="application/pdf"></iframe>

@endsection

@section('script')
<script type="text/javascript">
	$('.btn-blue').click(function(){
		var doc = new jsPDF();

		doc.setDrawColor(0);
		doc.setFillColor(50, 255, 50);
		doc.rect(0, 0, 210, 35, 'F');

		doc.setFontSize(40);
		doc.text(10,80, "Voucher do Recicla Itape");

		var link = doc.output('datauristring');
		$('#pdf').attr('src',link);
	});
</script>
@endsection