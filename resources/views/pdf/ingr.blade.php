<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
      * {
          font-family: Verdana, Arial, sans-serif;
      }
      table{
          font-size: small;
      }
      tfoot tr td{
          font-weight: bold;
          font-size: x-small;
      }
      .gray {
          background-color: lightgray
      }
  </style>
</head>
<body>
  <table width="100%">
    <tr>
        <td valign="top"><img src="assets\Conalep-logo.png" alt="" width="150"/></td>
        <td align="right">
            <h2>Conalep Campeche</h2>
            <pre>
                Dirección general
                Area de control de inventario
                Reporte productos recibidos
                Del: {{ $from }} Al: {{ $to }}
            </pre>
        </td>
    </tr>
  </table>
<table  width="100%">
    <thead  style="background-color: lightgrey; text-aligment: center">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo de Unidad</th>
        <th scope="col">Stock</th>
        <th scope="col">Categoría</th>
        <th scope="col">Unidad Administrativa</th>
        <th scope="col">Fecha ingreso</th>
        <th scope="col">Fecha salida</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product )
        <tr>
          <th scope="row">{{ $product->nombre }}</th>
          <td>{{ $product->unidades }}</td>
          <td>{{ $product->stock }}</td>
          <td>{{ $product->category->categoria_nombre }}</td>
          <td>{{ $product->ua->ua_nombre }}</td>
          <td>{{ $product->fech_ingr }}</td>
          <td align="left">{{ $product->fech_egr }}</td>
         
      @endforeach
    </tbody>
  </table>

</body>
</html>