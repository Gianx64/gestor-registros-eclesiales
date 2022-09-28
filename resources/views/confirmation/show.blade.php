@extends('layouts.app')

@section('title', 'Mostrar Confirmación')

@section('content_header')
    <h1>Mostrar Confirmación</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('confirmations.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numlibro:</strong>
                            {{ $confirmation->NumLibro }}
                        </div>
                        <div class="form-group">
                            <strong>Numpag:</strong>
                            {{ $confirmation->NumPag }}
                        </div>
                        <div class="form-group">
                            <strong>Lugardecelebracion:</strong>
                            {{ $confirmation->LugardeCelebracion }}
                        </div>
                        <div class="form-group">
                            <strong>Celebrante:</strong>
                            {{ $confirmation->Celebrante }}
                        </div>
                        <div class="form-group">
                            <strong>Rutconfirmado:</strong>
                            {{ $confirmation->RutConfirmado }}
                        </div>
                        <div class="form-group">
                            <strong>Feccel:</strong>
                            {{ $confirmation->FecCel }}
                        </div>
                        <div class="form-group">
                            <strong>Confirmado:</strong>
                            {{ $confirmation->Confirmado }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $confirmation->ApellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $confirmation->ApellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Padre:</strong>
                            {{ $confirmation->Padre }}
                        </div>
                        <div class="form-group">
                            <strong>Madre:</strong>
                            {{ $confirmation->Madre }}
                        </div>
                        <div class="form-group">
                            <strong>Padrino:</strong>
                            {{ $confirmation->Padrino }}
                        </div>
                        <div class="form-group">
                            <strong>Madrina:</strong>
                            {{ $confirmation->Madrina }}
                        </div>
                        <div class="form-group">
                            <strong>Lugarbautizo:</strong>
                            {{ $confirmation->LugarBautizo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecbautizo:</strong>
                            {{ $confirmation->FecBautizo }}
                        </div>
                        <div class="form-group">
                            <strong>Numlibrobautizo:</strong>
                            {{ $confirmation->NumLibroBautizo }}
                        </div>
                        <div class="form-group">
                            <strong>Numpagbautizo:</strong>
                            {{ $confirmation->NumPagBautizo }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $confirmation->Notas }}
                        </div>
                        <div class="form-group">
                            <strong>Parroco:</strong>
                            {{ $confirmation->Parroco }}
                        </div>
                        <div class="form-group">
                            <strong>Doyfe:</strong>
                            {{ $confirmation->DoyFe }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Modificacion:</strong>
                            {{ $confirmation->Usuario_modificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $confirmation->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
