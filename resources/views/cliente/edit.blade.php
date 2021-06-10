@extends('layouts.plantillabase1');

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/cliente/{{$cliente->id}}" method="POST">
  @csrf
  @method('PUT')
 <div class="mb-3">
  <label for="" class="form-label">N_identificacion</label>
  <input id="n_identificacion" name="n_identificacion" type="number" class="form-control" value="{{$cliente->n_identificacion}}">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Nombres</label>
  <input id="nombres" name="nombres" type="text" class="form-control" value="{{$cliente->nombres}}">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Apellidos</label>
  <input id="apellidos" name="apellidos" type="text" class="form-control" value="{{$cliente->apellidos}}">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Direccion</label>
  <input id="direccion" name="direccion" type="text" class="form-control" value="{{$cliente->direccion}}">
 </div>
 <div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input id="telefono" name="telefono" type="number" class="form-control" value="{{$cliente->telefono}}">
</div>
<a href= "/cliente" class="btn btn-secondary" tabindex="6">Cancelar</a>
<button type="submit" class= "btn btn-primary" tabindex="5">Guardar</button> 
</form>

@endsection