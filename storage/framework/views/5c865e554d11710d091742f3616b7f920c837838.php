<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Criar Professor</title>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/myjquery.js"></script>

</head>
<body>

	<div id="container">

		<div id="cabecalho"><p>Criar Professor</p><div>
		
		<div class="card">
			
			<div class="card-header">Criar Professor</div>

			<div class="card-body">

				<form method="post" action="<?php echo e(url('professors')); ?>" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					
					<div class="row">

						<div class="col-md-6">
							
							<div class="form-group">

								<label for="nome">Nome do Professor:</label>
								<input type="text" class="form-control" id="nome" placeholder="Digite o nome do professor" name="nome" required>
					
							</div>

						</div>

						<div class="col-md-3">

							<div class="form-group">
								<label for="data_nascimento">Data de Nascimento:</label>
								<input type="date" class="form-control" id="data_nascimento" placeholder="Data de nascimento" name="data_nascimento" required>
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
				
				<a class="btn btn-primary" href="<?php echo e(url('professors')); ?>">Lista de Professores</a>
				
			</div>

		</div>
		


	</div>

</body>
</html>