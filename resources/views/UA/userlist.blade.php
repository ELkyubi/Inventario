@extends('home')

@section('content')
<div class="container-fluid">
    <h1 class="center">Lista de usuarios</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre de usuario</th>
        <th scope="col">Nombre</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->username}}</td>
            <td>{{ $user->usuario_nombre}}</td>
          </tr>
      @endforeach
    </tbody>
    
  </table>
@endsection