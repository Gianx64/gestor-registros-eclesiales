<!-- N° de libro, pagina, Fecha de celebración y Impedimiento -->
<div class="form-group mt-4">
	<div class="row">
		<div class="col-2">
			{!! Form::label('NumLibro', 'Número de Libro') !!}
			{!! Form::number('NumLibro', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-2">
			{!! Form::label('NumPag', 'Número de Pagina') !!}
			{!! Form::number('NumPag', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-2">
			{!! Form::label('FecCel', 'Fecha de Celebración') !!}
			{!! Form::date('FecCel', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('Impedimento', 'Impedimento') !!}
			{!! Form::text('Impedimento', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>  
<!-- Lugar de celebración, Parroquia y Celebrante -->
<div class="form-group">
	<div class="row">
		<div class="col-4">
			{!! Form::label('LugCel', 'Lugar de Celebración') !!}
			{!! Form::text('LugCel', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('Parroquia', 'Parroquia') !!}
			{!! Form::text('Parroquia', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('Celebrante', 'Celebrante') !!}
			{!! Form::text('Celebrante', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!--  -->
<div class="form-group">
	<div class="row">
	</div>
</div>
<!-- Datos del Esposo -->
<div class="form-group">
	<h1 class="h3 mt-4 mb-4">Esposo</h1>
	<div class="row">
		<div class="col-4">
			{!! Form::label('NombresEsposo', 'Nombres') !!}
			{!! Form::text('NombresEsposo', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('ApellidoPaternoEsposo', 'Apellido Paterno') !!}
			{!! Form::text('ApellidoPaternoEsposo', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('ApellidoMaternoEsposo', 'Apellido Materno') !!}
			{!! Form::text('ApellidoMaternoEsposo', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-4">
			{!! Form::label('RutEsposo', 'RUT') !!}
			{!! Form::text('RutEsposo', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('EstadoEsposo', 'Estado') !!}
			{!! Form::text('EstadoEsposo', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('EdadEsposo', 'Edad') !!}
			{!! Form::number('EdadEsposo', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-6">
			{!! Form::label('PapaNombresEsposo', 'Padre') !!}
			{!! Form::text('PapaNombresEsposo', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('MamaNombresEsposo', 'Madre') !!}
			{!! Form::text('MamaNombresEsposo', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-6">
			{!! Form::label('ParroquiaBautismoEsposo', 'Parroquia del Bautizo') !!}
			{!! Form::text('ParroquiaBautismoEsposo', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-3">
			{!! Form::label('NumLibroBautismoEsposo', 'Número de Libro de Bautizo') !!}
			{!! Form::number('NumLibroBautismoEsposo', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-3">
			{!! Form::label('NumPagBautismoEsposo', 'Número de Pagina de Bautizo') !!}
			{!! Form::number('NumPagBautismoEsposo', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!-- Datos de la Esposa -->
<div class="form-group">
	<h1 class="h3 mt-4 mb-4">Esposa</h1>
	<div class="row">
		<div class="col-4">
			{!! Form::label('NombresEsposa', 'Nombres') !!}
			{!! Form::text('NombresEsposa', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('ApellidoPaternoEsposa', 'Apellido Paterno') !!}
			{!! Form::text('ApellidoPaternoEsposa', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('ApellidoMaternoEsposa', 'Apellido Materno') !!}
			{!! Form::text('ApellidoMaternoEsposa', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-4">
			{!! Form::label('RutEsposa', 'RUT') !!}
			{!! Form::text('RutEsposa', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('EstadoEsposa', 'Estado') !!}
			{!! Form::text('EstadoEsposa', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('EdadEsposa', 'Edad') !!}
			{!! Form::number('EdadEsposa', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-6">
			{!! Form::label('PapaNombresEsposa', 'Padre') !!}
			{!! Form::text('PapaNombresEsposa', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('MamaNombresEsposa', 'Madre') !!}
			{!! Form::text('MamaNombresEsposa', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-6">
			{!! Form::label('ParroquiaBautismoEsposa', 'Parroquia del Bautizo') !!}
			{!! Form::text('ParroquiaBautismoEsposa', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-3">
			{!! Form::label('NumLibroBautismoEsposa', 'Número de Libro de Bautizo') !!}
			{!! Form::number('NumLibroBautismoEsposa', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-3">
			{!! Form::label('NumPagBautismoEsposa', 'Número de Pagina de Bautizo') !!}
			{!! Form::number('NumPagBautismoEsposa', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!-- Siendo Testigo y Notas -->
<div class="form-group">
	<div class="row">
		<div class="col-6">
			{!! Form::label('SiendoTestigo', 'Siendo Testigo') !!}
			{!! Form::textarea('SiendoTestigo', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('Notas', 'Notas') !!}
			{!! Form::textarea('Notas', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!-- Pagina Partida, Doy fe y Parroco-->
<div class="form-group">
	<div class="row">
		<div class="col-6">
			{!! Form::label('DoyFe', 'Doy Fe') !!}
			{!! Form::text('DoyFe', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('Parroco', 'Parroco') !!}
			{!! Form::text('Parroco', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>