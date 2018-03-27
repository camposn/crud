<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Alunos</title>
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
      </div><br/>
     <?php endif; ?>

		<div id="cabecalho"><p>Lista de Alunos</p><div>

		<div id="cardAluno" class="card aluno">

			<div class="card-header">Alunos</div>
			
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
										<th>Cep</th>
										<th>Logradouro</th>
										<th>Bairro</th>
										<th>Número</th>
										<th>Cidade</th>
										<th>Estado</th>
										<th>Criado em</th>
										<th>Gerar PDF</th>
										<th>Alterar</th>
										<th>Excluir</th>
										
									</tr>
								</thead>

								<?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<tbody>
									<tr>
										<td><?php echo e($aluno['id']); ?></td>
										<td><?php echo e($aluno['nome']); ?></td>
										<td><?php echo e($aluno['data_nascimento']); ?></td>
										<td><?php echo e($aluno['cep']); ?></td>
										<td><?php echo e($aluno['logradouro']); ?></td>
										<td><?php echo e($aluno['bairro']); ?></td>
										<td><?php echo e($aluno['numero']); ?></td>
										<td><?php echo e($aluno['cidade']); ?></td>
										<td><?php echo e($aluno['estado']); ?></td>
										<td><?php echo e($aluno['created_at']); ?></td>

										

												<!--	<?php echo e(url('pdf')); ?>	-->		

										<td><a href="<?php echo e(action('AlunoController@show', $aluno['id'])); ?>" class="btn btn-success">PDF</a></td>
										<td><a href="<?php echo e(action('AlunoController@edit', $aluno['id'])); ?>" class="btn btn-warning">Editar</a></td>
										<td>            
										<form action="<?php echo e(action('AlunoController@destroy', $aluno['id'])); ?>" method="post">
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
				<a class="btn btn-primary" href="<?php echo e(url('alunos/create')); ?>">Novo Aluno</a>
				
			</div>


		</div>

	</div>

</body>
</html>