@extends('home')
@section('content')
<main class="my-5">
   <div class="container">
    <div class="row">
        <div class="col-3 pb-6 mb-9">
            <!--Section: Sidebar-->
            <section class="sticky-top" style="top: 80px;">
              <section class="text-center pb-6 mb-6">
                <div class="list-group">
                    <h1>Categorias</h1>
                    @foreach ( $categories as $category )
                    <a href="/UA/filtrocategoria/{{ $category->id }}" class="list-group-item list-group-item-action">{{ $category->categoria_nombre }}</a>
                    @endforeach
                </div>
              </section>
            </section>
          </div>

          @yield('result')
    </div>
        
           
        
   
   </div>
</main>


@endsection