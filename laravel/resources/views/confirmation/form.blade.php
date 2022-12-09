<!-- N° de libro y pagina -->
<div class="form-group mt-4">
	<div class="row">
		<div class="col-3">
			{!! Form::label('NumLibro', 'Número de Libro') !!}
			{!! Form::number('NumLibro', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-3">
			{!! Form::label('NumPag', 'Número de Pagina') !!}
			{!! Form::number('NumPag', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('LugCel', 'Lugar de Celebración') !!}
			{!! Form::select('LugCel',  $chapels, null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!-- Lugar de celebración, Celebrante y Fecha de celebración -->
<div class="form-group mt-4">
	<div class="row">
		<div class="col-8">
			{!! Form::label('Celebrante', 'Celebrante') !!}
			{!! Form::text('Celebrante', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('FecCel', 'Fecha de Celebración') !!}
			{!! Form::date('FecCel', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!-- Datos del Confirmado, Nombres, apellidos, RUT -->
<div class="form-group mt-4">
	<div class="row">
		<div class="col-6">
			{!! Form::label('Nombres', 'Nombres') !!}
			{!! Form::text('Nombres', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('ApellidoPaterno', 'Apellido Paterno') !!}
			{!! Form::text('ApellidoPaterno', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-6">
			{!! Form::label('ApellidoMaterno', 'Apellido Materno') !!}
			{!! Form::text('ApellidoMaterno', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('Rut', 'RUT') !!}
			{!! Form::text('Rut', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!-- Nombres y Apellidos del padre, madre, padrino y madrina -->
<div class="form-group mt-4">
	<div class="row">
		<div class="col-3">
			{!! Form::label('PapaNombre', 'Nombres del Padre') !!}
			{!! Form::text('PapaNombre', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-3">
			{!! Form::label('PapaApellido', 'Apellidos del Padre') !!}
			{!! Form::text('PapaApellido', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-3">
			{!! Form::label('MamaNombre', 'Nombres de la Madre') !!}
			{!! Form::text('MamaNombre', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-3">
			{!! Form::label('MamaApellido', 'Apellidos de la Madre') !!}
			{!! Form::text('MamaApellido', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-6">
			{!! Form::label('Padrino', 'Padrino') !!}
			{!! Form::text('Padrino', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('Madrina', 'Madrina') !!}
			{!! Form::text('Madrina', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!-- Lugar de bautizo, Fecha de bautizo, número libro y pagina de bautizo -->
<div class="form-group mt-4">
	<div class="row">
		<div class="col-8">
			{!! Form::label('LugBautizo', 'Lugar de Bautizo') !!}
			{!! Form::text('LugBautizo', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-4">
			{!! Form::label('FecBautizo', 'Fecha del Bautizo') !!}
			{!! Form::date('FecBautizo', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-6">
			{!! Form::label('NumLibroBautizo', 'Número de libro de Bautizo') !!}
			{!! Form::number('NumLibroBautizo', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('NumPagBautizo', 'Número de pagina de bautizo') !!}
			{!! Form::number('NumPagBautizo', null, ['class' => 'form-control']) !!}    
		</div>
	</div>
</div>
<!-- Notas -->
<div class="form-group mt-4">
	<div class="row">
		<div class="col-12">
			{!! Form::label('Notas', 'Notas') !!}
			{!! Form::textarea('Notas', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!-- Doy fe y Parroco-->
<div class="form-group mt-4">
	<div class="row">
		<div class="col-6">
			{!! Form::label('DoyFe', 'Doy Fe') !!}
			{!! Form::select('DoyFe',  $parishpriests, null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-6">
			{!! Form::label('Parroco', 'Parroco') !!}
			{!! Form::select('Parroco',  $parishpriests, null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>