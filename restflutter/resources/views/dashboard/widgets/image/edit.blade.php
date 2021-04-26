@extends('master')

@section('content')
    @include('partials.validator')

    <div class="card">
        <div class="card-header">
            Actualizar Imagen: <strong>{{ $image->name }}</strong>
        </div>

        <div class="card-body">
            <form action="{{route("image.update",$image->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('dashboard.widgets.image._form')
                <button class="btn btn-success mt-2" type="submit">Actualizar</button>
            </form>
        </div>
    </div>

@endsection