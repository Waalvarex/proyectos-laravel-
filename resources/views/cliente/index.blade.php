@extends('layouts.plantillabase1');

@section('contenido')
<a href="cliente/create" class="btn btn-primary">CREAR</a>

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
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->n_identificacion}}</td>
            <td>{{$cliente->nombres}}</td>
            <td>{{$cliente->apellidos}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>
               <form action="{{route ('cliente.destroy',$cliente->id)}}" method="POST">
               <a href= "/cliente/{{$cliente->id}}/edit"class= "btn btn-info">Editar</a>
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
