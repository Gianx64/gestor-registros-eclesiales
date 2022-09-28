<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NumLibro') }}
            {{ Form::text('NumLibro', $confirmation->NumLibro, ['class' => 'form-control' . ($errors->has('NumLibro') ? ' is-invalid' : ''), 'placeholder' => 'Numlibro']) }}
            {!! $errors->first('NumLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumPag') }}
            {{ Form::text('NumPag', $confirmation->NumPag, ['class' => 'form-control' . ($errors->has('NumPag') ? ' is-invalid' : ''), 'placeholder' => 'Numpag']) }}
            {!! $errors->first('NumPag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugardeCelebracion') }}
            {{ Form::text('LugardeCelebracion', $confirmation->LugardeCelebracion, ['class' => 'form-control' . ($errors->has('LugardeCelebracion') ? ' is-invalid' : ''), 'placeholder' => 'Lugardecelebracion']) }}
            {!! $errors->first('LugardeCelebracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celebrante') }}
            {{ Form::text('Celebrante', $confirmation->Celebrante, ['class' => 'form-control' . ($errors->has('Celebrante') ? ' is-invalid' : ''), 'placeholder' => 'Celebrante']) }}
            {!! $errors->first('Celebrante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RutConfirmado') }}
            {{ Form::text('RutConfirmado', $confirmation->RutConfirmado, ['class' => 'form-control' . ($errors->has('RutConfirmado') ? ' is-invalid' : ''), 'placeholder' => 'Rutconfirmado']) }}
            {!! $errors->first('RutConfirmado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FecCel') }}
            {{ Form::text('FecCel', $confirmation->FecCel, ['class' => 'form-control' . ($errors->has('FecCel') ? ' is-invalid' : ''), 'placeholder' => 'Feccel']) }}
            {!! $errors->first('FecCel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Confirmado') }}
            {{ Form::text('Confirmado', $confirmation->Confirmado, ['class' => 'form-control' . ($errors->has('Confirmado') ? ' is-invalid' : ''), 'placeholder' => 'Confirmado']) }}
            {!! $errors->first('Confirmado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoPaterno') }}
            {{ Form::text('ApellidoPaterno', $confirmation->ApellidoPaterno, ['class' => 'form-control' . ($errors->has('ApellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('ApellidoPaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoMaterno') }}
            {{ Form::text('ApellidoMaterno', $confirmation->ApellidoMaterno, ['class' => 'form-control' . ($errors->has('ApellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('ApellidoMaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Padre') }}
            {{ Form::text('Padre', $confirmation->Padre, ['class' => 'form-control' . ($errors->has('Padre') ? ' is-invalid' : ''), 'placeholder' => 'Padre']) }}
            {!! $errors->first('Padre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Madre') }}
            {{ Form::text('Madre', $confirmation->Madre, ['class' => 'form-control' . ($errors->has('Madre') ? ' is-invalid' : ''), 'placeholder' => 'Madre']) }}
            {!! $errors->first('Madre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Padrino') }}
            {{ Form::text('Padrino', $confirmation->Padrino, ['class' => 'form-control' . ($errors->has('Padrino') ? ' is-invalid' : ''), 'placeholder' => 'Padrino']) }}
            {!! $errors->first('Padrino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Madrina') }}
            {{ Form::text('Madrina', $confirmation->Madrina, ['class' => 'form-control' . ($errors->has('Madrina') ? ' is-invalid' : ''), 'placeholder' => 'Madrina']) }}
            {!! $errors->first('Madrina', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugarBautizo') }}
            {{ Form::text('LugarBautizo', $confirmation->LugarBautizo, ['class' => 'form-control' . ($errors->has('LugarBautizo') ? ' is-invalid' : ''), 'placeholder' => 'Lugarbautizo']) }}
            {!! $errors->first('LugarBautizo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FecBautizo') }}
            {{ Form::text('FecBautizo', $confirmation->FecBautizo, ['class' => 'form-control' . ($errors->has('FecBautizo') ? ' is-invalid' : ''), 'placeholder' => 'Fecbautizo']) }}
            {!! $errors->first('FecBautizo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumLibroBautizo') }}
            {{ Form::text('NumLibroBautizo', $confirmation->NumLibroBautizo, ['class' => 'form-control' . ($errors->has('NumLibroBautizo') ? ' is-invalid' : ''), 'placeholder' => 'Numlibrobautizo']) }}
            {!! $errors->first('NumLibroBautizo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumPagBautizo') }}
            {{ Form::text('NumPagBautizo', $confirmation->NumPagBautizo, ['class' => 'form-control' . ($errors->has('NumPagBautizo') ? ' is-invalid' : ''), 'placeholder' => 'Numpagbautizo']) }}
            {!! $errors->first('NumPagBautizo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Notas') }}
            {{ Form::text('Notas', $confirmation->Notas, ['class' => 'form-control' . ($errors->has('Notas') ? ' is-invalid' : ''), 'placeholder' => 'Notas']) }}
            {!! $errors->first('Notas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Parroco') }}
            {{ Form::text('Parroco', $confirmation->Parroco, ['class' => 'form-control' . ($errors->has('Parroco') ? ' is-invalid' : ''), 'placeholder' => 'Parroco']) }}
            {!! $errors->first('Parroco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DoyFe') }}
            {{ Form::text('DoyFe', $confirmation->DoyFe, ['class' => 'form-control' . ($errors->has('DoyFe') ? ' is-invalid' : ''), 'placeholder' => 'Doyfe']) }}
            {!! $errors->first('DoyFe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Usuario_modificacion') }}
            {{ Form::text('Usuario_modificacion', $confirmation->Usuario_modificacion, ['class' => 'form-control' . ($errors->has('Usuario_modificacion') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Modificacion']) }}
            {!! $errors->first('Usuario_modificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $confirmation->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>