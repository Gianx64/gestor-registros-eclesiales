@extends('adminlte::page')

@section('title', 'Bautizos')

@section('content_header')
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	@can('baptisms.create')
		<a class="btn btn-secondary float-right" href="{{route('baptisms.create')}}">Agregar Registro</a>  
	@endcan
	<h1>Lista de Bautizos</h1>
@stop

@section('content')
	@livewire('baptism-index')
@stop

@section('js')
	@include('swal-delete')
	@livewireScripts
@endsection