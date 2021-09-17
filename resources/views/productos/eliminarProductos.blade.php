
<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      
    <form action="{{route('listarProductos.destroy', $producto->id)}}" method="post">
            @csrf
            @method('DELETE')
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar este registro?</h5>
            </div>
            <div class="modal-body">
            Si da en aceptar, no podra recuperar el registro eliminado, ¿Desea eliminar el producto {{$producto->nombre}}? 
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <input type="submit" class="btn btn-danger float-right mr-4" value="Eliminar">
            </div>
        </div>
    </form>
  </div>
</div>