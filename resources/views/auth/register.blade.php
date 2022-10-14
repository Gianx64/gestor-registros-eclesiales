@extends('adminlte::page')

@section('title', 'Registrar Usuario')

@section('content_header')
    <div class="row">
        <div class="col-8">
            <h1>Registrar Usuario</h1>
        </div>
        <div class="col">
            <a class="btn btn-primary mr-2 float-right" href="{{ route('login') }}">Iniciar Sesión</a>
        </div>
    </div>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			<div class="form-group container-fluid">
				{!! Form::open(['route' => 'register', 'autocomplete' => 'off']) !!}
					@include('user.form')
					{!! Form::submit('Registrar Usuario', ['class' => 'btn btn-primary']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop