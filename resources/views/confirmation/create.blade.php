@extends('layouts.app')

@section('title', 'Crear Confirmación')

@section('content_header')
    <div class="row">
        <div class="col-8"> 
            <h1>Crear Confirmación</h1>
        </div>
        <div class="col">
            <a class="btn btn-primary mr-2 float-right" href="{{ route('confirmations.index') }}">Volver</a>
        </div>
    </div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        {!! Form::open(['route' => 'confirmations.store', 'autocomplete' => 'off']) !!}
                            @csrf
                            @include('errors')
                            @include('confirmation.form')
                            {{-- Guardar el nombre del usaurio que modifica el registro --}}
                            {!! Form::hidden('updated_by', auth()->user()->name) !!}
                            {!! Form::submit('Agregar Registro', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
