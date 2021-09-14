@extends('layouts.mainDash')
@section('contenido')



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-600">Lista de clientes registrados</h1>
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
    <th></th>
    <th></th>
    </tr>
</thead>
<tbody>
    @foreach($clientes as $cliente)
    <tr>
    <th scope="row">{{$cliente -> id}}</th>
    <td>{{$cliente -> nombre}}</td>
    <td>{{$cliente -> apellido}}</td>
    <td>{{$cliente -> telefono}}</td>
    <td>{{$cliente -> direccion}}</td>
    <td>{{$cliente -> fraccionamiento}}</td>
    <td><button type="button" class="btn btn-warning">Editar</button></td>
    <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection