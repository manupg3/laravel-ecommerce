@extends('layout.layout-ecommerce')

@section('content')
    <div class="container-home">
         <section class="slider-home">
            <div class="container-slider-home">
            
        
                <section id="sectionPin">
                    <div class="pin-wrap-sticky">
                        <div class="pin-wrap">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
                            <img src="{{ asset('assets/img/slider_img_1_animations.jpeg') }}" alt="">
                            <img src="{{ asset('assets/img/slider_img_2_animations.jpeg') }}" alt="">
                            <img src="{{ asset('assets/img/slider_img_3_animations.jpeg') }}" alt="">    
                        </div>
                    </div>
                </section>
        
         
            </div>
      
         </section>
        <section class="container-cards-product-animations">
               <h2 class="title-cards-product-animations">More sales</h2>
            <ul id="cards">
                @forelse ($products as $index => $product)
                    <li class="card" id="card_{{ $index + 1 }}" style="--index: {{ $index + 1 }};">
                        <div class="card__content">
                            <div>
                                <h2>{{ $product->title }}</h2>
                                <p>{{ $product->description }}</p>
                                <p><a href="#top" class="btn btn--accent">Comprar Ahora</a></p>
                            </div>
                            <figure>
                                <img src="{{ asset('assets/img/product_1.jpg') }}" alt="Image description"> <!-- Asegúrate de tener una URL de imagen en tus productos -->
                            </figure>
                        </div>
                    </li>
                @empty
                    <li class="card">
                        <div class="card__content">
                            <p>No hay productos para mostrar</p>
                        </div>
                    </li>
                @endforelse
            </ul>
            
        </section>
        <section class="section-colum-animation-scroll">
           
        </section>
        <section>
            <div>asdasd</div>
            <div>adasd</div>
            <div>asdasd</div>
            <div>asdasd</div>
            <div>asdasd</div>
        </section>
    </div>
@endsection
