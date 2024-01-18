@extends('layout.layout-ecommerce')

@section('title', 'Tienda')

@section('content')
    <div class="container-body-shop">
          <a href="{{ route('createProduct') }}">Crear Nuevo Producto</a>  
        <ul>
            @forelse ($products as $product)
                <li> {{ $product->title }} </li>
                <li> {{ $product->description }} </li>
                <li> {{ $product->price }} </li>
                <a href="{{ route('editProduct', ['product' => $product->id] ) }}">Editar</a>
            @empty
                <p>No hay productos para mostrar</p>
            @endforelse
        </ul>
    </div>
@endsection
