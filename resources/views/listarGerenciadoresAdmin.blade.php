@extends('layouts.principal')
@section('title','Gerenciadores')
@section('path')
	<a href="{{ route("piscicultura.listar") }}">Pisciculturas</a> > <a href="{{ route("piscicultura.informar", ["id" => $piscicultura->id]) }}"> {{$piscicultura->nome}} </a> > Gerenciadores
	
@stop
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Gerenciador
				</div>
				<div class="card-body">
					<ul>
						<div class="card-header">
							Administrador
						</div>
						<table class="table">
								<tr>
									<td>{{ $admin->name }}</td>					
								</tr>
							</table>
							<div class="card-header">
								Gerenciador
							</div>
							<table class="table">
								@foreach ($gerenciadores as $gerenciador)
								<tr>
									<td>{{ $gerenciador->name }}</td>
									<td><a class="btn btn-danger"  href="{{ route("gerenciador.apagar", ["user_id" => $gerenciador->id,"id"=>$piscicultura_id]) }}">Remover</td>
								</tr>
								@endforeach
							</table>
						
						
						<br>
						<br>
						<a class="btn btn-primary" href="{{ route("gerenciador.adicionar", ["id"=>$piscicultura_id]) }}">Adicionar novo gerenciador</a>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>	
@stop

