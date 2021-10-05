@extends('layouts.mainDash')
@section('contenido')



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h2 mb-0 text-gray-600">Lista de los empleados registrados</h1>

    
    <nav class="navbar navbar-light bg-light">
    <form class="form-inline" action="{{route('listarEmpleados.index')}}" method="get">
        <div class="col-8 ">
            <input class="form-control mr-sm-2" type="text" name="texto" value="{{$texto}}" placeholder="Buscar clientes" aria-label="Search" autocomplete="off">
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
    <th scope="col">Teléfono</th>
    <th scope="col">Sueldo</th>
    <th scope="col">Cargo</th>
    <th colspan="2"><a href="{{route('listarEmpleados.create')}}" type="submit" class="btn btn-success float-right mr-4">Agregar</a></th>
    </tr>
</thead>
<tbody>
    @if(count($empleados)<= 0)
        <tr> 
            <td colspan="7">
                No hay resultados por mostar, por favor intente buscar de nuevo.
            </td>
        </tr>
    @else
    @foreach($empleados as $empleado)
        <tr>
        <th scope="row">{{$empleado -> id}}</th>
        <td>{{$empleado -> nombre}}</td>
        <td>{{$empleado -> telefono}}</td>
        <td>{{$empleado -> sueldo}}</td>
        <td>{{$empleado -> cargo}}</td>
        <td><a type="submit" class="btn btn-warning float-right">Editar</a></td>
        <td>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" >
            Eliminar
        </button>
        </td>
        </tr>
    @endforeach
    @endif
</tbody>
</table>
{{$empleados ->links()}}
</div>
@endsection