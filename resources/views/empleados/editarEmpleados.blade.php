@extends('layouts.mainDash')
@section('contenido')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h2 mb-0 text-gray-600">Editar informacion del empleado en el sistema</h1>
</div>
<hr/>

<p>Si edita un cargo no podra recuperar la informacion modificada.</p>

<form class="row g-3"  action="{{route('listarEmpleados.update', $empleados -> id)}}" method="post">
    @csrf
    @method('PUT')
  <div class="col-md-3 mt-2">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre" required maxlength="100" value="{{ $empleados -> nombre}}">
  </div>
  <div class="col-md-3 mt-2">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" name="telefono" class="form-control" id="telefono" required maxlength="10" value="{{ $empleados -> telefono }}">
  </div>
  <div class="col-md-3 mt-2">
    <label for="sueldo" class="form-label">Sueldo</label>
    <input type="number" step="0.01" class="form-control" id="sueldo" name="sueldo" required maxlength="10" value="{{ $empleados -> sueldo }}">
  </div>
  <div class="col-md-3 mt-2">
        <label for="cargo" class="form-label form-select-lg mb-2">Cargo</label><br>
        <select class="form-control" aria-label="size 3 select example" name="cargo" id="cargo">
            <option value="{{ $empleados -> cargo }}">
              @foreach($cargos as $cargo)
                @if($empleados -> cargo == $cargo -> id)
                  {{$cargo -> nombre}}
                @endif
              @endforeach
            </option>
            @foreach($cargos as $cargo)
                <option value="{{ $cargo['id'] }}">{{ $cargo['nombre'] }}</option>
            @endforeach
        </select>
  </div>
  
  <div class="col-12 mt-4">
    <input type="submit" class="btn btn-primary" value="Guardar">
  </div>
</form>


@endsection