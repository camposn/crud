<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cursos</title>
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
      </div><br />
     @endif

		<div id="cabecalho"><p>Lista de Cursos</p><div>

		<div id="cardCurso" class="card curso">

			<div class="card-header">Cursos</div>
			
			<div class="card-body">
				
				<div class="row">
					
					<div class="col">
                    	<div class="table-responsive">
							<table class="table table-bordered table-hover">
						
								<thead>
									<tr>
										<th>Id</th>
										<th>Nome</th>
										<th>Criado em</th>
										<th>Gerar PDF</th>
										<th>Alterar</th>
										<th>Excluir</th>
										
									</tr>
								</thead>

								@foreach($cursos as $curso)

								<tbody>
									<tr>
										<td>{{$curso['id']}}</td>
										<td>{{$curso['nome']}}</td>
										<td>{{$curso['created_at']}}</td>
										<td><a href="{{action('CursoController@show', $curso['id'])}}" class="btn btn-success">PDF</a></td>
										<td><a href="{{action('CursoController@edit', $curso['id'])}}" class="btn btn-warning">Editar</a></td>
										<td>            
										<form action="{{action('CursoController@destroy', $curso['id'])}}" method="post">
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
				<a class="btn btn-primary" href="{{url('cursos/create')}}">Novo Curso</a>
				
			</div>


		</div>

	</div>

</body>
</html>