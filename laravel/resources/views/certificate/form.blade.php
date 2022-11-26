<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Nombre:') }}
            {{ $certificate->Nombre }}
        </div>
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::textarea('Codigo', $certificate->Codigo, ['class' => 'form-control' . ($errors->has('Codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('Codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tags') }}
            <p>Estos son los tags que tienen que estar presentes en el código para ser reemplazados por los valores del registro eclesial. Por favor, asegúrese que los tags están presentes y bien escritos.</p>
            {{ $certificate->Tags }}
        </div>
    </div>
</div>