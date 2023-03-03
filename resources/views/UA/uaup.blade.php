@extends('home')

@section('content')
<div class="container-fluid">
	<h1 class="title">Nueva Unidad administrativa</h1>
	
</div>

<div class="container" style="margin-top:30px">
    <form onsubmit="{{ route('ua.store') }}" method="POST" class="row g-3 needs-validation" validate>
      @csrf
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nombre</label>
          <input type="text" name="ua_nombre" class="form-control" id="validationCustom01" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Ubicación</label>
          <input type="text" name="ua_ubicacion"class="form-control" id="validationCustom02" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername"  class="form-label">Encargado</label>
          <div class="input-group has-validation">
            <input type="text" name="ua_encargado" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Texto de error.
            </div>
          </div>
        </div>
        <div class="justify-content-md-center">
          <button class="btn btn-primary " style="margin-bottom:10px" data-bs-toggle="modal" data-bs-target="#exampleModal">Alta</button>
          <div class="modal fade" id="exampleModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 
                </div>
                <div class="modal-footer">
                 
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit"  class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </form>
	
</div>
@endsection