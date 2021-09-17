@extends('layouts.mainDash')
@section('contenido')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h2 mb-0 text-gray-600">Agregar nuevos clientes al sistema</h1>
</div>
<hr/>

<form class="row g-3"  action="{{route('listarProductos.store')}}" method="post">
  @csrf
  <div class="col-md-4 mt-2">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre" required maxlength="100">
  </div>
  <div class="col-md-4 mt-2">
    <label for="descripcion" class="form-label">Descripción</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" required maxlength="500">
  </div>
  <div class="col-4 mt-2">
    <label for="precio" class="form-label">Precio</label>
    <input type="number" class="form-control" id="precio" step="0.01" name="precio" required maxlength="10">
  </div>
  <div class="col-12 mt-4">
    <input type="submit" class="btn btn-primary" value="Guardar">
  </div>
</form>

@endsection