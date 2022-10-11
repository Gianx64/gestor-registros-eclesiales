@extends('layouts.app')

@section('title', 'Mostrar Bautismo')

@section('content_header')
    <h1>Mostrar Bautismo</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('baptisms.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $baptism->Rut ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numlibro:</strong>
                            {{ $baptism->NumLibro ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numpag:</strong>
                            {{ $baptism->NumPag ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $baptism->Nombres ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $baptism->ApellidoPaterno ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $baptism->ApellidoMaterno ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Lugnac:</strong>
                            {{ $baptism->LugNac ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Fecnac:</strong>
                            {{ $baptism->FecNac ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Papanombre:</strong>
                            {{ $baptism->PapaNombre ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Papaapellido:</strong>
                            {{ $baptism->PapaApellido ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Mamanombre:</strong>
                            {{ $baptism->MamaNombre ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Mamaapellido:</strong>
                            {{ $baptism->MamaApellido ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Padrino:</strong>
                            {{ $baptism->Padrino ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Madrina:</strong>
                            {{ $baptism->Madrina ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Lugcel:</strong>
                            {{ $baptism->LugCel ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Feccel:</strong>
                            {{ $baptism->FecCel ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Ministro:</strong>
                            {{ $baptism->Ministro ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Parroco:</strong>
                            {{ $baptism->Parroco ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $baptism->Notas ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Doyfe:</strong>
                            {{ $baptism->DoyFe ?? 'No encontrado' }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
