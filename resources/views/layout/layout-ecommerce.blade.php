<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/general-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles-form-product.css') }}">
    <title>
        @yield('title')
    </title>
</head>
<body>   
        @include('layout._partials.header')
        <div class="container-title-page">
            <h1>@yield('title')</h1>
        </div>    
        @yield('content')
</body>
</html>
