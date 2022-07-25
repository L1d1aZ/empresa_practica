@extends('Template.template')
@section('plantillaweb')

<h2>LISTADO DE clientes</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">fecha</th>
        <th scope="col">cliente</th>
        <th scope="col">numero_articulo</th>
        <th scope="col">codigo_articulo</th>
        <th scope="col">nombre_articulo</th>
        <th scope="col">sub_total</th>
        <th scope="col">iva</th>
        <th scope="col">valor_total</th>
      </tr>


      
    </thead>
      <tbody>
        @foreach ($ as $T)custumer
      <tr>
        <th scope="row">{{$T->fecha}}</th>
        <td scope="row"> {{$T->cliente}}</td>
        <td scope="row"> {{$T->numero_articulo}}</td>
        <td scope="row"> {{$T->codigo_articulo}}</td>
        <td scope="row"> {{$T->nombre_articulo}}</td>
        <td scope="row"> {{$T->iva}}</td>
        <td scope="row"> {{$T->valor_total}}</td>
        
        <td>

          <a href="{{route('orders.edit',$T)}}" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Editar</a>
        </td>
        <td>
          <form action="" method="post">
            @method('DELETE')
            @csrf
          <a href="{{route('orders.destroy',$T)}}" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Eliminar</a>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$orders->links()}}
@endsection




