<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Rut') }}
            {{ Form::text('Rut', $baptism->Rut, ['class' => 'form-control' . ($errors->has('Rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('Rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumLibro') }}
            {{ Form::text('NumLibro', $baptism->NumLibro, ['class' => 'form-control' . ($errors->has('NumLibro') ? ' is-invalid' : ''), 'placeholder' => 'Numlibro']) }}
            {!! $errors->first('NumLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumPag') }}
            {{ Form::text('NumPag', $baptism->NumPag, ['class' => 'form-control' . ($errors->has('NumPag') ? ' is-invalid' : ''), 'placeholder' => 'Numpag']) }}
            {!! $errors->first('NumPag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('Nombres', $baptism->Nombres, ['class' => 'form-control' . ($errors->has('Nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('Nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoPaterno') }}
            {{ Form::text('ApellidoPaterno', $baptism->ApellidoPaterno, ['class' => 'form-control' . ($errors->has('ApellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('ApellidoPaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoMaterno') }}
            {{ Form::text('ApellidoMaterno', $baptism->ApellidoMaterno, ['class' => 'form-control' . ($errors->has('ApellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('ApellidoMaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugNac') }}
            {{ Form::text('LugNac', $baptism->LugNac, ['class' => 'form-control' . ($errors->has('LugNac') ? ' is-invalid' : ''), 'placeholder' => 'Lugnac']) }}
            {!! $errors->first('LugNac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FecNac') }}
            {{ Form::text('FecNac', $baptism->FecNac, ['class' => 'form-control' . ($errors->has('FecNac') ? ' is-invalid' : ''), 'placeholder' => 'Fecnac']) }}
            {!! $errors->first('FecNac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PapaNombre') }}
            {{ Form::text('PapaNombre', $baptism->PapaNombre, ['class' => 'form-control' . ($errors->has('PapaNombre') ? ' is-invalid' : ''), 'placeholder' => 'Papanombre']) }}
            {!! $errors->first('PapaNombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PapaApellido') }}
            {{ Form::text('PapaApellido', $baptism->PapaApellido, ['class' => 'form-control' . ($errors->has('PapaApellido') ? ' is-invalid' : ''), 'placeholder' => 'Papaapellido']) }}
            {!! $errors->first('PapaApellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MamaNombre') }}
            {{ Form::text('MamaNombre', $baptism->MamaNombre, ['class' => 'form-control' . ($errors->has('MamaNombre') ? ' is-invalid' : ''), 'placeholder' => 'Mamanombre']) }}
            {!! $errors->first('MamaNombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MamaApellido') }}
            {{ Form::text('MamaApellido', $baptism->MamaApellido, ['class' => 'form-control' . ($errors->has('MamaApellido') ? ' is-invalid' : ''), 'placeholder' => 'Mamaapellido']) }}
            {!! $errors->first('MamaApellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Padrino') }}
            {{ Form::text('Padrino', $baptism->Padrino, ['class' => 'form-control' . ($errors->has('Padrino') ? ' is-invalid' : ''), 'placeholder' => 'Padrino']) }}
            {!! $errors->first('Padrino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Madrina') }}
            {{ Form::text('Madrina', $baptism->Madrina, ['class' => 'form-control' . ($errors->has('Madrina') ? ' is-invalid' : ''), 'placeholder' => 'Madrina']) }}
            {!! $errors->first('Madrina', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugCel') }}
            {{ Form::text('LugCel', $baptism->LugCel, ['class' => 'form-control' . ($errors->has('LugCel') ? ' is-invalid' : ''), 'placeholder' => 'Lugcel']) }}
            {!! $errors->first('LugCel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FecCel') }}
            {{ Form::text('FecCel', $baptism->FecCel, ['class' => 'form-control' . ($errors->has('FecCel') ? ' is-invalid' : ''), 'placeholder' => 'Feccel']) }}
            {!! $errors->first('FecCel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ministro') }}
            {{ Form::text('Ministro', $baptism->Ministro, ['class' => 'form-control' . ($errors->has('Ministro') ? ' is-invalid' : ''), 'placeholder' => 'Ministro']) }}
            {!! $errors->first('Ministro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Parroco') }}
            {{ Form::text('Parroco', $baptism->Parroco, ['class' => 'form-control' . ($errors->has('Parroco') ? ' is-invalid' : ''), 'placeholder' => 'Parroco']) }}
            {!! $errors->first('Parroco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Notas') }}
            {{ Form::text('Notas', $baptism->Notas, ['class' => 'form-control' . ($errors->has('Notas') ? ' is-invalid' : ''), 'placeholder' => 'Notas']) }}
            {!! $errors->first('Notas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DoyFe') }}
            {{ Form::text('DoyFe', $baptism->DoyFe, ['class' => 'form-control' . ($errors->has('DoyFe') ? ' is-invalid' : ''), 'placeholder' => 'Doyfe']) }}
            {!! $errors->first('DoyFe', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
</div>