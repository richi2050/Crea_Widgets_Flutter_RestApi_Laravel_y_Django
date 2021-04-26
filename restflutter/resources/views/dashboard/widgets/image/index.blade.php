@extends('master')

@section('content')
@include('partials.validator')

<a class="mt-3 mb-2 btn btn-primary" href="{{ route('image.create') }}">Crear</a>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>URL</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($images as $t)
            <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->name }}</td>
                <td>{{ $t->url }}</td>
                <td>
                    <a class="btn btn-success"
                        href="{{ route('image.edit',$t->id) }}">Editar</a>
                        <form id="formDelete" action="{{route("image.destroy",$t->id)}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" type="submit">Eliminar</button>
                      </form>
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>

    {{ $images->links() }}

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ¿Seguró que quieres borrar este registro?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                <form id="formDelete" data-action="{{route("image.destroy",0)}}" action="{{route("image.destroy",0)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </div>
          </div>
        </div>
      </div>

      <script>
            var deleteModal = document.getElementById('deleteModal')
            deleteModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-* attributes
            var id = button.getAttribute('data-id')
            var label = button.getAttribute('data-label')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = deleteModal.querySelector('.modal-title')
            modalTitle.imageContent = 'Borrar: ' + label

            formDelete = document.getElementById('formDelete')
            action = formDelete.getAttribute("data-action").slice(0,-1)
            formDelete.setAttribute("action",action+id)

            })
      </script>

@endsection
