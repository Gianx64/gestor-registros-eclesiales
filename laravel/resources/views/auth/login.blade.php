@extends('layouts.app')

@section('title', 'Inicio de Sesión')

@section('content_header')
    <div class="row">
        <div class="col-8">
            <h1>Inicio de Sesión</h1>
        </div>
        <div class="col">
            <a class="btn btn-primary mr-2 float-right" href="{{ route('register') }}">Registrarse</a>
        </div>
    </div>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			<div class="form-group container-fluid">
				{!! Form::open(['route' => 'login', 'autocomplete' => 'on']) !!}
                <div class="row mb-4">
                    {!! Form::label('email', 'Email del Usuario') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}                
                </div>
                <div class="row mb-4">
                    {!! Form::label('password', 'Contraseña') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <div>
                    {!! Form::checkbox('remember', null) !!}
                    {!! Form::label('remember', 'Recordar Sesión') !!}
                </div>
					{!! Form::submit('Iniciar Sesión', ['class' => 'btn btn-primary']) !!}
				{!! Form::close() !!}

                @if (Route::has('password.request' && false))
                <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                    href="{{ route('password.request') }}">
                    {{ __('¿Olvidó su contraseña?') }}
                </a>
                @endif
			</div>
		</div>
	</div>
@stop