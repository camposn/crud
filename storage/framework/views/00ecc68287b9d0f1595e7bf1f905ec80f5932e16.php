<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Aluno</title>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/myjquery.js"></script>

	<!-- Adicionando Javascript -->
	<script type="text/javascript" >
    
		function limpa_formulário_cep() {
				//Limpa valores do formulário de cep.
				document.getElementById('logradouro').value=("");
				document.getElementById('bairro').value=("");
				document.getElementById('cidade').value=("");
				document.getElementById('estado').value=("");
				
		}

		function meu_callback(conteudo) {
			if (!("erro" in conteudo)) {
				//Atualiza os campos com os valores.
				document.getElementById('logradouro').value=(conteudo.logradouro);
				document.getElementById('bairro').value=(conteudo.bairro);
				document.getElementById('cidade').value=(conteudo.localidade);
				document.getElementById('estado').value=(conteudo.uf);
				
			} //end if.
			else {
				//CEP não Encontrado.
				limpa_formulário_cep();
				alert("CEP não encontrado.");
			}
		}
			
		function pesquisacep(valor) {

			//Nova variável "cep" somente com dígitos.
			var cep = valor.replace(/\D/g, '');

			//Verifica se campo cep possui valor informado.
			if (cep != "") {

				//Expressão regular para validar o CEP.
				var validacep = /^[0-9]{8}$/;

				//Valida o formato do CEP.
				if(validacep.test(cep)) {

					//Preenche os campos com "..." enquanto consulta webservice.
					document.getElementById('logradouro').value="...";
					document.getElementById('bairro').value="...";
					document.getElementById('cidade').value="...";
					document.getElementById('estado').value="...";
					

					//Cria um elemento javascript.
					var script = document.createElement('script');

					//Sincroniza com o callback.
					script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

					//Insere script no documento e carrega o conteúdo.
					document.body.appendChild(script);

				} //end if.
				else {
					//cep é inválido.
					limpa_formulário_cep();
					alert("Formato de CEP inválido.");
				}
			} //end if.
			else {
				//cep sem valor, limpa formulário.
				limpa_formulário_cep();
			}
		};

    </script>

</head>
<body>

	<div id="container">

		<div id="cabecalho"><p>Editar Aluno</p><div>

		
		<div class="card">
					
			<div class="card-header">Editar Aluno</div>

			<div class="card-body">

				<form method="post" action="<?php echo e(action('AlunoController@update', $id)); ?>">
					<?php echo csrf_field(); ?>
					<input name="_method" type="hidden" value="PATCH">
					
					<div class="row">

						<div class="col-md-8">
							
							<div class="form-group">

								<label for="nome">Nome:</label>
								<input type="text" class="form-control" name="nome" value="<?php echo e($aluno->nome); ?>" required>
					
							</div>

						</div>

						<div class="col-md-4">

							<div class="form-group">

								<label for="data_nascimento">Data de Nascimento:</label>
								<input type="date" class="form-control" name="data_nascimento" value="<?php echo e($aluno->data_nascimento); ?>" required>

							</div>
						</div>

					</div>

					<div class="row">

					
						<div class="col-md-3">
							<div class="form-group">

								<label for="cep">CEP:</label>
								<input type="number" class="form-control" id="cep" name="cep" value="<?php echo e($aluno->cep); ?>" value="" size="10" maxlength="9"
               					onblur="pesquisacep(this.value);" required>
					
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">

								<label for="logradouro">Logradouro:</label>
								<input type="text" class="form-control" id="logradouro" name="logradouro" value="<?php echo e($aluno->logradouro); ?>" required>
					
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">

								<label for="bairro">Bairro:</label>
								<input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo e($aluno->bairro); ?>" required>
					
							</div>
						</div>

					</div>

					<div class="row">
						
						<div class="col-md-3">
							<div class="form-group">

								<label for="numero">Número:</label>
								<input type="number" class="form-control" name="numero" value="<?php echo e($aluno->numero); ?>" required>
					
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">

								<label for="cidade">Cidade:</label>
								<input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo e($aluno->cidade); ?>" required>
					
							</div>

						</div>


						<div class="col-md-3">
							<div class="form-group">

								<label for="estado">Número:</label>
								<input type="estado" class="form-control" id="estado" name="estado" value="<?php echo e($aluno->estado); ?>" required>
					
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
				
				<a class="btn btn-primary" href="<?php echo e(url('alunos')); ?>">Lista de Alunos</a>
				
			</div>

		</div>
		


	</div>

</body>
</html>