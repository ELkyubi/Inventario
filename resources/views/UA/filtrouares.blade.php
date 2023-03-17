@extends('ua.filtroua')
@section('result')


<div class="col-md-9 mb-4">
    <section class="text-center text-md-start">
        <h1 class="mb-5 text-center"><strong>Productos</strong></h1>
@foreach ($products as $product)
<div class="row">
<div class="col-md-3 mb-4">
    <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
      <img src="{{ $product->foto }}" class="img-fluid" />
      <a href="#!">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>
  </div>
  <div class="col-md-9 mb-4">
    <h5>{{ $product->nombre }}</h5>
    <p>
      <strong>Stock:</strong>{{ $product->stock }}<strong>Tipo de Unidad:</strong>{{ $product->unidades }}<br>
      <strong>Categoria:</strong>{{ $product->category->categoria_nombre}}<strong>Unidad administrativa:</strong>{{ $product->ua->ua_nombre }}<br>
      <strong>Fecha de ingreso:</strong>{{ $product->fech_ingr }}<strong>Fecha de salida:</strong>{{ $product->fech_egr }}<br>
      <strong>Observaciones:</strong>{{ $product->observacion }}

    </p>

    <button type="button" class="btn btn-primary">Modificar</button>
    <button type="button" class="btn btn-warning">Baja</button>
  </div>
</div>
@endforeach
</div>

@endsection