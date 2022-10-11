@extends('layouts.app')

@section('title', 'Bautismos')

@section('content_header')
    <h1>Bautismos</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('baptisms.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Bautizo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
										<th>Rut</th>
										<th>Nombres</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Lugar de Celebración</th>
										<th>Fecha de Celebración</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($baptisms as $baptism)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $baptism->Rut }}</td>
											<td>{{ $baptism->Nombres }}</td>
											<td>{{ $baptism->ApellidoPaterno }}</td>
											<td>{{ $baptism->ApellidoMaterno }}</td>
											<td>{{ $baptism->LugCel }}</td>
											<td>{{ $baptism->FecCel }}</td>

                                            <td>
                                                <form action="{{ route('baptisms.destroy',$baptism->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('baptisms.show',$baptism->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('baptisms.edit',$baptism->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $baptisms->links() !!}
            </div>
        </div>
    </div>
@endsection
