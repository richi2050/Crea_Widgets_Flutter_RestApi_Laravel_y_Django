@extends('master')

@section('content')
@include('partials.validator')

<a class="mt-3 mb-2 btn btn-primary" href="{{ route('chip.create') }}">Crear</a>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Label</th>
            <th>Color</th>
            <th>Color Bg</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($chips as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->label }}</td>
                <td>{{ $c->color }}</td>
                <td>{{ $c->color_bg }}</td>
                <td>
                    <a class="btn btn-success"
                        href="{{ route('chip.edit',$c->id) }}">Editar</a>
                        <form id="formDelete" action="{{route("chip.destroy",$c->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>

    {{ $chips->links() }}

    

@endsection
