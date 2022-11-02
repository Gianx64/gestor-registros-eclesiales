<div class="card">
	<div class="card-header">
		<input wire:model="search" class="form-control" placeholder="Ingrese un nombre/apellido/rut/padrino/madrina de la persona">
	</div>
	@if ($confirmations->count())
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
				@foreach ($confirmations as $confirmation)
					<tr>
						<td>{{$confirmation->id}}</td>
						<td>{{$confirmation->Nombres}}</td>
						<td>{{$confirmation->ApellidoPaterno}}</td>
						<td>{{$confirmation->ApellidoMaterno}}</td>
						<td>{{$confirmation->Rut}}</td>
						<td>{{$confirmation->Padrino}}</td>
						<td>{{$confirmation->Madrina}}</td>
						@can('confirmations.show')
							<td width="10px">
								<a href="{{route('confirmations.show', $confirmation->id)}}" class="btn btn-primary float-right">Mostrar</a>
							</td>
						@endcan
						@can('confirmations.edit')
							<td width="10px">
								<a href="{{route('confirmations.edit', $confirmation->id)}}" class="btn btn-success float-right">Editar</a>
							</td>
						@endcan
						@can('confirmations.destroy')
							<td width="10px">
								<form action="{{route('confirmations.destroy', $confirmation->id)}}" class="swal-delete" method="POST">
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
		{{$confirmations->links()}}
	</div>
</div>