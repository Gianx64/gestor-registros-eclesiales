@extends('layouts.app')

@section('title', 'Mostrar Usuario')

@section('content_header')
    <h1>{{ $user->name ?? 'Mostrar Usuario' }}</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $user->name ?? 'Nombre de usuario no encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electrónico:</strong>
                            {{ $user->email ?? 'Correo de usuario no encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                            {{ $user->role ?? 'Rol de usuario no encontrado' }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
