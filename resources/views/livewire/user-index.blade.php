<div>
	<div class="card">			
		<div class="card-header">
				<input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
		</div>
		@if ($users->count())		
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Creado</th>
							<th>Actualizado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->created_at}}</td>
								<td>{{$user->updated_at}}</td>

								@can('users.edit')
									<td>
										<a class="btn btn-primary float-right" href="{{route('users.assign', $user)}}">Dar Rol</a>
									</td>
									<td>
										<a class="btn btn-success float-left" href="{{route('users.edit', $user)}}">Editar</a>
									</td>
								@endcan

								@can('users.destroy')
									<td>
										<form action="{{route('users.destroy', $user)}}" class="swal-delete" method="POST">
											@method('DELETE')
											@csrf
											<button type="submit" class="btn btn-danger">Eliminar</button>
										</form>
									</td>
								@endcan
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
				
			<div class="card-footer">
				{{$users->links()}}
			</div>

		@else
			<div class="card-body">
				<strong>No existe el Usuario o Email Ingresado ...</strong>
			</div>
		@endif
	</div>
</div>