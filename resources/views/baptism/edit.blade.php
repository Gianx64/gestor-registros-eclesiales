@extends('layouts.app')

@section('title', 'Editar Bautismo')

@section('content_header')
    <div class="row">
        <div class="col-8"> 
            <h1>Editar Bautismo</h1>
        </div>
        <div class="col">
            <a class="btn btn-primary mr-2 float-right" href="{{ route('baptisms.index') }}">Volver</a>
        </div>
    </div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        {!! Form::model($baptism, ['route' => ['baptisms.update', $baptism], 
                            'method' => 'put', 'autocomplete' => 'off']) !!}
                            @csrf
                            @include('baptism.form')
                            {{-- Guardar el nombre del usaurio que modifica el registro --}}
                            {!! Form::hidden('updated_by', auth()->user()->name) !!}
                            {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
