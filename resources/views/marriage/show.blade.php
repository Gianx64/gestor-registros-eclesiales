@extends('layouts.app')

@section('title', 'Mostrar Matrimonio')

@section('content_header')
    <h1>Mostrar Matrimonio</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('marriages.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numlibro:</strong>
                            {{ $marriage->NumLibro ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numpag:</strong>
                            {{ $marriage->NumPag ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Parroquia:</strong>
                            {{ $marriage->Parroquia ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Impedimiento:</strong>
                            {{ $marriage->Impedimiento ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Rutesposo:</strong>
                            {{ $marriage->RutEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Nombresesposo:</strong>
                            {{ $marriage->NombresEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaternoesposo:</strong>
                            {{ $marriage->ApellidoPaternoEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaternoesposo:</strong>
                            {{ $marriage->ApellidoMaternoEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Estadoesposo:</strong>
                            {{ $marriage->EstadoEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Papanombresesposo:</strong>
                            {{ $marriage->PapaNombresEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Mamanombresesposo:</strong>
                            {{ $marriage->MamaNombresEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Edadesposo:</strong>
                            {{ $marriage->EdadEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Parroquiabautismoesposo:</strong>
                            {{ $marriage->ParroquiaBautismoEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numlibrobautismoesposo:</strong>
                            {{ $marriage->NumLibroBautismoEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numpagbautismoesposo:</strong>
                            {{ $marriage->NumPagBautismoEsposo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Rutesposa:</strong>
                            {{ $marriage->RutEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Nombresesposa:</strong>
                            {{ $marriage->NombresEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaternoesposa:</strong>
                            {{ $marriage->ApellidoPaternoEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaternoesposa:</strong>
                            {{ $marriage->ApellidoMaternoEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Estadoesposa:</strong>
                            {{ $marriage->EstadoEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Papanombresesposa:</strong>
                            {{ $marriage->PapaNombresEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Mamanombresesposa:</strong>
                            {{ $marriage->MamaNombresEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Edadesposa:</strong>
                            {{ $marriage->EdadEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Parroquiabautismoesposa:</strong>
                            {{ $marriage->ParroquiaBautismoEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numlibrobautismoesposa:</strong>
                            {{ $marriage->NumLibroBautismoEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Numpagbautismoesposa:</strong>
                            {{ $marriage->NumPagBautismoEsposa ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Siendotestigo:</strong>
                            {{ $marriage->SiendoTestigo ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Celebrante:</strong>
                            {{ $marriage->Celebrante ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Lugcel:</strong>
                            {{ $marriage->LugCel ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Feccel:</strong>
                            {{ $marriage->FecCel ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Parroco:</strong>
                            {{ $marriage->Parroco ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $marriage->Notas ?? 'No encontrado' }}
                        </div>
                        <div class="form-group">
                            <strong>Doyfe:</strong>
                            {{ $marriage->DoyFe ?? 'No encontrado' }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
