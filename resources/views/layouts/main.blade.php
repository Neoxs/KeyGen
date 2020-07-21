<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        
        <!-- Styles -->        
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>{{ config('app.name', 'Laravel') }</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
    <div class="container">
            <header class="header">
                <img src="img/logo.png" alt="KeyGen logo" class="logo">

                <form action="#" class="search" >
                    <input type="text" class="search__input" placeholder="Search products">
                    <button class="search_button" >
                        <svg class="search__icon">
                            <use xlink:href="img/sprite.svg#icon-magnifying-glass"></use>
                        </svg>
                    </button>
                </form>

                <nav class="user-nav">
                    <div class="user-nav__icon-box">
                        <svg class="user-nav__icon">
                            <use xlink:href="img/sprite.svg#icon-bookmark"></use>
                        </svg>
                        <span class="user-nav__notification">7</span>
                    </div>
                    <div class="user-nav__icon-box">
                        <svg class="user-nav__icon">
                            <use xlink:href="img/sprite.svg#icon-chat"></use>
                        </svg>
                        <span class="usr-nav__notification">13</span>
                    </div>
                    <div class="user-nav__user">
                        <img src="img/user.jpg" alt="User photo" class="user-nav__user-photo">
                        <span class="usr-nav__user-name">{{ Auth::user()->name }}</span>
                    </div>
                </nav>
            </header>
            <div class="content">
                <nav class="sidebar">
                    Navigation
                </nav>
                <main class="main-view">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>