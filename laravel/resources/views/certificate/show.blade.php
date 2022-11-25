@extends('layouts.app')

@section('title', 'Mostrar Certificado')

@section('content_header')
    <div class="row">
        <div class="col-8"> 
            <h1>Mostrar Certificado</h1>
        </div>
        <div class="col">
            <a class="btn btn-primary mr-2 float-right" href="{{ route('certificates.index') }}">Volver</a>
        </div>
    </div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $certificate->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $certificate->Codigo }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection