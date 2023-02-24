@extends('home')

@section('content')
<div class="container-fluid">
    <h1 class="center">Lista de unidades administrativas</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Unidad administrativa</th>
        <th scope="col">Ubicación</th>
        <th scope="col">Encargado</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>informatica</td>
        <td>Campeche</td>
        <td>Marco</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Recursos humanos</td>
        <td>Campeche</td>
        <td>Paul</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Dirección general</td>
        <td>Campeche</td>
        <td>Raúl</td>
      </tr>

    </tbody>
  </table>
  <div class="btn-toolbar justify-content-md-center" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group me-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-primary">1</button>
      <button type="button" class="btn btn-primary">2</button>
      <button type="button" class="btn btn-primary">3</button>
      <button type="button" class="btn btn-primary">4</button>
    </div>
  </div>

@endsection