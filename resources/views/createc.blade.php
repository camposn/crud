<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Criar Curso</title>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/myjquery.js"></script>

</head>
<body>

	<div id="container">

		<div id="cabecalho"><p>Criar Curso</p><div>
		
		<div class="card">
			
			<div class="card-header">Criar Curso</div>

			<div class="card-body">

				<form method="post" action="{{url('cursos')}}" enctype="multipart/form-data">
				@csrf
					
					<div class="row">
						
						<div class="col-md-9">
							<div class="form-group">

								<label for="nome">Nome do Curso:</label>
								<input type="text" class="form-control" id="nome" placeholder="Digite o nome do curso" name="nome" required>
					
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
				
				<a class="btn btn-primary" href="{{url('cursos')}}">Lista de Cursos</a>
				
			</div>


		</div>
		


	</div>

</body>
</html>