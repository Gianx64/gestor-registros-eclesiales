@extends('layouts.app')

@section('template_title')
    {{ $baptism->name ?? 'Show Baptism' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Baptism</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('baptisms.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $baptism->Rut }}
                        </div>
                        <div class="form-group">
                            <strong>Numlibro:</strong>
                            {{ $baptism->NumLibro }}
                        </div>
                        <div class="form-group">
                            <strong>Numpag:</strong>
                            {{ $baptism->NumPag }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $baptism->Nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $baptism->ApellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $baptism->ApellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Lugardenacimiento:</strong>
                            {{ $baptism->LugardeNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Fecnac:</strong>
                            {{ $baptism->FecNac }}
                        </div>
                        <div class="form-group">
                            <strong>Papanombre:</strong>
                            {{ $baptism->PapaNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Papaapellido:</strong>
                            {{ $baptism->PapaApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Mamanombre:</strong>
                            {{ $baptism->MamaNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Mamaapellido:</strong>
                            {{ $baptism->MamaApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Padrino:</strong>
                            {{ $baptism->Padrino }}
                        </div>
                        <div class="form-group">
                            <strong>Madrina:</strong>
                            {{ $baptism->Madrina }}
                        </div>
                        <div class="form-group">
                            <strong>Lugardecelebracion:</strong>
                            {{ $baptism->LugardeCelebracion }}
                        </div>
                        <div class="form-group">
                            <strong>Feccel:</strong>
                            {{ $baptism->FecCel }}
                        </div>
                        <div class="form-group">
                            <strong>Ministro:</strong>
                            {{ $baptism->Ministro }}
                        </div>
                        <div class="form-group">
                            <strong>Parroco:</strong>
                            {{ $baptism->Parroco }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $baptism->Notas }}
                        </div>
                        <div class="form-group">
                            <strong>Doyfe:</strong>
                            {{ $baptism->DoyFe }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Modificacion:</strong>
                            {{ $baptism->Usuario_modificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $baptism->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
