@extends('home')

@section('content')
<div class="container-fluid">
	<h1 class="title">Modificar Unidad administrativa</h1>
	
</div>

<div class="container" style="margin-top:30px">
  @if ($errors->any())
  <div style="margin-top:10px" class="alert alert-danger alert-dismissible fade show" role="alert">
    <lu>
      @foreach ( $errors->all() as $error )
     <li> {{ $error }} </li>
    @endforeach
    </lu>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
  </div>
@endif
    <form  method="POST" class="row g-3 needs-validation" validate>

      @csrf
      @method('put')
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nombre</label>
          <input type="text" name="ua_nombre" class="form-control"  value="{{ $ua->ua_nombre }}" id="validationCustom01" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Ubicación</label>
          <input type="text" name="ua_ubicacion"class="form-control" value="{{ $ua->ua_ubicacion }}" id="validationCustom02" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">  
          <label for="validationCustomUsername"  class="form-label">Encargado</label>
          <div class="input-group has-validation">
            <input type="text" name="ua_encargado" class="form-control" value="{{ $ua->ua_encargado }}" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Texto de error.
            </div>
          </div>
        </div>
        <div class="justify-content-md-center">
          <a class="btn btn-primary " style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);margin-bottom:10px" data-bs-toggle="modal" data-bs-target="#exampleModal">Actualizar</a>
          <div class="modal fade" id="exampleModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modificar unidad administrativa</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 ¿Seguro que quieres cambiar esta unidad administrativa?
                </div>
                <div class="modal-footer">
                 
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" onsubmit="{{ route('ua.update', $ua) }}" style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" class="btn btn-primary">Guardar cambios</button>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </form>
	
</div>
@endsection