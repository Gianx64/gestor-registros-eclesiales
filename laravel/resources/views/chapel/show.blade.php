@extends('layouts.app')

@section('title', 'Mostrar Capilla')

@section('content_header')
    <div class="row">
        <div class="col-8"> 
            <h1>Mostrar Capilla</h1>
        </div>
        <div class="col">
            <a class="btn btn-primary mr-2 float-right" href="{{ route('chapels.index') }}">Volver</a>
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
                            {{ $chapel->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $chapel->Direccion }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection