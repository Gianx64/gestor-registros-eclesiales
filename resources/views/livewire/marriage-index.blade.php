<div class="card">
	<div class="card-header">
		<input 
			wire:model="search" 
			class="form-control" 
			placeholder="Ingrese un nombre/apellido/rut del Esposo o Esposa"
		>
	</div>  
	@if ($marriages->count())
	<div class="card-body">
		<table class="table table-hover">	
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre Esposo</th>
					<th>Apellido Paterno Esposo</th>
					<th>Apellido Materno Esposo</th>
					<th>RUT Esposo</th>
					<th>Nombre Esposa</th>
					<th>Apellido Paterno Esposa</th>
					<th>Apellido Materno Esposa</th>
					<th>RUT Esposa</th>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($marriages as $marriage)
					<tr>
						<td>{{$marriage->id}}</td>
						<td>{{$marriage->NombresEsposo}}</td>
						<td>{{$marriage->ApellidoPaternoEsposo}}</td>
						<td>{{$marriage->ApellidoMaternoEsposo}}</td>
						<td>{{$marriage->RutEsposo}}</td>
						<td>{{$marriage->NombresEsposa}}</td>
						<td>{{$marriage->ApellidoPaternoEsposa}}</td>
						<td>{{$marriage->ApellidoMaternoEsposa}}</td>
						<td>{{$marriage->RutEsposa}}</td>
						@can('marriages.show')
							<td width="10px">
								<a href="{{route('marriages.show', $marriage->id)}}" class="btn btn-primary float-right btn-sm">Mostrar</a>
							</td>
						@endcan
						@can('marriages.edit')
							<td width="10px">
								<a href="{{route('marriages.edit', $marriage->id)}}" class="btn btn-success float-right btn-sm">Editar</a>
							</td>
						@endcan
						@can('marriages.destroy')
							<td width="10px">
								<form action="{{route('marriages.destroy', $marriage->id)}}" class="swal-delete" method="POST">
									@method('delete')
									@csrf
									<button type="submit" class="btn btn-danger float-right btn-sm">Eliminar</button>
								</form>
							</td>
						@endcan
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@else
		<div class="card-body">
			<strong>No existe el registro buscado</strong>
		</div>
	@endif
	<div class="card-footer">
		{{$marriages->links()}}
	</div>
</div>
