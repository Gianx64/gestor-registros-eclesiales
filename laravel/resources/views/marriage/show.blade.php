@extends('adminlte::page')

@section('title', 'Mostrar Matrimonio')

@section('content_header')
	<div class="row">
		<div class="col-8">   
			<h1>
				Registro Matrimonio de {{$marriage->NombresEsposo}} {{$marriage->ApellidoPaternoEsposo}} 
				{{$marriage->ApellidoMaternoEsposo}} y {{$marriage->NombresEsposa}} {{$marriage->ApellidoPaternoEsposa}} 
				{{$marriage->ApellidoMaternoEsposa}}
			</h1>
		</div>
		<div class="col">   
			<a class="btn btn-primary mr-2 float-right" href="{{ route('marriages.index') }}">Volver</a>
			<a class="btn btn-success mr-2 float-right" href="{{route('marriage.pdf', $marriage)}}">Certificado PDF</a>
		</div>
	</div>
@stop

@section('content')
	<div class="card">
		<div class="card-body">
			{{-- N° de libro y pagina --}}
			<table class="table table-bordered mb-4 mt-4">
				<tr>
					<th>N° Libro</th>
					<th>N° Pagina</th>
				</tr>
				<tr>
					<td>{{$marriage->NumLibro}}</td>
					<td>{{$marriage->NumPag}}</td>
				</tr>
			</table>				
			{{-- Lugar de celebración, Celebrante y Fecha de celebración --}}
			<table class="table table-bordered mb-4">
				<tr>
					<th>Lugar de Celebración</th>
					<th>Parroquia</th>                    
					<th>Fecha de Celebración</th>
				</tr>
				<tr>
					<td>{{$marriage->LugCel}}</td>
					<td>{{$marriage->Parroquia}}</td>
					<td>{{$marriage->FecCel}}</td>
				</tr>
			</table>				
			{{-- Impedimento y Celebrante --}}
			<table class="table table-bordered mb-4">
				<tr>
					<th>Impedimento</th>
					<th>Celebrante</th>
				</tr>
				<tr>
					<td>{{$marriage->Impedimento}}</td>
					<td>{{$marriage->Celebrante}}</td>
				</tr>
			</table>
			{{-- Datos Esposo --}}
			<table class="table table-bordered mb-4">
				<h1 class="h3 mb-4">Esposo</h1>
				<tr>
					<th>Nombres</th>
					<th>Apellido Paterno</th>                    
					<th>Apellido Materno</th>
				</tr>
				<tr>
					<td>{{$marriage->NombresEsposo}}</td>
					<td>{{$marriage->ApellidoPaternoEsposo}}</td>
					<td>{{$marriage->ApellidoMaternoEsposo}}</td>	
				</tr>
				<tr>
					<th>RUT</th>
					<th>Estado</th>
					<th>Edad</th>
				</tr>
				<tr>
					<td>{{$marriage->RutEsposo}}</td>
					<td>{{$marriage->EstadoEsposo}}</td>
					<td>{{$marriage->EdadEsposo}}</td>
				</tr>
				<tr>
					<th>Padre</th>
					<th>Madre</th>
					<th>Parroquia Bautismo</th>
				</tr>
				<tr>
					<td>{{$marriage->PapaNombresEsposo}}</td>
					<td>{{$marriage->MamaNombresEsposo}}</td>
					<td>{{$marriage->ParroquiaBautismoEsposo}}</td>
				</tr>
				<tr>
					<th>Numero de Libro de Bautismo</th>
					<th>Numero de Pagina de Bautismo</th>
				</tr>
				<tr>
					<td>{{$marriage->NumLibroBautismoEsposo}}</td>
					<td>{{$marriage->NumPagBautismoEsposo}}</td>
				</tr>
			</table>
			{{-- Datos Esposa --}}
			<table class="table table-bordered mb-4">
				<h1 class="h3 mb-4">Esposa</h1>
				<tr>
					<th>Nombres</th>
					<th>Apellido Paterno</th>                    
					<th>Apellido Materno</th>
				</tr>
				<tr>
					<td>{{$marriage->NombresEsposa}}</td>
					<td>{{$marriage->ApellidoPaternoEsposa}}</td>
					<td>{{$marriage->ApellidoMaternoEsposa}}</td>
				</tr>
				<tr>
					<th>RUT</th>
					<th>Estado</th>
					<th>Edad</th>
				</tr>
				<tr>
					<td>{{$marriage->RutEsposa}}</td>
					<td>{{$marriage->EstadoEsposa}}</td>
					<td>{{$marriage->EdadEsposa}}</td>
				</tr>
				<tr>
					<th>Padre</th>
					<th>Madre</th>
					<th>Parroquia Bautismo</th>
				</tr>
				<tr>
					<td>{{$marriage->PapaNombresEsposa}}</td>
					<td>{{$marriage->MamaNombresEsposa}}</td>
					<td>{{$marriage->ParroquiaBautismoEsposa}}</td>
				</tr>
				<tr>
					<th>Numero de Libro de Bautismo</th>
					<th>Numero de Pagina de Bautismo</th>
				</tr>
				<tr>
					<td>{{$marriage->NumLibroBautismoEsposa}}</td>
					<td>{{$marriage->NumPagBautismoEsposa}}</td>
				</tr>
			</table>
			{{-- Siendo testigo --}}
			<table class="table table-bordered mb-4">
				<tr>
					<th>Siendo Testigos</th>
				</tr>
				<tr>
					<td>{{$marriage->SiendoTestigo}}</td>
				</tr>
			</table>
			{{-- Notas --}}
			<table class="table table-bordered mb-4">
				<tr>
					<th>Notas</th>
				</tr>
				<tr>
					<td>{{$marriage->Notas}}</td>
				</tr>
			</table>
			{{-- Pagina Partida, Parroco y Doy Fe --}} 
			<table class="table table-bordered mb-4">
				<tr>
					<th>Parroco</th>
					<th>Doy Fe</th>
				</tr>
				<tr>
					<td>{{$marriage->Parroco}}</td>
					<td>{{$marriage->DoyFe}}</td>
				</tr>
			</table>
		</div>
	</div>
@stop