<div class="card">
	<div class="card-header">
		<input 
			wire:model="search" 
			class="form-control" 
			placeholder="Ingrese un nombre/apellido/rut/padrino/madrina de la persona"
		>
	</div>
	@if ($baptisms->count())
	<div class="card-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombres</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>RUT</th>
					<th>Padrino</th>
					<th>Madrina</th>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($baptisms as $baptism)
					<tr>
						<td>{{$baptism->id}}</td>
						<td>{{$baptism->Nombres}}</td>
						<td>{{$baptism->ApellidoPaterno}}</td>
						<td>{{$baptism->ApellidoMaterno}}</td>
						<td>{{$baptism->Rut}}</td>
						<td>{{$baptism->Padrino}}</td>
						<td>{{$baptism->Madrina}}</td>
						@can('baptisms.show')
							<td width="10px">
								<a class="btn btn-primary float-right" href="{{route('baptisms.show', $baptism->id)}}">Mostrar</a>
							</td>
						@endcan
						@can('baptisms.destroy')
							<td width="10px">
								<form action="{{route('baptisms.destroy', $baptism)}}" class="swal-delete" method="POST">
									@method('delete')
									@csrf
									<button type="submit" class="btn btn-danger float-right">Eliminar</button>
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
		{{$baptisms->links()}}
	</div>
</div>