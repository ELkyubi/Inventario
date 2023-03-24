@extends('home')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6 mb-4">
            <h2 class="text-center">General</h2>
            <p class="text-center">Imprima reportes de todos los productos registrados y activos</p>
            <a class="btn btn-primary" >Generar reporte</a>
        </div>
        <div class="col-md-6 mb-4">
            <h2 class="text-center">Categoria</h2>
            <p class="text-center">Imprima reportes seleccionando una categoria en especifico</p>
            <form onsubmit="{{ route('pdf.cat') }}"  method="POST">
                @csrf
            <label for="validationCustom03" class="form-label">Categoria</label>
            <select class="form-select form-select-sm" name="cat_id" id="validationCustom03" aria-label=".form-select-sm example">
           <option selected>Seleccione una opción</option>
            @foreach ($cat as $category)
            <option value="{{ $category->id }}">{{ $category->categoria_nombre }}</option>
            @endforeach
            </select>
            <button class="btn btn-primary" >Generar reporte</button>
            </form>
       
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <h2 class="text-center">Unidad Administrativa</h2>
            <p class="text-center">Imprima reportes de todos los productos registrados y activos</p>
            <form action="/UA/reportes/ua" method="POST">
                @csrf
            <label for="validationCustom04" class="form-label">Unidad Administrativa</label>
            <select class="form-select form-select-sm" name="ua_id" id="validationCustom04" aria-label=".form-select-sm example">
            <option selected>Seleccione una opción</option>
            @foreach ($uas as $ua)
            <option value="{{ $ua->id }}">{{ $ua->ua_nombre }}</option>
            @endforeach
            </select>
            <button class="btn btn-primary" type="submit">Generar reporte</button>
            </form>
        </div>
        <div class="col-md-6 mb-4">
            <h2 class="text-center">Fecha de ingreso</h2>
            <p class="text-center">Imprima reportes de todos los productos registrados y activos</p>
            <label>Del:</label>
            <input type="date">
            <label>Al:</label>
            <input type="date">
            <a class="btn btn-primary" >Generar reporte</a>
        </div>
    </div>


</div>



@endsection