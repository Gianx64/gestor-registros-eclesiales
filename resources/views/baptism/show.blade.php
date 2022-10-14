@extends('adminlte::page')

@section('title', 'Mostrar Bautizo')

@section('content_header')
    <div class="row">
        <div class="col-8"> 
            <h1>
                Registro Bautizo de {{$baptism->Nombres}} {{$baptism->ApellidoPaterno}} {{$baptism->ApellidoMaterno}}
            </h1>
        </div>
        <div class="col">
            <a class="btn btn-primary mr-2 float-right" href="{{ route('baptisms.index') }}">Volver</a>
            <a class="btn btn-success mr-2 float-right" href="{{route('descargarPDFBautizo', $baptism)}}">Crear certificado</a>
        </div>
    </div>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- N° de libro, registro y pagina -->
			<table class="table table-bordered mt-4 mb-4">
				<tr>
					<th>Número de Libro</th>
					<th>Número de Página</th>
					<th>Lugar de Celebración</th>
				</tr>
				<tr>
					<td>{{$baptism->NumLibro}}</td>
					<td>{{$baptism->NumPag}}</td>
					<td>{{$baptism->LugCel}}</td>
				</tr>
			</table>
			<!-- Lugar de celebración, Celebrante y Fecha de celebración -->
			<table class="table table-bordered mb-4">
				<tr>
					<th>Celebrante</th>
					<th>Fecha de Celebración</th>
				</tr>
				<tr>
					<td>{{$baptism->Ministro}}</td>
					<td>{{$baptism->FecCel}}</td>
				</tr>
			</table>		
			<!-- Datos del Bautizado, Nombres, apellidos, fecha de nacimiento
						RUT -->
			<table class="table table-bordered mb-4">
				<tr>
					<th>Nombres</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
				</tr>
				<tr>
					<td>{{$baptism->Nombres}}</td>
					<td>{{$baptism->ApellidoPaterno}}</td>
					<td>{{$baptism->ApellidoMaterno}}</td>
				</tr>
			</table>		
			<table class="table table-bordered mb-4">
				<tr>
					<th>RUT</th>
					<th>Nacido en</th>
					<th>Dia de Nacimiento</th>
				</tr>
				<tr>
					<td>{{$baptism->Rut}}</td>
					<td>{{$baptism->LugNac}}</td>
					<td>{{$baptism->FecNac}}</td>
				</tr>
			</table>		
			<!-- Nombres y Apellidos del padre y la madre -->
			<table class="table table-bordered mb-4">
				<tr>
					<th>Nombre del Padre</th>
					<th>Apellido del Padre</th>
				</tr>
				<tr>
					<td>{{$baptism->PapaNombre}}</td>
					<td>{{$baptism->PapaApellido}}</td>
				</tr>
			</table>
			<table class="table table-bordered mb-4">
				<tr>
					<th>Nombre de la Madre</th>
					<th>Apellido de la Madre</th>
				</tr>
				<tr>
					<td>{{$baptism->MamaNombre}}</td>
					<td>{{$baptism->MamaApellido}}</td>
				</tr>
			</table>
			<!-- Padrino y Madrina -->
			<table class="table table-bordered mb-4">
					<tr>
						<th>Padrino</th>
						<th>Madrina</th>
					</tr>
					<tr>
						<td>{{$baptism->Padrino}}</td>
						<td>{{$baptism->Madrina}}</td>
					</tr>
			</table>
			<!-- Notas -->
			<table class="table table-bordered mb-4">
					<tr>
						<th>Notas</th>
					</tr>
					<tr>
						<td>{{$baptism->Notas}}</td>
					</tr>
			</table>
			<!-- Doy fe y Parroco-->
			<table class="table table-bordered mb-4">
					<tr>
						<th>Doy Fe</th>
						<th>Parroco</th>
					</tr>
					<tr>
						<td>{{$baptism->DoyFe}}</td>
						<td>{{$baptism->Parroco}}</td>
					</tr>
			</table>
		</div>
	</div>
@stop