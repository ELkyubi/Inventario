@extends('home')

@section('content')
<div class="container-fluid">
    <h1 class="center">Actualizar unidades administrativas</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Unidad administrativa</th>
        <th scope="col">Ubicación</th>
        <th scope="col">Encargado</th>
        <th scope="col">Actualizar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>informatica</td>
        <td>Campeche</td>
        <td>Marco</td>
        <td><button typer="button" class="btn btn-primary">Modificar</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Recursos humanos</td>
        <td>Campeche</td>
        <td>Paul</td>
        <td><button typer="button" class="btn btn-primary">Modificar</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Dirección general</td>
        <td>Campeche</td>
        <td>Raúl</td>
        <td><button typer="button" class="btn btn-primary">Modificar</button></td>
      </tr>

    </tbody>
  </table>


@endsection