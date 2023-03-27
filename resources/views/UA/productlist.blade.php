@extends('home')
@section('content')
<main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center text-md-start">
        <h1 class="mb-5"><strong>Productos</strong></h1>
      </section>
        @foreach ( $products as $product)
            <!-- Post -->
            <div class="container mt-5 mb-5" >
              <div class="d-flex justify-content-center row">
                  <div class="col-md-15">
                      <div class="row p-2 border rounded" style="background-color: rgb(0, 105, 65)">
                          <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" style="width: 100%" src="{{ $product->foto }}"></div>
                          <div class="col-md-6 mt-1">
                              <h5 style="color: rgb(231,227,226)">{{ $product->nombre }}</h5>
                              <div class="d-flex flex-row">
                                  <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span style="color: rgb(231,227,226)"><strong>Categoria:</strong>{{ $product->category->categoria_nombre}}</span>
                              </div>
                              <div class="mt-1 mb-1 spec-1"><span style="color: rgb(231,227,226)"><strong>Unidad administrativa:</strong>{{ $product->ua->ua_nombre }}</span><span><br></span></div>
                              <div class="mt-1 mb-1 spec-1"><span style="color: rgb(231,227,226)"><strong>Fecha de ingreso:</strong>{{ $product->fech_ingr }}</span><span class="dot"></span><span>      </span><span class="dot"></span><span style="color: rgb(231,227,226)"><strong>Fecha de salida:</strong>{{ $product->fech_egr }}<br></span></div>
                              <p class="text-justify text-break para mb-0" style="color: rgb(231,227,226)"><strong>Observaciones:</strong>{{ $product->observacion }}</p>
                          </div>
                          <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                              <div class="d-flex flex-row align-items-center">
                                  <h4 class="mr-1" style="color: rgb(231,227,226)"><strong>Stock:</strong>{{ $product->stock }}</h4>
                              </div>
                              <h6 style="color: rgb(231,227,226)"><strong>Tipo de Unidad:</strong>{{ $product->unidades }}</h6>
                              @auth
                              <div class="d-flex flex-column mt-4"><a href="/UA/listaproducto/{{ $product->id }}/edit" style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" class="btn btn-primary btn-sm" type="button">Modificar</a>
                              </div>
                              @endauth
                              
                          </div>
                        </div>
                    </div>
                  </div>
            </div>
        @endforeach
          {{ $products->links() }}
      <!-- Pagination -->
    </div>
  </main>
  <!--Main layout-->

  @endsection