@extends('adminlte::page')

@section('title', 'Mostrar Confirmación')

@section('content_header')
	<div class="row">
		<div class="col-8">
			<h1>
				Registro Confirmación de {{$confirmation->Nombres}} {{$confirmation->ApellidoPaterno}} {{$confirmation->ApellidoMaterno}}
			</h1>
		</div>
		<div class="col">
            <a class="btn btn-primary mr-2 float-right" href="{{ route('confirmations.index') }}">Volver</a>
			<a class="btn btn-success mr-2 float-right" href="{{route('confirmation.pdf', $confirmation)}}">Certificado PDF</a>
		</div>
	</div>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			<!-- N° de libro, registro y pagina -->
			<table class="table table-bordered mb-4 mt-4">
				<tr>
					<th>N° Libro</th>
					<th>N° Pagina</th>
					<th>Lugar de Celebración</th>
				</tr>
				<tr>
					<td>{{$confirmation->NumLibro}}</td>
					<td>{{$confirmation->NumPag}}</td>
					<td>{{$confirmation->LugCel}}</td>
				</tr>
			</table>
			<!-- Lugar de celebración, Celebrante y Fecha de celebración -->
			<table class="table table-bordered mb-4">
				<tr>
					<th>Celebrante</th>                    
					<th>Fecha de Celebración</th>
				</tr>
				<tr>
					<td>{{$confirmation->Celebrante}}</td>
					<td>{{$confirmation->FecCel}}</td>
				</tr>
			</table>
			<!-- Datos del confirmado, Nombres, apellidos, fecha de nacimiento y RUT -->
			<table class="table table-bordered mb-4">
				<tr>
					<th>Nombres</th>
					<th>Apellido Paterno</th>                    
					<th>Apellido Materno</th>
					<th>RUT</th>
				</tr>
				<tr>
					<td>{{$confirmation->Confirmado}}</td>
					<td>{{$confirmation->ApellidoPaterno}}</td>
					<td>{{$confirmation->ApellidoMaterno}}</td>
					<td>{{$confirmation->RutConfirmado}}</td>
				</tr>
			</table>
			<!-- Nombres y Apellidos del padre y la madre -->
			<table class="table table-bordered mb-4">
				<tr>
					<th>Nombres del Padre</th>
					<th>Apellidos del Padre</th>
					<th>Nombres de la Madre</th>
					<th>Apellidos de la Madre</th>
				</tr>
				<tr>
					<td>{{$confirmation->PapaNombre}}</td>
					<td>{{$confirmation->PapaApellido}}</td>
					<td>{{$confirmation->MamaNombre}}</td>
					<td>{{$confirmation->MamaApellido}}</td>
				</tr>
			</table>
			<!-- Padrino y Madrina -->
			<table class="table table-bordered mb-4">
				<tr>
					<th>Padrino</th>
					<th>Madrina</th>
				</tr>
				<tr>
					<td>{{$confirmation->Padrino}}</td>
					<td>{{$confirmation->Madrina}}</td>
				</tr>
			</table>
			<!-- Datos de bautizo, lugar, fecha, numero y pagina del libro -->
			<table class="table table-bordered mb-4">
				<tr>
					<th>Lugar del Bautizo</th>
					<th>Fecha del Bautizo</th>
					<th>Numero de libro Bautizo</th>
					<th>Numero de pagina Bautizo</th>
				</tr>
				<tr>
					<td>{{$confirmation->LugBautizo}}</td>
					<td>{{$confirmation->FecBautizo}}</td>
					<td>{{$confirmation->NumLibroBautizo}}</td>
					<td>{{$confirmation->NumPagBautizo}}</td>
				</tr>
			</table>				
			<!-- Notas -->
			<table class="table table-bordered mb-4">
				<tr>
					<th>Notas</th>
				</tr>
				<tr>
					<td>{{$confirmation->Notas}}</td>
				</tr>
			</table>
			<!-- Doy fe y Parroco-->
			<table class="table table-bordered mb-4">
				<tr>
					<th>Doy Fe</th>
					<th>Parroco</th>
				</tr>
				<tr>
					<td>{{$confirmation->DoyFe}}</td>
					<td>{{$confirmation->Parroco}}</td>
				</tr>
			</table>
		</div>
	</div>
@stop