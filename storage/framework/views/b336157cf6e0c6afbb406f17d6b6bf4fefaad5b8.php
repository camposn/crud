<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Crud</title>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/myjquery.js"></script>

</head>
<body>

	<div id="container">

    <?php if(\Session::has('success')): ?>
      <div class="alert alert-success">
        <p><?php echo e(\Session::get('success')); ?></p>
      </div><br />
     <?php endif; ?>

		<div id="cabecalho"><p>Lista de Professores</p><div>

		<div id="cardProfessor" class="card professor">

			<div class="card-header">Professor</div>
			
			<div class="card-body">
				
				<div class="row">
					
					<div class="col">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								
								<thead>
									<tr>
										<th>Id</th>
										<th>Nome</th>
										<th>Data de Nascimento</th>
										<th>Criado em</th>
										<th>Gerar PDF</th>
										<th>Alterar</th>
										<th>Excluir</th>
										
									</tr>
								</thead>

								<?php $__currentLoopData = $professors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<tbody>
									<tr>
										<td><?php echo e($professor['id']); ?></td>
										<td><?php echo e($professor['nome']); ?></td>
										<td><?php echo e($professor['data_nascimento']); ?></td>
										<td><?php echo e($professor['created_at']); ?></td>
										<td><a href="<?php echo e(action('ProfessorController@show', $professor['id'])); ?>" class="btn btn-success">PDF</a></td>
				
										<td><a href="<?php echo e(action('ProfessorController@edit', $professor['id'])); ?>" class="btn btn-warning">Editar</a></td>
										<td>            
										<form action="<?php echo e(action('ProfessorController@destroy', $professor['id'])); ?>" method="post">
											<?php echo csrf_field(); ?>
											<input name="_method" type="hidden" value="DELETE">
											<button class="btn btn-danger" type="submit">Excluir</button>
										</form>
										</td>
									</tr>
								</tbody>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</table>
						</div>   

					</div>
				</div>

			</div>

			<div class="card-footer">
				
				<a class="btn btn-primary" href="<?php echo e(url('/')); ?>">Início</a>
				<a class="btn btn-primary" href="<?php echo e(url('professors/create')); ?>">Novo Professor</a>
				
			</div>


		</div>

	</div>

</body>
</html>