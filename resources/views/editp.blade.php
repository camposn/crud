<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Professor</title>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/myjquery.js"></script>

</head>
<body>

	<div id="container">

		<div id="cabecalho"><p>Editar Professor</p><div>
		
		<div class="card">
				
			<div class="card-header">Editar Professor</div>

			<div class="card-body">

				<form method="post" action="{{action('ProfessorController@update', $id)}}">
					@csrf
					<input name="_method" type="hidden" value="PATCH">
					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" class="form-control" name="nome" value="{{$professor->nome}}" required>
							</div>
						</div>

						<div class="col-md-3">

							<div class="form-group">
								<label for="data_nascimento">Data de Nascimento:</label>
								<input type="date" class="form-control" name="data_nascimento" value="{{$professor->data_nascimento}}" required>
							</div>

						</div>

					
						<div class="col-md-3">

							<label for="salvar">Salvar:</label>
							<button type="submit" name="salvar" class="btn btn-primary btn-block">Salvar</button>
							
						</div>

					</div>
						
				</form>

			</div>

			<div class="card-footer">
				
				<a class="btn btn-primary" href="{{url('professors')}}">Lista de Professores</a>
				
			</div>


		</div>
		


	</div>

</body>
</html>