@extends('adminlte::page')

@section('title', 'Importar')

@section('content_header')
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
  <h1>Importar</h1>
@stop

@section('content')
	@include('errors')
	@include('tableErrors')
	<div class="container">
		<div class="row">
			@can('marriages.import')
			<div class="col-6">
				@include('imports.partials.formImportMarriage')
			</div>
			@endcan
			@can('confirmations.import')
			<div class="col-6">
				@include('imports.partials.formImportConfirmation')
			</div>
			@endcan
			@can('baptisms.import')
			<div class="col-6">
				@include('imports.partials.formImportBaptism')
			</div>
			@endcan
		</div>
	</div>
@stop