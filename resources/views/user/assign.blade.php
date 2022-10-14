@extends('adminlte::page')

@section('title', 'Asignar Rol')

@section('content_header')
  <div class="row">
      <div class="col-8"> 
          <h1>Asignar Rol</h1>
      </div>
      <div class="col">
          <a class="btn btn-primary mr-2 float-right" href="{{ route('users.index') }}">Volver</a>
      </div>
  </div>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			<p class="h5">Nombre:</p>
			<p class="form-control">{{$user->name}}</p>
			{!! Form::model($user, ['route' => ['users.assign', $user], 'method' => 'put']) !!}
			<h4>Listado de Roles</h4>
			@foreach ($roles as $role)
				<div>
				{!! Form::label($role->id, $role->name) !!}
				{!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
				</div>
			@endforeach	
			{!! Form::submit('Ingresar', ['class' => 'btn btn-primary mt-2']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@stop
{!! Form::radio($role->id, null) !!}