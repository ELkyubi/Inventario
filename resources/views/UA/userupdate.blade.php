@extends('home')

@section('content')
<div class="container-fluid">
    <h1 class="center">Actualizar usuarios</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Nombre de usuario</th>
        <th scope="col">Actualizar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td><button typer="button" class="btn btn-primary">Modificar</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td><button typer="button" class="btn btn-primary">Modificar</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td><button typer="button" class="btn btn-primary">Modificar</button></td>
      </tr>

    </tbody>
  </table>


@endsection