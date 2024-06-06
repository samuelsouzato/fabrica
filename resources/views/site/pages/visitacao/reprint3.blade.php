

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<title>Agendamento de Espaço</title>
		<style>
			.modal-dialog {
				width: 100% !important;
				height: 100% !important;
				margin: auto !important;
				padding: 0 !important;
			}
			.modal-content {
				height: 100% !important;
				width: 100% !important;
				min-height: 100% !important;
				border-radius: 0 !important;
			}
		</style>
	</head>

<body>
    
			<H1>Selecione o comprovante para a impressão</H1>
	<div style= "margin:20%">


		
		@if( count($visitante_cadastrato) == 0)
			<h2> Não encontramos nenhum agendamento para este CPF.</h2>
			<br>
			<h3> Certifique de digitar corretamente usando somente os números.</h3>
		@endif
		
		@foreach($visitante_cadastrato as $key =>$visitante)
		
		
			
		<td style="width=10px;">
			
			<a href="/reprint2?cpf={{$visitante->cpf}}&index={{$key}}" class="btn btn-info" title="Lista em PDF">
				<p>COMPROVANTE {{$key + 1}}</p>
			</a>
		</td>


		
		@endforeach
		
	</div>
</body>