@extends('Template.template')
@section('plantillaweb')

<h2>LISTADO DE pruductu</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nombre1</th>
        <th scope="col">descripcion</th>
        <th scope="col">existencia</th>
        <th scope="col">valor_unitario</th>
        <th scope="col">unidad_medida</th>
        <th scope="col">fecha_vencimiento</th>
      </tr>
    
    
    </thead>
      <tbody>
        @foreach ($pruducto as $T)
      <tr>
        <th scope="row">{{$T->nombres1}}</th>
        <td scope="row"> {{$T->descripcion}}</td>
        <td scope="row"> {{$T->existencia}}</td>
        <td scope="row"> {{$T->valor_unitario}}</td>
        <td scope="row"> {{$T->unidad_medida}}</td>
        <td scope="row"> {{$T->fecha_vencimiento}}</td>
        
        <td>

          <a href="{{route('pruducto.edit',$T)}}" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Editar</a>
        </td>
        <td>
          <form action="" method="post">
            @method('DELETE')
            @csrf
          <a href="{{route('pruductu.destroy',$T)}}" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Eliminar</a>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$pruducto->links()}}
@endsection




