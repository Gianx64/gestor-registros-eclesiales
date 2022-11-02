@extends('adminlte::page')

@section('title', 'Crear nuevo rol')

@section('content_header')
	<div class="row">
		<div class="col-8"> 
			<h1>Crear Nuevo Rol</h1>
		</div>
		<div class="col">
			<a class="btn btn-primary mr-2 float-right" href="{{ route('roles.index') }}">Volver</a>
		</div>
	</div>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			{!! Form::open(['route' => 'roles.store', 'autocomplete' => 'off']) !!}
                @csrf
                @include('errors')
				<div class="form-group">
					{!! Form::label('name', 'Nombre') !!}
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del rol']) !!}
				</div>
				{!! Form::submit('Crear Rol', ['class' => 'btn btn-primary mt-3']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@stop