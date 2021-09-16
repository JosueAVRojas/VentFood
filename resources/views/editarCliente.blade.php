@extends('layouts.mainDash')
@section('contenido')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h2 mb-0 text-gray-600">Editar el cliente</h1>
</div>
<hr/>

<form class="row g-3"  action="{{route('listarCliente.update', $cliente-> id)}}" method="post">
  @csrf
  @method('PUT')
  <div class="col-md-4 mt-2">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre" required maxlength="100" value="{{$cliente->nombre}}">
  </div>
  <div class="col-md-4 mt-2">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" name="apellido" class="form-control" id="apellido" required maxlength="100" value="{{$cliente->apellido}}">
  </div>
  <div class="col-4 mt-2">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" required maxlength="10" value="{{$cliente->telefono}}">
  </div>
  <div class="col-8 mt-4">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" required maxlength="100" value="{{$cliente->direccion}}">
  </div>
  <div class="col-md-4 mt-4">
    <label for="fraccionamiento" class="form-label">Fraccionamiento</label>
    <input type="text" class="form-control" id="fraccionamiento" name="fraccionamiento" required maxlength="100" value="{{$cliente->fraccionamiento}}">
  </div>
  <div class="col-12 mt-4">
    <input type="submit" class="btn btn-primary" value="Guardar">
  </div>
</form>

@endsection