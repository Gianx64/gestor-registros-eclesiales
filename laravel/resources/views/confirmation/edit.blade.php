@extends('layouts.app')

@section('title', 'Editar Confirmación')

@section('content_header')
    <div class="row">
        <div class="col-8"> 
            <h1>Editar Confirmación</h1>
        </div>
        <div class="col">
            <a class="btn btn-primary mr-2 float-right" href="{{ route('confirmations.index') }}">Volver</a>
        </div>
    </div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                @includeif('errors')
                <div class="card card-default">
                    <div class="card-body">
                        {!! Form::model($confirmation, ['route' => ['confirmations.update', $confirmation], 
                            'method' => 'put', 'autocomplete' => 'off']) !!}
                            @csrf
                            @include('confirmation.form')
                            {!! Form::hidden('updated_by', auth()->user()->email) !!}
                            {!! Form::submit('Actualizar Registro', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
