<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        @foreach ($ua as $uua)
        <h1 class="center">Categoria: {{ $uua->ua_nombre }}</h1>
        @endforeach
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo de Unidad</th>
        <th scope="col">Stock</th>
        <th scope="col">Categoria</th>
        <th scope="col">Fecha ingreso</th>
        <th scope="col">Fecha salida</th>
        <th scope="col">Observaciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product )
        <tr>
          <th scope="row">{{ $product->nombre }}</th>
          <td>{{ $product->unidades }}</td>
          <td>{{ $product->stock }}</td>
          <td>{{ $product->category->categoria_nombre }}</td>
          <td>{{ $product->fech_ingr }}</td>
          <td>{{ $product->fech_egr }}</td>
          <td>{{ $product->observacion }}</td>
      @endforeach
    </tbody>
  </table>

</body>
</html>