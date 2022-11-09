<div class="card">
  <div class="card-header">
    <h3>Bautizos</h3>
  </div>
  <div class="card-body">
    {!! Form::open(['route' => 'baptisms.importPost', 'files' => true]) !!}
      {!! Form::label('urlBackup', 'Solo permite archivos .csv') !!}
      {!! Form::file('urlBackup', ['class' => 'form-control-file']) !!}

      {!! Form::submit('Importar', ['class' => 'btn btn-success mt-2']) !!}
    {!! Form::close() !!}
  </div>
</div>