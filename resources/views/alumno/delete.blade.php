<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$alumno->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  < action="{{route('alumno.destroy',$alumno->id)}}" method="post">
    @csrf
     @method('DELETE')
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminacion de registros de alumnos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseas eliminar el registro {{$alumno->n_control." ".$alumno->nombre}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="hidden">   <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
      </div>
    </div>
</form>
  </div>
</div>