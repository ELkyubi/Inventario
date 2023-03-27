@extends('home')

@section('content')
<div class="container-fluid">
   <h1 class="title">Modificar categoria</h1>
   
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
   <form  method="POST" class="row g-3 needs-validation" novalidate>
   @csrf
   @method('put')
    <div class="col-md-12">
         <label for="validationCustom01" class="form-label">Nombre</label>
         <input type="text" name="categoria_nombre" class="form-control" value="{{ $category->categoria_nombre }}" id="validationCustom01" required>
         <div class="valid-feedback">
           Looks good!
         </div>
       </div>
       <div class="col-md-12">
         <label for="validationCustom02" class="form-label">Descripción</label>
         <textarea type="text" name="categoria_descripcion" rows="5"class="form-control" id="validationCustom02" required>{{ $category->categoria_descripcion }}</textarea>
         <div class="valid-feedback">
           Looks good!
         </div>
       </div>
       <div class="justify-content-md-center">
         <button class="btn btn-primary " style="margin-bottom:10px" data-bs-toggle="modal" data-bs-target="#exampleModal">Alta</button>
         <div class="modal fade" id="exampleModal"aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                 <button type="submit" onsubmit="{{ route('cat.update', $category) }}"  class="btn btn-primary">Save changes</button>
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