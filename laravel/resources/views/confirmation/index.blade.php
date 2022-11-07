@extends('adminlte::page')

@section('title', 'Confirmaciones')

@section('content_header')
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	@can('confirmations.create')
		<a href="{{route('confirmations.create')}}" class="btn btn-secondary float-right">Agregar Registro</a>
	@endcan
	@can('confirmations.export')
	<a class="btn btn-success float-right" href="{{route('confirmations.export')}}">Exportar Confirmaciones</a>
	@endcan
	<h1>Lista de Confirmaciones</h1>
@stop

@section('content')
	@livewire('confirmation-index')
@stop

@section('js')
	@include('swal-delete')
	@livewireScripts
@endsection