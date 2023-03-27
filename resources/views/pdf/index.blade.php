@extends('home')


@section('content')

<div class="container">

    <div class="row mb-4 mt-4" >
        <div class="col-sm-6">
            <div class="card mt-4">
            <div class="card-body" style="background-color: rgb(0, 107, 71)" >
            <form action="/UA/reportes/general" method="POST">
                @csrf
            <h2 class="card-title">General</h2>
            <p class="card-text" style="color: white">Imprima reportes de todos los productos registrados y activos</p>
            <button class="btn btn-primary" style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" type="submit">Generar reporte</button>
            </form>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mt-4">
                <div class="card-body" style="background-color: rgb(0, 107, 71)">
                    <form action="/UA/reportes/bajas" method="POST">
                        @csrf
                    <h2 class="card-title">Bajas</h2>
                    <p class="card-text"  style="color: white">Imprime un reporte con los productos que se encuentran dados de baja</p>
                    <button class="btn btn-primary" style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" type="submit">Generar reporte</button>
                    </form>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class="row mb-4">
            <div class="col-sm-6 "><div class="card">
                <div class="card-body" style="background-color: rgb(0, 107, 71)">
                    <h2 class="card-title">Unidad Administrativa</h2>
                    <p class="card-text" style="color: white">Imprima reportes de todos los productos registrados y activos</p>
                    <form action="/UA/reportes/ua" method="POST">
                        @csrf
                    <label for="validationCustom04" class="form-label">Unidad Administrativa</label>
                    <select class="form-select form-select-sm mb-4" name="ua_id" id="validationCustom04" aria-label=".form-select-sm example">
                    <option selected>Seleccione una opción</option>
                    @foreach ($uas as $ua)
                    <option value="{{ $ua->id }}">{{ $ua->ua_nombre }}</option>
                    @endforeach
                    </select>
                    <button class="btn btn-primary" style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" type="submit">Generar reporte</button>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body" style="background-color: rgb(0, 107, 71)">
                    <h2 class="card-title">Categoria</h2>
                        <p class="card-text" style="color: white">Imprima reportes seleccionando una categoria en especifico</p>
                        <form onsubmit="{{ route('pdf.cat') }}"  method="POST">
                            @csrf
                        <label for="validationCustom03" class="form-label">Categoria</label>
                        <select class="form-select form-select-sm mb-4" name="cat_id" id="validationCustom03" aria-label=".form-select-sm example">
                        <option selected>Seleccione una opción</option>
                        @foreach ($cat as $category)
                        <option value="{{ $category->id }}">{{ $category->categoria_nombre }}</option>
                        @endforeach
                        </select>
                        <button class="btn btn-primary" style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);" >Generar reporte</button>
                        </form>
       
                </div>
            </div>
            
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body" style="background-color: rgb(0, 107, 71)" >
                    <form action="/UA/reportes/ingr" method="POST">
                        @csrf
                    <h2 class="card-title">Fecha de ingreso</h2>
                    <p class="card-text"  style="color: white">Imprima reportes de productos de acuerdo a su fecha de ingreso al área</p>
                    <label>Del:</label>
                    <input type="date" class="form-control" name="from1">
                    <label>Al:</label>
                    <input type="date" class="form-control mb-4" name="to1">
                    <button class="btn btn-primary" style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);"   type="submit">Generar reporte</button>
                    </form>
                </div>
            </div>
            
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body"style="background-color: rgb(0, 107, 71)">
                    <form action="/UA/reportes/egr" method="POST">
                        @csrf
                    <h2 class="card-title">Fecha de egreso</h2>
                    <p class="card-text"  style="color: white">Imprima reportes de productos de acuerdo a su fecha de salida del área</p>
                    <div class="col-mb-2">
                    <label>Del:</label>
                    <input type="date" class="form-control" name="from2">
                    </div>
                    <div class="col-mb-2">
                    <label>Al:</label>
                    <input type="date" class="form-control mb-4" name="to2">
                    </div>
                    <button class="btn" style="background-color: rgb(167, 130, 82); border-color: rgb(255, 255, 255);"  type="submit">Generar reporte</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>



</div>



@endsection