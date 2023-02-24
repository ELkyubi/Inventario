@extends('home')

@section('content')
<div class="container-fluid">
   <h1 class="title">Nuevo producto</h1>
   
</div>

<div class="container" style="margin-top:30px">
   <form class="row g-3 needs-validation" novalidate>
       <div class="col-md-6">
         <label for="validationCustom01" class="form-label">Nombre</label>
         <input type="text" class="form-control" id="validationCustom01" required>
         <div class="valid-feedback">
           Looks good!
         </div>
       </div>
       <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Cantidad</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Por favor elige un nombre de usuario.
          </div>
        </div>
      </div>
       <div class="col-md-4">
         <label for="validationCustom02" class="form-label">Tipo de unidad</label>
         <input type="text" class="form-control" id="validationCustom02" required>
         <div class="valid-feedback">
           Looks good!
         </div>
       </div>
       <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Categoria</label>
         <select class="form-select form-select-sm" id="validationCustom04" aria-label=".form-select-sm example">
            <option selected>Seleccione una opción</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
         </select>
       </div>
       <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Unidad Administrativa</label>
        <select class="form-select form-select-sm" id="validationCustom03" aria-label=".form-select-sm example">
           <option selected>Seleccione una opción</option>
           <option value="1">One</option>
           <option value="2">Two</option>
           <option value="3">Three</option>
        </select>
         </div>
         <div class="col-md-4">
            <label for="fip" class="form-label">Fecha de ingreso del producto</label>
            <input type="date" class="form-control" id="fip" placeholder="dd/mm/aa"required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="fep" class="form-label">Fecha de egreso del producto</label>
            <input type="date" class="form-control" id="fep" placeholder="dd/mm/aa"required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="img" class="form-label">Imagen de referencia</label>
            <input type="file" class="form-control" id="img" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
       <div class="justify-content-md-center">
         <button class="btn btn-primary " style="margin-bottom:10px" data-bs-toggle="modal" data-bs-target="#exampleModal">Alta</button>
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                 ...
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Save changes</button>
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