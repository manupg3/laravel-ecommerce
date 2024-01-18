<header class="header-ecommerce">  
   <div class="container-logo-header"> 
       <div class="logo-header">
          <img src="{{ asset('assets/img/apex_logo.png') }}" alt="logo" >
      </div>
    </div>
    <div class="container-menu-header">
      <nav> 
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('tienda') }}">Tienda</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </nav>
        </div>
        <div class="container-right-header">
         <div class="container-icons-btn-header">
            <img src="{{ asset('assets/img/icono_account.svg') }}" alt="account" width="30px">
             <button class="btn-header">Comprar Ahora</button>
        </div>
        </div>
      </header>  