@extends('layouts.mainDash')
@section('contenido')



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h2 mb-0 text-gray-600">Lista de clientes registrados</h1>

    
    <nav class="navbar navbar-light bg-light">
    <form class="form-inline" action="{{route('listarCliente.index')}}" method="get">
        <input class="form-control mr-sm-2" type="text" name="texto" value="{{$texto}}" placeholder="Buscar clientes" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    </nav>
</div>


<div class="table-responsive">
<table class="table table-hover">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nombre</th>
    <th scope="col">Apellido</th>
    <th scope="col">Telefono</th>
    <th scope="col">Dirección</th>
    <th scope="col">Fraccionamiento</th>
    <th colspan="2"><a href="{{route('listarCliente.create')}}" type="submit" class="btn btn-success float-right mr-4">Agregar</a></th>
    </tr>
</thead>
<tbody>
    @if(count($clientes)<= 0)
        <tr> 
            <td colspan="7">
                No hay resultados por mostar, por favor intente buscar de nuevo.
            </td>
        </tr>
    @else
    @foreach($clientes as $cliente)
        <tr>
        <th scope="row">{{$cliente -> id}}</th>
        <td>{{$cliente -> nombre}}</td>
        <td>{{$cliente -> apellido}}</td>
        <td>{{$cliente -> telefono}}</td>
        <td>{{$cliente -> direccion}}</td>
        <td >{{$cliente -> fraccionamiento}}</td>
        <td><a href="{{route('listarCliente.edit', $cliente->id)}}" type="submit" class="btn btn-warning float-right">Editar</a></td>
        <td>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$cliente->id}}">
            Eliminar
        </button>
        </td>
        </tr>
        @include('eliminarCliente')
    @endforeach
    @endif
</tbody>
</table>
{{$clientes ->links()}}
</div>
@endsection