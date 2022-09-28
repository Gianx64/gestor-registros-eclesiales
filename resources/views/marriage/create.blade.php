@extends('layouts.app')

@section('title', 'Crear Matrimonio')

@section('content_header')
    <h1>Crear Matrimonio</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('marriages.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('marriage.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
