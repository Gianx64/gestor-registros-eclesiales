@extends('adminlte::page')

@section('title', 'Capillas')

@section('content_header')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	@can('chapels.create')
		<a class="btn btn-secondary float-right" href="{{route('chapels.create')}}">Agregar Capilla</a>  
	@endcan
    <h1>Capillas</h1>
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
                                        
										<th>Nombre</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chapels as $chapel)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $chapel->Nombre }}</td>
											<td>{{ $chapel->Direccion }}</td>

                                            <td>
                                                @can('chapels.edit')
                                                <a class="btn btn-sm btn-success" href="{{ route('chapels.edit',$chapel->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                @endcan
                                                @can('chapels.destroy')
                                                <form action="{{ route('chapels.destroy',$chapel->id) }}" class="swal-delete" method="POST">
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
                {!! $chapels->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
	@include('swal-delete')
@endsection