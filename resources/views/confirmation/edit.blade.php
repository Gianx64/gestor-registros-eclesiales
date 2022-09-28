@extends('layouts.app')

@section('template_title')
    Update Confirmation
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Confirmation</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('confirmations.update', $confirmation->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('confirmation.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
