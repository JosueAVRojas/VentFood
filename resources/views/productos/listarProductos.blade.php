@extends('layouts.mainDash')
@section('contenido')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h2 mb-0 text-gray-600">Lista de productos en venta</h1>
    <nav class="navbar navbar-light bg-light">

    <form class="form-inline" action="{{route('listarProductos.index')}}" method="get">
        <div class="col-8 ">
            <input class="form-control mr-sm-2" type="text" name="texto" value="{{$texto}}" placeholder="Buscar productos" aria-label="Search" autocomplete="off">

        </div>
        <div class="col-4 ">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
        </div>
    </form>
    </nav>

</div>



<div class="table-responsive">
<table class="table table-hover">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nombre</th>
    <th scope="col">Descripción</th>
    <th scope="col">Precio</th>
    <th colspan="2"><a href="{{route('listarProductos.create')}}" type="submit" class="btn btn-success float-right mr-4">Agregar</a></th>
    </tr>
</thead>
<tbody>
    @if(count($productos)<= 0)
        <tr> 
            <td colspan="7">
                No hay resultados por mostar, por favor intente buscar de nuevo.
            </td>
        </tr>
    @else
    @foreach($productos as $producto)
        <tr>
        <th scope="row">{{$producto  -> id}}</th>
        <td>{{$producto -> nombre}}</td>
        <td>{{$producto -> descripcion}}</td>
        <td>{{$producto -> precio}}</td>
        <td><a href="#" type="submit" class="btn btn-warning float-right">Editar</a></td>
        <td>
        </td>
        </tr>
    @endforeach
    @endif
</tbody>
</table>
</div>


@endsection