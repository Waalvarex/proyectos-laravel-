@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR EMPLEADO </h2>

<form action="/empleado" method="POST">
  @csrf
 <div class="mb-3">
  <label for="" class="form-label">N_identificacion</label>
  <input id="n_identificacion" name="n_identificacion" type="number" class="form-control" tabindex="1">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Nombres</label>
  <input id="nombres" name="nombres" type="text" class="form-control" tabindex="2">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Apellidos</label>
  <input id="apellidos" name="apellidos" type="text" class="form-control" tabindex="3">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Direccion</label>
  <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input id="telefono" name="telefono" type="number" class="form-control" tabindex="5">
</div>
<a href= "/empleado" class="btn btn-secondary" tabindex="6">Cancelar</a>
<button type="submit" class= "btn btn-primary" tabindex="5">Guardar</button> 
</form>

@endsection