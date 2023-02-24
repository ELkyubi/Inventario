@extends('home')

@section('content')
<div class="container-fluid">
    <h1 class="center">Lista de categorias</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Productos</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Papeleria</td>
        <td>Articulos varios de papeleria como borradores, lapices y sacapuntas.</td>
        <td><button typer="button" class="btn btn-primary">Ver productos</button></td>
        <td><button typer="button" class="btn btn-primary">Modificar</button></td>
        <td><button typer="button" class="btn btn-danger">Eliminar</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Muebleria</td>
        <td>Articulos mobiliarios como mesas, sillas y casilleros.</td>
        <td><button typer="button" class="btn btn-primary">Ver productos</button></td>
        <td><button typer="button" class="btn btn-primary">Modificar</button></td>
        <td><button typer="button" class="btn btn-danger">Eliminar</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Informatica</td>
        <td>Articulos tecnoloficos como mouses, teclados, monitores y pc.</td>
        <td><button typer="button" class="btn btn-primary">Ver productos</button></td>
        <td><button typer="button" class="btn btn-primary">Modificar</button></td>
        <td><button typer="button" class="btn btn-danger">Eliminar</button></td>
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