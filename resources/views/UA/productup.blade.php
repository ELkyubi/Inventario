@extends('home')

@section('content')
<div class="container-fluid">
   <h1 class="title">Nuevo producto</h1>
   
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
   <form class="row g-3 needs-validation"  method="POST" enctype="multipart/form-data"  novalidate>
    @csrf
       <div class="col-md-6">
         <label for="validationCustom01" class="form-label">Nombre</label>
         <input type="text" class="form-control" name="nombre" id="validationCustom01" required>
         <div class="invalid-feedback">
           Por favor incluya el nombre del producto
         </div>
       </div>
       <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Cantidad</label>
        <div class="input-group has-validation">
          <input type="number" class="form-control" name="stock" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Por favor determina la cantidad de prodtctos.
          </div>
        </div>
      </div>
       <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Tipo de unidad</label>
        <select class="form-select form-select-sm" name="unidades" id="validationCustom04" aria-label=".form-select-sm example" required>
           <option selected>Seleccione una unidad</option>
           <option value="Pieza">Pieza</option>
           <option value="Docena">Docena</option>
           <option value="Paquete">Paquete</option>
           <option value="Caja">Caja</option>
        </select>
       </div>
       <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Unidad Administrativa</label>
         <select class="form-select form-select-sm" name="ua_id" id="validationCustom04" aria-label=".form-select-sm example" required>
            <option selected>Seleccione una Unidad Administrativa</option>
            @foreach ($uas as $ua)
            <option value="{{ $ua->id }}">{{ $ua->ua_nombre }}</option>
            @endforeach
         </select>
       </div>
       <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Categoria</label>
        <select class="form-select form-select-sm" name="cat_id" id="validationCustom03" aria-label=".form-select-sm example" required>
           <option selected>Seleccione una Categoria</option>
           @foreach ($cat as $category)
            <option value="{{ $category->id }}">{{ $category->categoria_nombre }}</option>
            @endforeach
        </select>
         </div>
         <div class="col-md-4">
            <label for="fip" class="form-label">Fecha de ingreso del producto</label>
            <input type="date" name="fech_ingr" class="form-control" id="fip" placeholder="dd/mm/aa"required>
            <div class="invalid-feedback">
              Introduzca una fecha valida
            </div>
          </div>
            <div class="col-md-4">
            <label for="fep" class="form-label">Fecha de egreso del producto</label>
            <input type="date" name="fech_egr" class="form-control" id="fep" placeholder="dd/mm/aa">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="img" class="form-label">Imagen de referencia</label>
            <input type="file" name="file" class="form-control" id="file" placeholder="imagen" accept="image/*">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Observaciones</label>
            <textarea type="text" name="observacion" rows="5"class="form-control" id="validationCustom02"></textarea>
            <div class="valid-feedback">
              Looks good!
            </div>
       <div class="justify-content-md-center">
         <a  type="button" class="btn btn-primary "  style="margin-bottom:10px" data-bs-toggle="modal" data-bs-target="#exampleModal">Alta</a>
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Alta de producto</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                ¿Subir producto?
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                 <button type="submit" onsubmit="{{ route('product.store') }}" class="btn btn-primary">Subir</button>
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