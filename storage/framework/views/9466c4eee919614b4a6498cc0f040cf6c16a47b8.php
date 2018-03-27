<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Curso</title>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/myjquery.js"></script>

</head>
<body>

	<div id="container">

		<div id="cabecalho"><p>Editar Curso</p><div>
		
		<div class="card">
			
			
			<div class="card-header">Editar Curso</div>

			<div class="card-body">

				<form method="post" action="<?php echo e(action('CursoController@update', $id)); ?>">
					<?php echo csrf_field(); ?>
					<input name="_method" type="hidden" value="PATCH">
					<div class="row">

						<div class="col-md-9">		
							<div class="form-group">

								<label for="nome">Nome:</label>
								<input type="text" class="form-control" name="nome" value="<?php echo e($curso->nome); ?>" required>
					
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
				
				<a class="btn btn-primary" href="<?php echo e(url('cursos')); ?>">Lista de Cursos</a>
				
			</div>


		</div>
		


	</div>

</body>
</html>