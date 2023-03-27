@extends('home')

@section('content')
<div class="container-fluid">
    <h1 class="center">Lista de categorías</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Productos</th>
        @auth
        <th colspan="2">Opciones</th>
        @endauth
        
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category )
        <tr>
          <th scope="row">{{ $category->id }}</th>
          <td>{{ $category->categoria_nombre }}</td>
          <td>{{ $category->categoria_descripcion }}</td>
          <td>

            <a typer="button" href="/UA/filtrocategoria/{{ $category->id }}"  style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" class="btn btn-primary">ver productos</a></td>
          
          <td>
            @auth
            <a href="/UA/listacategoria/{{$category->id}}/edit"  style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" typer="button" class="btn btn-primary">Modificar</a>
            
            <td><form action="{{ route('cat.delete', $category->id) }}" onsubmit="return confirm('¿Seguro que quiere eliminar esta categoría? !Todos los productos relacionados con ella tambien desaparecerán!')" method="POST">  
              @csrf
              @method('DELETE')
              <button type="submit" style="background-color: rgb(99, 0, 0); border-color: rgb(255, 255, 255); color:aliceblue"class="btn btn-danger" >Eliminar</button>
            </form></td>
          </td>
            @endauth
            
        </tr>
      @endforeach
     
    </tbody>
  </table>
</div>
  
@endsection