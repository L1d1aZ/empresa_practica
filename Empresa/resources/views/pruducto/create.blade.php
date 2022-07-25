@extends('Template.template')
@section('plantillaweb')

<div class="container justify-center">
    <h2>Formulario Registro</h2>
    <form action="{{route('producto.store')}}" method="post" class="form">
        {{ csrf_field() }}
     <div class="mb-3">
       
       {{-- input doble --}}
        
       <div class="mb-3">
        <label for="" class="form.label">nombre1:</label>
        <input type="text" class="form-control" name="nombre1">
        
        
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">descripcion:</label>
        <input type="text" class="form-control" name="descripcion">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">existencia</label>
        <input type="text" class="form-control" name="existencia">
    </div>

</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">valor_unitario</label>
    <input type="number" class="form-control" name="valor_unitario">
</div>


<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">unidad_medida</label>
    <input type="number" class="form-control" name="unidad_medida">
</div>

</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">fecha_vencimiento</label>
    <input type="number" class="form-control" name="fecha_vencimiento">
</div>




        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection
