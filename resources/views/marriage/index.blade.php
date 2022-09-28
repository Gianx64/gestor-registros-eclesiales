@extends('layouts.app')

@section('template_title')
    Marriage
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Marriage') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('marriages.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Numlibro</th>
										<th>Numpag</th>
										<th>Ciudadcelebracion</th>
										<th>Lugardecelebracion</th>
										<th>Parroquia</th>
										<th>Fechacelebracion</th>
										<th>Impedimiento</th>
										<th>Celebrante</th>
										<th>Rutesposo</th>
										<th>Nombresesposo</th>
										<th>Apellidopaternoesposo</th>
										<th>Apellidomaternoesposo</th>
										<th>Estadoesposo</th>
										<th>Papanombresesposo</th>
										<th>Mamanombresesposo</th>
										<th>Edadesposo</th>
										<th>Parroquiabautismoesposo</th>
										<th>Numlibrobautismoesposo</th>
										<th>Numpagbautismoesposo</th>
										<th>Rutesposa</th>
										<th>Nombresesposa</th>
										<th>Apellidopaternoesposa</th>
										<th>Apellidomaternoesposa</th>
										<th>Estadoesposa</th>
										<th>Papanombresesposa</th>
										<th>Mamanombresesposa</th>
										<th>Edadesposa</th>
										<th>Parroquiabautismoesposa</th>
										<th>Numlibrobautismoesposa</th>
										<th>Numpagbautismoesposa</th>
										<th>Siendotestigo</th>
										<th>Paginapartida</th>
										<th>Notas</th>
										<th>Parroco</th>
										<th>Doyfe</th>
										<th>Usuario Modificacion</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marriages as $marriage)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $marriage->NumLibro }}</td>
											<td>{{ $marriage->NumPag }}</td>
											<td>{{ $marriage->CiudadCelebracion }}</td>
											<td>{{ $marriage->LugardeCelebracion }}</td>
											<td>{{ $marriage->Parroquia }}</td>
											<td>{{ $marriage->FechaCelebracion }}</td>
											<td>{{ $marriage->Impedimiento }}</td>
											<td>{{ $marriage->Celebrante }}</td>
											<td>{{ $marriage->RutEsposo }}</td>
											<td>{{ $marriage->NombresEsposo }}</td>
											<td>{{ $marriage->ApellidoPaternoEsposo }}</td>
											<td>{{ $marriage->ApellidoMaternoEsposo }}</td>
											<td>{{ $marriage->EstadoEsposo }}</td>
											<td>{{ $marriage->PapaNombresEsposo }}</td>
											<td>{{ $marriage->MamaNombresEsposo }}</td>
											<td>{{ $marriage->EdadEsposo }}</td>
											<td>{{ $marriage->ParroquiaBautismoEsposo }}</td>
											<td>{{ $marriage->NumLibroBautismoEsposo }}</td>
											<td>{{ $marriage->NumPagBautismoEsposo }}</td>
											<td>{{ $marriage->RutEsposa }}</td>
											<td>{{ $marriage->NombresEsposa }}</td>
											<td>{{ $marriage->ApellidoPaternoEsposa }}</td>
											<td>{{ $marriage->ApellidoMaternoEsposa }}</td>
											<td>{{ $marriage->EstadoEsposa }}</td>
											<td>{{ $marriage->PapaNombresEsposa }}</td>
											<td>{{ $marriage->MamaNombresEsposa }}</td>
											<td>{{ $marriage->EdadEsposa }}</td>
											<td>{{ $marriage->ParroquiaBautismoEsposa }}</td>
											<td>{{ $marriage->NumLibroBautismoEsposa }}</td>
											<td>{{ $marriage->NumPagBautismoEsposa }}</td>
											<td>{{ $marriage->SiendoTestigo }}</td>
											<td>{{ $marriage->PaginaPartida }}</td>
											<td>{{ $marriage->Notas }}</td>
											<td>{{ $marriage->Parroco }}</td>
											<td>{{ $marriage->DoyFe }}</td>
											<td>{{ $marriage->Usuario_modificacion }}</td>
											<td>{{ $marriage->status }}</td>

                                            <td>
                                                <form action="{{ route('marriages.destroy',$marriage->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('marriages.show',$marriage->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('marriages.edit',$marriage->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
