@extends('Template.template')
@section('plantillaweb')

<div class="container justify-center">
    <h2>Formulario Registro</h2>
    <form action="" method="post" class="form">
        {{ csrf_field() }}
     <div class="mb-3">
       
       {{-- input doble --}}
        
       <div class="mb-3">
        <label for="" class="form.label">fecha:</label>
        <input type="munber" class="form-control" name="fecha">
        
        
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">cliente:</label>
        <input type="text" class="form-control" name="cliente">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">numero_articulo</label>
        <input type="number" class="form-control" name="numero_articulo">
    </div>

</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">codido_articulo</label>
    <input type="number" class="form-control" name="codigo_articulo">
</div>


<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nombre_articulo</label>
    <input type="text" class="form-control" name="nombre_articulo">
</div>

</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">sub_total</label>
    <input type="number" class="form-control" name="sub_total">
</div>


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">iva</label>
    <input type="number" class="form-control" name="iva">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">valor_total</label>
    <input type="number" class="form-control" name="valor_total">
</div>



        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection
