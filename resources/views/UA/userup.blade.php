 @extends('home')

 @section('content')
 <div class="container-fluid">
	<h1 class="title">Nuevo usuario</h1>
 
	
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
    <form action="/UA/altausuario" method="POST" class="row g-3 needs-validation" novalidate >
      @csrf
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" name="username" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Por favor elige un nombre de usuario.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nombre</label>
          <input type="text" class="form-control" name= "usuario_nombre" id="validationCustom01" required>
          <div class="invalid-feedback">
          Introduzca su nombre
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" id="validationCustom03" required>
          <div class="invalid-feedback">
            Por favor introduce una contraseña valida.
          </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" name="password_confirmation"id="validationCustom03" required>
            <div class="invalid-feedback">
                La contraseña debe ser identica.
            </div>
          </div>
        <div class="justify-content-md-center">
          <a class="btn btn-primary " style="margin-bottom:10px" data-bs-toggle="modal" data-bs-target="#exampleModal">Alta</a>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alta usuario</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ¿Quiere registrar este nuevo usuario?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Subir</button>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </form>
	
</div>
<script> 
// Example starter JavaScript for disabling form submissions if there are invalid fields
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