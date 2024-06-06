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
    
    


	<form action="/reprint" method = "GET">



	<div style= "margin: 20%">

		<h2 style = "aling-text: center">Para consultar o seu agendamento digite o seu CPF</h2>
		<div>
			<label for="">CPF</label>
			<input type="text" name='cpf' id="cpf" >
        </div>
        
		<button class="btn btn-info"
		> consultar</button>
	</div>
		
	</form>



    </body>

