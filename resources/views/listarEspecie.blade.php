<!doctype html>
@extends('layouts.principal')
@section('title','Informações de Tanque')
@section('path')
<a href="/listar/pisciculturas">Pisciculturas</a> > <a href="/info/piscicultura/{{$piscicultura->id}}"> {{$piscicultura->nome}} </a> > <a href="/listar/tanques/{{$piscicultura->id}}">Tanques</a> > Povoar Tanque	
@stop
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Espécies
				</div>
				<div class="card-body">
					<table class="table">
						<tr>
							<th>Nome</th>
							<th>Ação</th>
						</tr>
						@foreach ($listaEspecies as $EspeciePeixe)
						<tr>
							<td>{{ $EspeciePeixe->nome}}</td>
							<td>					
								<a class="btn btn-primary" href="/povoar/tanque/{{$id}}/especie/{{$EspeciePeixe->id}}">Adicionar ao tanque</a>
							</td>
						</tr>
						@endforeach		
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@stop



