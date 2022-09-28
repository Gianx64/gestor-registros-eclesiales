@extends('layouts.app')

@section('title', 'Editar Bautismo')

@section('content_header')
    <h1>Editar Bautismo</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('baptisms.update', $baptism->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('baptism.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
