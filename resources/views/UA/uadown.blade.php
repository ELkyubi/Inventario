@extends('home')
@section('content')
<div class="container-fluid">
    <h1 class="center">Dar de baja</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Unidad administrativa</th>
        <th scope="col">Ubicación</th>
        <th scope="col">Encargado</th>
        <th scope="col">Producto</th>
        <th scope="col">Baja</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Informatica</td>
        <td>Campeche</td>
        <td>Claudio</td>
        <td><button typer="button" class="btn btn-primary">Ver productos</button></td>
        <td><button typer="button" class="btn btn-danger">Eliminar</button></td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Recursos humanos</td>
        <td>Campeche</td>
        <td>Fulano</td>
        <td><button typer="button" class="btn btn-primary">Ver productos</button></td>
        <td><button typer="button" class="btn btn-danger">Eliminar</button></td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Direccion general</td>
        <td>Campeche</td>
        <td>Mario</td>
        <td><button typer="button" class="btn btn-primary">Ver productos</button></td>
        <td><button typer="button" class="btn btn-danger">Eliminar</button></td>
      </tr>

    </tbody>
  </table>
@endsection