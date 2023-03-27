@extends('home')

@section('content')
@auth
  

<div class="container-fluid">
    <h1 class="center">Lista de usuarios</h1>
  @if (session()->get('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
      
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        
      </button>
    </div>
  @endif
    <h2 class="success"></h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre de usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->username}}</td>
            <td>{{ $user->usuario_nombre}}</td>
            <td>  <form action="{{ route('user.delete', $user->id) }}" onsubmit="return confirm('¿Seguro que quiere eliminar este usuario?')" method="POST">  
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: rgb(99, 0, 0); border-color: rgb(255, 255, 255); color:aliceblue" class="btn btn-danger">Eliminar</button>
                  </form>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  @endauth
</div>
@endsection