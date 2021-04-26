@extends('master')

@section('content')
    @include('partials.validator')

    <div class="card">
        <div class="card-header">
            Actualizar chip: <strong>{{ $chip->label }}</strong>
        </div>

        <div class="card-body">
            <form action="{{route("chip.update",$chip->id)}}" method="POST">
                @method('PATCH')
                @include('dashboard.widgets.chip._form')
                <button class="btn btn-success mt-2" type="submit">Actualizar</button>
            </form>
        </div>
    </div>

@endsection