@extends('master')

@section('content')
    @include('partials.validator')

    <div class="card">
        <div class="card-header">
            Crear botón
        </div>

        <div class="card-body">
            <form action="{{route("button.update",$button->id)}}" method="POST">
                @method('PATCH')
                @include('dashboard.widgets.button._form')
                <button class="btn btn-success mt-2" type="submit">Enviar</button>
            </form>
        </div>
    </div>

@endsection