@extends('home')

@section('content')
<div class="container-fluid">
   <h1 class="title">Modificar producto</h1>
   
</div>

<div class="container" style="margin-top:30px">
   <form class="row g-3 needs-validation"  method="POST" enctype="multipart/form-data"  novalidate>
    @csrf
    @method('put')
    <img src="{{ $product->foto }}" class="img-fluid">
    <input type="text" name="fotoant" value="{{ $product->foto }}" disabled>
       <div class="col-md-6">
         <label for="validationCustom01" class="form-label">Nombre</label>
         <input type="text" class="form-control" name="nombre" value="{{ $product->nombre }}" id="validationCustom01" required>
         <div class="valid-feedback">
           Looks good!
         </div>
       </div>
       <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Cantidad</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" name="stock" value="{{ $product->stock }}" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Por favor elige un nombre de usuario.
          </div>
        </div>
      </div>
       <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Tipo de unidad</label>
        <select class="form-select form-select-sm" name="unidades" id="validationCustom04" aria-label=".form-select-sm example">
           <option value="{{ $product->unidades }}"selected>{{ $product->unidades }}</option>
           <option value="Pieza">Pieza</option>
           <option value="Docena">Docena</option>
           <option value="Paquete">Paquete</option>
           <option value="Caja">Caja</option>
        </select>
       </div>
       <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Unidad Administrativa</label>
         <select class="form-select form-select-sm" name="ua_id" id="validationCustom04" aria-label=".form-select-sm example">
            <option value="{{ $product->ua_id }}" selected>{{ $product->ua->ua_nombre }}</option>
            @foreach ($uas as $ua)
            <option value="{{ $ua->id }}">{{ $ua->ua_nombre }}</option>
            @endforeach
         </select>
       </div>
       <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Categoria</label>
        <select class="form-select form-select-sm" name="cat_id" id="validationCustom03" aria-label=".form-select-sm example">
           <option value="{{ $product->cat_id }}"selected>{{ $product->category->categoria_nombre }}</option>
           @foreach ($cat as $category)
            <option value="{{ $category->id }}">{{ $category->categoria_nombre }}</option>
            @endforeach
        </select>
         </div>
         <div class="col-md-4">
            <label for="fip" class="form-label">Fecha de ingreso del producto</label>
            <input type="date" name="fech_ingr" value="{{ $product->fech_ingr }}" class="form-control" id="fip" placeholder="dd/mm/aa"required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
            <div class="col-md-4">
            <label for="fep" class="form-label">Fecha de egreso del producto</label>
            <input type="date" name="fech_egr" value="{{ $product->fech_egr }}" class="form-control" id="fep" placeholder="dd/mm/aa">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
            <div class="col-md-4">
              
            <label for="img" class="form-label">Imagen de referencia</label>
            <input type="file" name="file" class="form-control" id="file" accept="image/*">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Observaciones</label>
            <textarea type="text" name="observacion" rows="5"class="form-control" id="validationCustom02">{{ $product->observacion }}</textarea>
            <div class="valid-feedback">
              Looks good!
            </div>
          <div class="col-md-4">
              <label for="validationCustom03" class="form-label">Estado</label>
              <select class="form-select form-select-sm" name="estado" id="validationCustom03" aria-label=".form-select-sm example">
                 <option value="Activo"selected>Activo</option>
                  <option Value="Baja">Baja</option>
                  
              </select>
              </div>
       <div class="justify-content-md-center">
         <button  type="submit" class="btn btn-primary " onsubmit="{{ route('product.update', $product) }}" style="margin-bottom:10px" data-bs-toggle="modal" data-bs-target="#exampleModal">Alta</button>
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