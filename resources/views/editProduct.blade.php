@extends('layout.layout-ecommerce')

@section('content')
   <div style="text-align: center;"> 
        <h1>Editar Producto</h1>
   </div>
 <div class="container-form-create-products">
 <form method="POST" action="{{ route('saveProduct') }}" > 
    @csrf
    <label> Titulo
        <input type="text" name="title" value="{{ $product->title }}">
    </label>
    <label> Descripcion
        <input type="textarea" name="description" value="{{ $product->description }}">
    </label>
    <label> Precio
        <input type="text" name="price" value="{{ $product->price }}">
    </label>
    <input type="submit" value="Editar Producto">
 </form>
</div>
@endsection