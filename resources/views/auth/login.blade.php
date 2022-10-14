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
                <div class="row mb-4">
                    {!! Form::label('remember', 'Recordar Sesión') !!}
                    {!! Form::checkbox('remember', null) !!}
                </div>
					{!! Form::submit('Iniciar Sesión', ['class' => 'btn btn-primary']) !!}
				{!! Form::close() !!}

                @if (!Route::has('password.request'))
                <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                    href="{{ route('password.request') }}">
                    {{ __('¿Olvidó su contraseña?') }}
                </a>
                @endif

                @if (!Route::has('register'))
                <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                    {{ __("¿No tiene cuenta?") }}
                    <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">
                        {{ __('Registrarse') }}
                    </a>
                </p>
                @endif
			</div>
		</div>
	</div>
@stop