@extends('adminlte::page')

@section('title', 'Matrimonios')

@section('content_header')
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	@can('marriages.create')
		<a class="btn btn-secondary float-right" href="{{route('marriages.create')}}">Agregar Registro</a>  
	@endcan
	<h1>Lista de Matrimonios</h1>
@stop

@section('content')
	@livewire('marriage-index')
@stop

@section('js')
	@include('swal-delete')
	@livewireScripts
@endsection