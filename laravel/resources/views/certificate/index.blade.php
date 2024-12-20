@extends('adminlte::page')

@section('title', 'Certificados')

@section('content_header')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	@can('certificate.create')
		<a class="btn btn-secondary float-right" href="{{route('certificates.create')}}">Agregar Certificado</a>  
	@endcan
    <h1>Certificados</h1>
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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($certificates as $certificate)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $certificate->Nombre }}</td>

                                            <td>
                                                @can('certificates.index')
                                                <a class="btn btn-sm btn-primary " href="{{ route('certificates.show',$certificate->id) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                                @endcan
                                                @can('certificates.edit')
                                                <a class="btn btn-sm btn-success" href="{{ route('certificates.edit',$certificate->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                @endcan
                                                @can(false)
                                                <form action="{{ route('certificates.destroy',$certificate->id) }}" class="swal-delete" method="POST">
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
                {!! $certificates->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
	@include('swal-delete')
@endsection