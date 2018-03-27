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

    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br/>
     @endif

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

								@foreach($alunos as $aluno)

								<tbody>
									<tr>
										<td>{{$aluno['id']}}</td>
										<td>{{$aluno['nome']}}</td>
										<td>{{$aluno['data_nascimento']}}</td>
										<td>{{$aluno['cep']}}</td>
										<td>{{$aluno['logradouro']}}</td>
										<td>{{$aluno['bairro']}}</td>
										<td>{{$aluno['numero']}}</td>
										<td>{{$aluno['cidade']}}</td>
										<td>{{$aluno['estado']}}</td>
										<td>{{$aluno['created_at']}}</td>

										

												<!--	{{url('pdf')}}	-->		

										<td><a href="{{action('AlunoController@show', $aluno['id'])}}" class="btn btn-success">PDF</a></td>
										<td><a href="{{action('AlunoController@edit', $aluno['id'])}}" class="btn btn-warning">Editar</a></td>
										<td>            
										<form action="{{action('AlunoController@destroy', $aluno['id'])}}" method="post">
											@csrf
											<input name="_method" type="hidden" value="DELETE">
											<button class="btn btn-danger" type="submit">Excluir</button>
										</form>
										</td>
									</tr>
								</tbody>
							
								@endforeach

							


							</table>
						</div>

					</div>
				</div>

			</div>

			<div class="card-footer">
				<a class="btn btn-primary" href="{{url('/')}}">Início</a>
				<a class="btn btn-primary" href="{{url('alunos/create')}}">Novo Aluno</a>
				
			</div>


		</div>

	</div>

</body>
</html>