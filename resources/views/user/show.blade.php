@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Mostrar Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name ?? 'Nombre de usuario no encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email ?? 'Correo de usuario no encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Role:</strong>
                            {{ $user->role ?? 'Rol de usuario no encontrado' }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
