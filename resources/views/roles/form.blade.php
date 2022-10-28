<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del rol']) !!}
</div>
<h1 class="h3 mt-4 mb-4">Lista de Permisos</h1>
@foreach ($permissions as $permission)
	<div>
		<label>
			{!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
			{!! Form::label($permission->description) !!}
		</label>
	</div>
@endforeach