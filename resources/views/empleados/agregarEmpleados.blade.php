@extends('layouts.mainDash')
@section('contenido')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h2 mb-0 text-gray-600">Agregar nuevos empleados al sistema</h1>
</div>
<hr/>
<form class="row g-3"  action="{{route('listarEmpleados.store')}}" method="post">
  @csrf
  <div class="col-md-3 mt-2">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre" required maxlength="100">
  </div>
  <div class="col-md-3 mt-2">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" name="telefono" class="form-control" id="telefono" required maxlength="10">
  </div>
  <div class="col-md-3 mt-2">
    <label for="sueldo" class="form-label">Sueldo</label>
    <input type="number" class="form-control" id="sueldo" name="sueldo" required maxlength="10">
  </div>
  <div class="col-md-3 mt-2">
        <label for="cargo" class="form-label form-select-lg mb-2">Cargo</label><br>
        <select class="form-select" aria-label="size 3 select example" name="cargo" id="cargo">
            <option selected value="1">Cocina</option>
            <option value="2">Ayudante de cocina</option>
            <option value="3">Mesero</option>
            <option value="4">Repartidor</option>
            <option value="5">Encargado de caja</option>
        </select>
  </div>
  
  <div class="col-12 mt-4">
    <input type="submit" class="btn btn-primary" value="Guardar">
  </div>
</form>


@endsection