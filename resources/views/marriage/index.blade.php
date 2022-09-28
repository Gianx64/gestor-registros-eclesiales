@extends('layouts.app')

@section('title', 'Matrimonios')

@section('content_header')
    <h1>Matrimonios</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('marriages.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Matrimonio') }}
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
										<th>Numlibro</th>
										<th>Numpag</th>
										<th>Parroquia</th>
										<th>Nombres Esposo</th>
										<th>Apellido Paterno Esposo</th>
										<th>Apellido Materno Esposo</th>
										<th>Estado Esposo</th>
										<th>Nombres Esposa</th>
										<th>Apellido Paterno Esposa</th>
										<th>Apellido Materno Esposa</th>
										<th>Estado Esposa</th>
										<th>Pagina Partida</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marriages as $marriage)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $marriage->NumLibro }}</td>
											<td>{{ $marriage->NumPag }}</td>
											<td>{{ $marriage->Parroquia }}</td>
											<td>{{ $marriage->NombresEsposo }}</td>
											<td>{{ $marriage->ApellidoPaternoEsposo }}</td>
											<td>{{ $marriage->ApellidoMaternoEsposo }}</td>
											<td>{{ $marriage->EstadoEsposo }}</td>
											<td>{{ $marriage->NombresEsposa }}</td>
											<td>{{ $marriage->ApellidoPaternoEsposa }}</td>
											<td>{{ $marriage->ApellidoMaternoEsposa }}</td>
											<td>{{ $marriage->EstadoEsposa }}</td>
											<td>{{ $marriage->PaginaPartida }}</td>
											<td>{{ $marriage->Usuario_modificacion }}</td>

                                            <td>
                                                <form action="{{ route('marriages.destroy',$marriage->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('marriages.show',$marriage->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('marriages.edit',$marriage->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $marriages->links() !!}
            </div>
        </div>
    </div>
@endsection
