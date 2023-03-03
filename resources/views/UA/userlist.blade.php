@extends('home')

@section('content')
<div class="container-fluid">
    <h1 class="center">Lista de usuarios</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Nombre de usuario</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
          <tr>
            <th scope="row">{{ $user->usuario_id }}</th>
            <td>{{ $user->usuario_nombre}}</td>
            <td>{{ $user->usuario_apellido}}</td>
            <td>{{ $user->usuario_usuario}}</td>
          </tr>
      @endforeach
    </tbody>
    
  </table>
@endsection