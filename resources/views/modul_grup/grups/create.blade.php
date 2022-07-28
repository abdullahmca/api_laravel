@extends('template')

@section('container') 
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Create New Grup</div>
        <div class="card-body">
            <a href="{{ url('/modul_grup/grups') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <br />
            <br />

            @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ url('/modul_grup/grups') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include ('modul_grup.grups.form', ['formMode' => 'create'])

            </form>

        </div>
    </div>
</div> 
@endsection
