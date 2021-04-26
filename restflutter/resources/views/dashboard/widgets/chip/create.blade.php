@extends('master')

@section('content')
    @include('partials.validator')

    <div class="card">
        <div class="card-header">
            Crear botón
        </div>

        <div class="card-body">
            <form action="{{route("chip.store")}}" method="POST">
                @include('dashboard.widgets.chip._form')
                <button class="btn btn-success mt-2" type="submit">Enviar</button>
            </form>
        </div>
    </div>

@endsection