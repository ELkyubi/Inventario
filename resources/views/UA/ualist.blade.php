@extends('home')

@section('content')
<div class="container-fluid">
    <h1 class="center">Lista de unidades administrativas</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Unidad administrativa</th>
        <th scope="col">Ubicación</th>
        <th scope="col">Encargado</th>
        <th scope="col">Productos</th>
        @auth
        <th colspan="2">Opciones</th>
        @endauth
        
      </tr>
    </thead>
    <tbody>
      @foreach ($uas as $ua )
        <tr>
          <th scope="row">{{ $ua->id }}</th>
          <td>{{ $ua->ua_nombre }}</td>
          <td>{{ $ua->ua_ubicacion }}</td>
          <td>{{ $ua->ua_encargado }}</td>
          <td>

            <a typer="button" href="/UA/filtroua/{{ $ua->id }}" style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" class="btn btn-primary">ver productos</a></td>
          
          @auth
          <td>
            <a href="/UA/listaua/{{$ua->id}}/edit"  style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" typer="button" class="btn btn-primary">Modificar</a>
          <td><form action="{{ route('ua.delete', $ua->id) }}" onsubmit="return confirm('¿Seguro que quiere eliminar esta unidad administrativa? !Todos los productos relacionados con ella tambien desaparecerán!')" method="POST">  
            @csrf
            @method('DELETE')
            <button type="submit" style="background-color: rgb(99, 0, 0); border-color: rgb(255, 255, 255); color:aliceblue" class="btn btn-danger" >Eliminar</button>
          </form></td>
          </td>
          @endauth
         
        </tr>
      @endforeach
     
    </tbody>
  </table>
</div>
@endsection