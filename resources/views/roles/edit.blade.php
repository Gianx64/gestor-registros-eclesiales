@extends('adminlte::page')

@section('title', 'Editar rol')

@section('content_header')
	<div class="row">
		<div class="col-8"> 
			<h1>Editar Rol</h1>
		</div>
		<div class="col">
			<a class="btn btn-primary mr-2 float-right" href="{{ route('roles.index') }}">Volver</a>
		</div>
	</div>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			{!! Form::model($role, ['route' => ['roles.update', $role], 'method' => 'put']) !!}
                @csrf
				@include('errors')
				@include('roles.form')
				{!! Form::submit('Actualizar Rol', ['class' => 'btn btn-primary mt-3']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@stop