@extends('home')

@section('content')
<div class="container-fluid">
	<h1 class="title">Nueva Unidad administrativa</h1>
	
</div>

<div class="container" style="margin-top:30px">
    <form  method="POST" class="row g-3 needs-validation" novalidate>
      @csrf
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nombre</label>
          <input type="text" name="ua_nombre" class="form-control" id="validationCustom01" required>
          <div class="invalid-feedback">
            Favor de otorgarle un nombre a la unidad administrativa
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Ubicación</label>
          <input type="text" name="ua_ubicacion"class="form-control" id="validationCustom02" norequired>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername"  class="form-label">Encargado</label>
          <div class="input-group has-validation">
            <input type="text" name="ua_encargado" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" norequired>
            <div class="invalid-feedback">
              Texto de error.
            </div>
          </div>
        </div>
        <div class="justify-content-md-center">
          <a class="btn btn-primary " style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);margin-bottom:10px" data-bs-toggle="modal" data-bs-target="#exampleModal">Alta</a>
          <div class="modal fade" id="exampleModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alta de unidad administrativa</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 ¿Subir unidad administrativa?
                </div>
                <div class="modal-footer">
                 
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" onsubmit="{{ route('ua.store') }}" style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" class="btn btn-primary">Subir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </form>
	
</div>
<script>
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
@endsection