@extends('adminlte::page')

@section('title', 'Registrar Usuario')

@section('content_header')
  <div class="row">
      <div class="col-8"> 
          <h1>Registrar Usuario</h1>
      </div>
      <div class="col">
          <a class="btn btn-primary mr-2 float-right" href="{{ route('users.index') }}">Volver</a>
      </div>
  </div>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			<div class="form-group container-fluid">
				{!! Form::open(['route' => 'users.store', 'autocomplete' => 'off']) !!}
					@include('errors')
					@include('user.form')
					<h4>Listado de Roles</h4>
					@foreach ($roles as $role)
						<div>
						{!! Form::label($role->id, $role->name) !!}
						{!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
						</div>
					@endforeach	
					{!! Form::submit('Registrar Usuario', ['class' => 'btn btn-primary']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop