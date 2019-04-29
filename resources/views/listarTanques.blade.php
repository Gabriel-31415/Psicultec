<!doctype html>
@extends('layouts.principal')
@section('title','Listar Tanques')
@section('path')
	<a href="/listar/pisciculturas">Pisciculturas</a> > <a href="/info/piscicultura/{{$piscicultura->id}}"> {{$piscicultura->nome}} </a> > Listagem de tanques
@stop
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
						<div class="menu-direita-logout">
							Tanques							
							<a href = "/cadastrar/tanque/{{$piscicultura->id}}">
                    			<img src="{{asset('images/add.png')}}" style = "margin-left: 15px; margin-right: -10px " height="25" width="25" align="right">
							</a>
						</div>
					
				</div>
				<div class="card-body">
					<div>
						<table class="table">							
							@foreach ($tanques as $tanque)
							<tr>
							<td><a href="/tanque/{{$tanque->id}}/detalhes">{{ $tanque->nome }}</a></td>
								<td>
									@if($tanque->status != "manutencao")
										@if($tanque->status == "livre")
											<a class="btn btn-primary" href="/listar/especies/{{$tanque->id}}">Povoar</a>
										@endif
										<a class="btn btn-primary" href="/tanque/{{$tanque->id}}/cadastrar/qualidadeAgua">Qualidade da água</a>
										@if($tanque->ciclos[count($tanque->ciclos)-1]->povoamento != null)
											<a class="btn btn-primary" href="/tanque/{{$tanque->id}}/cadastrar/biometria">Biometria</a>
											@if(count($tanque->ciclos[count($tanque->ciclos)-1]->qualidade_agua->temperaturas) !=0 && count($tanque->ciclos[count($tanque->ciclos)-1]->biometrias) != 0 )
												<a class="btn btn-primary" href="/tanque/{{$tanque->id}}/racao">Ração</a>
											@endif
											@if($tanque->status == 'producao')
												<a class="btn btn-primary" href="/tanque/{{$tanque->id}}/pesca">Pescar</a>
											@endif
										@endif
										<a class="btn btn-primary" href="/relatorios/tanque/{{$tanque->id}}">Relatorios</a>
									@else
										<a class="btn btn-primary" href="/tanque/{{$tanque->id}}/manutencao">Finalizar manutenção</a>
									@endif

								</td>
							</tr>
							@endforeach		
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

