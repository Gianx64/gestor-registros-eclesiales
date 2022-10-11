<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Rut') }}
            {{ Form::text('Rut', $confirmation->Rut, ['class' => 'form-control' . ($errors->has('Rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('Rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
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
            {{ Form::label('Nombres') }}
            {{ Form::text('Nombres', $confirmation->Nombres, ['class' => 'form-control' . ($errors->has('Nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('Nombres', '<div class="invalid-feedback">:message</div>') !!}
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
            {{ Form::label('PapaNombre') }}
            {{ Form::text('PapaNombre', $confirmation->PapaNombre, ['class' => 'form-control' . ($errors->has('PapaNombre') ? ' is-invalid' : ''), 'placeholder' => 'Papanombre']) }}
            {!! $errors->first('PapaNombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PapaApellido') }}
            {{ Form::text('PapaApellido', $confirmation->PapaApellido, ['class' => 'form-control' . ($errors->has('PapaApellido') ? ' is-invalid' : ''), 'placeholder' => 'Papaapellido']) }}
            {!! $errors->first('PapaApellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MamaNombre') }}
            {{ Form::text('MamaNombre', $confirmation->MamaNombre, ['class' => 'form-control' . ($errors->has('MamaNombre') ? ' is-invalid' : ''), 'placeholder' => 'Mamanombre']) }}
            {!! $errors->first('MamaNombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MamaApellido') }}
            {{ Form::text('MamaApellido', $confirmation->MamaApellido, ['class' => 'form-control' . ($errors->has('MamaApellido') ? ' is-invalid' : ''), 'placeholder' => 'Mamaapellido']) }}
            {!! $errors->first('MamaApellido', '<div class="invalid-feedback">:message</div>') !!}
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
            {{ Form::label('Celebrante') }}
            {{ Form::text('Celebrante', $confirmation->Celebrante, ['class' => 'form-control' . ($errors->has('Celebrante') ? ' is-invalid' : ''), 'placeholder' => 'Celebrante']) }}
            {!! $errors->first('Celebrante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugCel') }}
            {{ Form::text('LugCel', $confirmation->LugCel, ['class' => 'form-control' . ($errors->has('LugCel') ? ' is-invalid' : ''), 'placeholder' => 'Lugcel']) }}
            {!! $errors->first('LugCel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FecCel') }}
            {{ Form::text('FecCel', $confirmation->FecCel, ['class' => 'form-control' . ($errors->has('FecCel') ? ' is-invalid' : ''), 'placeholder' => 'Feccel']) }}
            {!! $errors->first('FecCel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Parroco') }}
            {{ Form::text('Parroco', $confirmation->Parroco, ['class' => 'form-control' . ($errors->has('Parroco') ? ' is-invalid' : ''), 'placeholder' => 'Parroco']) }}
            {!! $errors->first('Parroco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Notas') }}
            {{ Form::text('Notas', $confirmation->Notas, ['class' => 'form-control' . ($errors->has('Notas') ? ' is-invalid' : ''), 'placeholder' => 'Notas']) }}
            {!! $errors->first('Notas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DoyFe') }}
            {{ Form::text('DoyFe', $confirmation->DoyFe, ['class' => 'form-control' . ($errors->has('DoyFe') ? ' is-invalid' : ''), 'placeholder' => 'Doyfe']) }}
            {!! $errors->first('DoyFe', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
</div>