@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	@can('users.create')
		<a class="btn btn-secondary float-right" href="{{route('users.create')}}">Crear Usuario</a>
	@endcan
	<h1>Lista de Usuarios</h1>
@stop

@section('content')
	@livewire("user-index")
@stop

@section('js')
	@include('swal-delete')
	@livewireScripts
@endsection
