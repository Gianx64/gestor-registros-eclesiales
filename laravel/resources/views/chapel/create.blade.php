@extends('layouts.app')

@section('title', 'Crear Capilla')

@section('content_header')
    <div class="row">
        <div class="col-8"> 
            <h1>Crear Capilla</h1>
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
                @includeif('errors')
                <div class="card card-default">
                    <div class="card-body">
                        {!! Form::open(['route' => 'chapels.store', 'autocomplete' => 'off']) !!}
                            @csrf
                            @include('chapel.form')
                            {!! Form::hidden('updated_by', auth()->user()->email) !!}
                            {!! Form::submit('Agregar Registro', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
