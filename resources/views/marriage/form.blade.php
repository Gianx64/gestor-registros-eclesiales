<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NumLibro') }}
            {{ Form::text('NumLibro', $marriage->NumLibro, ['class' => 'form-control' . ($errors->has('NumLibro') ? ' is-invalid' : ''), 'placeholder' => 'Numlibro']) }}
            {!! $errors->first('NumLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumPag') }}
            {{ Form::text('NumPag', $marriage->NumPag, ['class' => 'form-control' . ($errors->has('NumPag') ? ' is-invalid' : ''), 'placeholder' => 'Numpag']) }}
            {!! $errors->first('NumPag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Parroquia') }}
            {{ Form::text('Parroquia', $marriage->Parroquia, ['class' => 'form-control' . ($errors->has('Parroquia') ? ' is-invalid' : ''), 'placeholder' => 'Parroquia']) }}
            {!! $errors->first('Parroquia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Impedimiento') }}
            {{ Form::text('Impedimiento', $marriage->Impedimiento, ['class' => 'form-control' . ($errors->has('Impedimiento') ? ' is-invalid' : ''), 'placeholder' => 'Impedimiento']) }}
            {!! $errors->first('Impedimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celebrante') }}
            {{ Form::text('Celebrante', $marriage->Celebrante, ['class' => 'form-control' . ($errors->has('Celebrante') ? ' is-invalid' : ''), 'placeholder' => 'Celebrante']) }}
            {!! $errors->first('Celebrante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RutEsposo') }}
            {{ Form::text('RutEsposo', $marriage->RutEsposo, ['class' => 'form-control' . ($errors->has('RutEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Rutesposo']) }}
            {!! $errors->first('RutEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombresEsposo') }}
            {{ Form::text('NombresEsposo', $marriage->NombresEsposo, ['class' => 'form-control' . ($errors->has('NombresEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Nombresesposo']) }}
            {!! $errors->first('NombresEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoPaternoEsposo') }}
            {{ Form::text('ApellidoPaternoEsposo', $marriage->ApellidoPaternoEsposo, ['class' => 'form-control' . ($errors->has('ApellidoPaternoEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaternoesposo']) }}
            {!! $errors->first('ApellidoPaternoEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoMaternoEsposo') }}
            {{ Form::text('ApellidoMaternoEsposo', $marriage->ApellidoMaternoEsposo, ['class' => 'form-control' . ($errors->has('ApellidoMaternoEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaternoesposo']) }}
            {!! $errors->first('ApellidoMaternoEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EstadoEsposo') }}
            {{ Form::text('EstadoEsposo', $marriage->EstadoEsposo, ['class' => 'form-control' . ($errors->has('EstadoEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Estadoesposo']) }}
            {!! $errors->first('EstadoEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PapaNombresEsposo') }}
            {{ Form::text('PapaNombresEsposo', $marriage->PapaNombresEsposo, ['class' => 'form-control' . ($errors->has('PapaNombresEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Papanombresesposo']) }}
            {!! $errors->first('PapaNombresEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MamaNombresEsposo') }}
            {{ Form::text('MamaNombresEsposo', $marriage->MamaNombresEsposo, ['class' => 'form-control' . ($errors->has('MamaNombresEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Mamanombresesposo']) }}
            {!! $errors->first('MamaNombresEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EdadEsposo') }}
            {{ Form::text('EdadEsposo', $marriage->EdadEsposo, ['class' => 'form-control' . ($errors->has('EdadEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Edadesposo']) }}
            {!! $errors->first('EdadEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ParroquiaBautismoEsposo') }}
            {{ Form::text('ParroquiaBautismoEsposo', $marriage->ParroquiaBautismoEsposo, ['class' => 'form-control' . ($errors->has('ParroquiaBautismoEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Parroquiabautismoesposo']) }}
            {!! $errors->first('ParroquiaBautismoEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumLibroBautismoEsposo') }}
            {{ Form::text('NumLibroBautismoEsposo', $marriage->NumLibroBautismoEsposo, ['class' => 'form-control' . ($errors->has('NumLibroBautismoEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Numlibrobautismoesposo']) }}
            {!! $errors->first('NumLibroBautismoEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumPagBautismoEsposo') }}
            {{ Form::text('NumPagBautismoEsposo', $marriage->NumPagBautismoEsposo, ['class' => 'form-control' . ($errors->has('NumPagBautismoEsposo') ? ' is-invalid' : ''), 'placeholder' => 'Numpagbautismoesposo']) }}
            {!! $errors->first('NumPagBautismoEsposo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RutEsposa') }}
            {{ Form::text('RutEsposa', $marriage->RutEsposa, ['class' => 'form-control' . ($errors->has('RutEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Rutesposa']) }}
            {!! $errors->first('RutEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombresEsposa') }}
            {{ Form::text('NombresEsposa', $marriage->NombresEsposa, ['class' => 'form-control' . ($errors->has('NombresEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Nombresesposa']) }}
            {!! $errors->first('NombresEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoPaternoEsposa') }}
            {{ Form::text('ApellidoPaternoEsposa', $marriage->ApellidoPaternoEsposa, ['class' => 'form-control' . ($errors->has('ApellidoPaternoEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaternoesposa']) }}
            {!! $errors->first('ApellidoPaternoEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoMaternoEsposa') }}
            {{ Form::text('ApellidoMaternoEsposa', $marriage->ApellidoMaternoEsposa, ['class' => 'form-control' . ($errors->has('ApellidoMaternoEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaternoesposa']) }}
            {!! $errors->first('ApellidoMaternoEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EstadoEsposa') }}
            {{ Form::text('EstadoEsposa', $marriage->EstadoEsposa, ['class' => 'form-control' . ($errors->has('EstadoEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Estadoesposa']) }}
            {!! $errors->first('EstadoEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PapaNombresEsposa') }}
            {{ Form::text('PapaNombresEsposa', $marriage->PapaNombresEsposa, ['class' => 'form-control' . ($errors->has('PapaNombresEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Papanombresesposa']) }}
            {!! $errors->first('PapaNombresEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MamaNombresEsposa') }}
            {{ Form::text('MamaNombresEsposa', $marriage->MamaNombresEsposa, ['class' => 'form-control' . ($errors->has('MamaNombresEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Mamanombresesposa']) }}
            {!! $errors->first('MamaNombresEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EdadEsposa') }}
            {{ Form::text('EdadEsposa', $marriage->EdadEsposa, ['class' => 'form-control' . ($errors->has('EdadEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Edadesposa']) }}
            {!! $errors->first('EdadEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ParroquiaBautismoEsposa') }}
            {{ Form::text('ParroquiaBautismoEsposa', $marriage->ParroquiaBautismoEsposa, ['class' => 'form-control' . ($errors->has('ParroquiaBautismoEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Parroquiabautismoesposa']) }}
            {!! $errors->first('ParroquiaBautismoEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumLibroBautismoEsposa') }}
            {{ Form::text('NumLibroBautismoEsposa', $marriage->NumLibroBautismoEsposa, ['class' => 'form-control' . ($errors->has('NumLibroBautismoEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Numlibrobautismoesposa']) }}
            {!! $errors->first('NumLibroBautismoEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumPagBautismoEsposa') }}
            {{ Form::text('NumPagBautismoEsposa', $marriage->NumPagBautismoEsposa, ['class' => 'form-control' . ($errors->has('NumPagBautismoEsposa') ? ' is-invalid' : ''), 'placeholder' => 'Numpagbautismoesposa']) }}
            {!! $errors->first('NumPagBautismoEsposa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SiendoTestigo') }}
            {{ Form::text('SiendoTestigo', $marriage->SiendoTestigo, ['class' => 'form-control' . ($errors->has('SiendoTestigo') ? ' is-invalid' : ''), 'placeholder' => 'Siendotestigo']) }}
            {!! $errors->first('SiendoTestigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugCel') }}
            {{ Form::text('LugCel', $marriage->LugCel, ['class' => 'form-control' . ($errors->has('LugCel') ? ' is-invalid' : ''), 'placeholder' => 'Lugcel']) }}
            {!! $errors->first('LugCel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FecCel') }}
            {{ Form::text('FecCel', $marriage->FecCel, ['class' => 'form-control' . ($errors->has('FecCel') ? ' is-invalid' : ''), 'placeholder' => 'Feccel']) }}
            {!! $errors->first('FecCel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Parroco') }}
            {{ Form::text('Parroco', $marriage->Parroco, ['class' => 'form-control' . ($errors->has('Parroco') ? ' is-invalid' : ''), 'placeholder' => 'Parroco']) }}
            {!! $errors->first('Parroco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Notas') }}
            {{ Form::text('Notas', $marriage->Notas, ['class' => 'form-control' . ($errors->has('Notas') ? ' is-invalid' : ''), 'placeholder' => 'Notas']) }}
            {!! $errors->first('Notas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DoyFe') }}
            {{ Form::text('DoyFe', $marriage->DoyFe, ['class' => 'form-control' . ($errors->has('DoyFe') ? ' is-invalid' : ''), 'placeholder' => 'Doyfe']) }}
            {!! $errors->first('DoyFe', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
</div>