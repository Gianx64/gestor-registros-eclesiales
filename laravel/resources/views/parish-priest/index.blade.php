@extends('adminlte::page')

@section('title', 'Párrocos')

@section('content_header')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	@can('parishpriests.create')
		<a class="btn btn-secondary float-right" href="{{route('parishpriests.create')}}">Agregar Párroco</a>  
	@endcan
    <h1>Párrocos</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        
										<th>Rut</th>
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parishPriests as $parishPriest)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $parishPriest->Rut }}</td>
											<td>{{ $parishPriest->Nombre }}</td>

                                            <td>
                                                @can('parishpriests.edit')
                                                <a class="btn btn-sm btn-success" href="{{ route('parishpriests.edit',$parishPriest->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                @endcan
                                                @can('parishpriests.destroy')
                                                <form action="{{ route('parishpriests.destroy',$parishPriest->id) }}" class="swal-delete" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $parishPriests->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
	@include('swal-delete')
@endsection