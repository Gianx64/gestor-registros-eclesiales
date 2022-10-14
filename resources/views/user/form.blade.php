<div class="row mb-4">
    {!! Form::label('name', 'Nombre del Usuario') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  <div class="row mb-4">
    {!! Form::label('email', 'Email del Usuario') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}                
  </div>
  <div class="row mb-4">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
  </div>
  <div class="row mb-4">
    {!! Form::label('password_confirmation', 'Confirmar Contraseña') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
  </div>