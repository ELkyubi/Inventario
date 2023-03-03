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
        <th scope="col">Productos</th>
        <th scope="col=2">Opciones</th>
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

            <button typer="button" class="btn btn-primary">ver productos</button></td>
          </td>
          <td>
            <a href="/UA/listaua/{{$ua->id}}/edit" typer="button" class="btn btn-primary">Modificar</a>
          <td><button typer="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
      @endforeach
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