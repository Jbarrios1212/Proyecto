<div class="modal fade" id="delete-{{$persona->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
		<form action="{{route('persona.destroy',$persona->id)}}" method="post">
			@csrf
			@method('DELETE')
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">DELETE PERSON</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Estas seguro de eliminar el registro de: <strong>{{$persona->names." ".$persona->surnames}}</strong> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-danger"   value="Delete">
				</div>
			</div>
		</form>
  	</div>
</div>
