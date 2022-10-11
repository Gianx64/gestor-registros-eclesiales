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
                            <a class="btn btn-primary" href="{{ route('confirmations.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $confirmation->Rut ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numlibro:</strong>
                            {{ $confirmation->NumLibro ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numpag:</strong>
                            {{ $confirmation->NumPag ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $confirmation->Nombres ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $confirmation->ApellidoPaterno ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $confirmation->ApellidoMaterno ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Papanombre:</strong>
                            {{ $confirmation->PapaNombre ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Papaapellido:</strong>
                            {{ $confirmation->PapaApellido ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Mamanombre:</strong>
                            {{ $confirmation->MamaNombre ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Mamaapellido:</strong>
                            {{ $confirmation->MamaApellido ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Padrino:</strong>
                            {{ $confirmation->Padrino ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Madrina:</strong>
                            {{ $confirmation->Madrina ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Lugarbautizo:</strong>
                            {{ $confirmation->LugarBautizo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Fecbautizo:</strong>
                            {{ $confirmation->FecBautizo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numlibrobautizo:</strong>
                            {{ $confirmation->NumLibroBautizo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numpagbautizo:</strong>
                            {{ $confirmation->NumPagBautizo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Celebrante:</strong>
                            {{ $confirmation->Celebrante ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Lugcel:</strong>
                            {{ $confirmation->LugCel ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Feccel:</strong>
                            {{ $confirmation->FecCel ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Parroco:</strong>
                            {{ $confirmation->Parroco ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $confirmation->Notas ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Doyfe:</strong>
                            {{ $confirmation->DoyFe ?? 'No encontrado' }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
