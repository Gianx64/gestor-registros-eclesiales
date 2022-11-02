@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	@can('roles.create')
		<a class="btn btn-secondary float-right" href="{{route('roles.create')}}">Nuevo Rol</a>
	@endcan
	<h1>Lista de Roles</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Role</th>
						<th colspan="2"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($roles as $role)
						<tr>
							<td>{{$role->id}}</td>
							<td>{{$role->name}}</td>
							@can('roles.edit')
								<td width="10px">
									<a href="{{route('roles.edit', $role)}}" class="btn btn-primary">Editar</a>
								</td>
							@endcan
							@can('roles.destroy')
								<td width="10px">
									<form action="{{route('roles.destroy', $role)}}" class="swal-delete" method="post">
										@method('delete')
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
	</div>
@stop

@section('js')
	@include('swal-delete')
	@livewireScripts
@endsection