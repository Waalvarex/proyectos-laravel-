@extends('layouts.plantillabase');

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/empleado/{{$empleado->id}}" method="POST">
  @csrf
  @method('PUT')
 <div class="mb-3">
  <label for="" class="form-label">N_identificacion</label>
  <input id="n_identificacion" name="n_identificacion" type="number" class="form-control" value="{{$empleado->n_identificacion}}">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Nombres</label>
  <input id="nombres" name="nombres" type="text" class="form-control" value="{{$empleado->nombres}}">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Apellidos</label>
  <input id="apellidos" name="apellidos" type="text" class="form-control" value="{{$empleado->apellidos}}">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Direccion</label>
  <input id="direccion" name="direccion" type="text" class="form-control" value="{{$empleado->direccion}}">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input id="telefono" name="telefono" type="number" class="form-control" value="{{$empleado->telefono}}">
</div>
<a href= "/empleado" class="btn btn-secondary" tabindex="6">Cancelar</a>
<button type="submit" class= "btn btn-primary" tabindex="5">Guardar</button> 
</form>

@endsection