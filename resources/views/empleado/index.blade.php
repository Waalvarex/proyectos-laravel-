@extends('layouts.plantillabase');

@section('contenido')
<a href="empleado/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
           <th scope="col">ID</th>
           <th scope="col">N_identificacion</th>
           <th scope="col">Nombres</th>
           <th scope="col">Apellidos</th>
           <th scope="col">Direccion</th>
           <th scope="col">Telefono</th>
           <th scope="col">Acciones</th>

        </tr>
    </thead> 
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->n_identificacion}}</td>
            <td>{{$empleado->nombres}}</td>
            <td>{{$empleado->apellidos}}</td>
            <td>{{$empleado->direccion}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>
               <form action="{{route ('empleado.destroy',$empleado->id)}}" method="POST">
               <a href= "/empleado/{{$empleado->id}}/edit"class= "btn btn-info">Editar</a>
               @csrf
               @method('DELETE')
               <button type="submit" class= "btn btn-danger">Borrar</button>
               </form>
            </td>
        </tr>
        @endforeach

    </tbody>

</table>
@endsection
