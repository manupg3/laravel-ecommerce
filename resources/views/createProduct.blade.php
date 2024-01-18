@extends('layout.layout-ecommerce')

@section('content')
   <div style="text-align: center;"> 
        <h1>Crear Nuevo Producto</h1>
   </div>
 <div class="container-form-create-products">
 <form method="POST" action="{{ route('saveProduct') }}" > 
    @csrf
    <label> Titulo
        <input type="text" name="title">
    </label>
    <label> Descripcion
        <input type="textarea" name="description">
    </label>
    <label> Precio
        <input type="text" name="price">
    </label>
    <input type="submit" value="Crear Producto">
 </form>
</div>
@endsection