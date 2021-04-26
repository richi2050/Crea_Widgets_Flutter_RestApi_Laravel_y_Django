



@extends('master')

@section('content')
@include('partials.validator')

<a class="mt-3 mb-2 btn btn-primary" href="{{ route('text.create') }}">Crear</a>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Texto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($texts as $t)
            <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->text }}</td>
                <td>
                    <a class="btn btn-success"
                        href="{{ route('text.edit',$t->id) }}">Editar</a>
                        <form id="formDelete" action="{{route("text.destroy",$t->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>

    {{ $texts->links() }}

    

@endsection
