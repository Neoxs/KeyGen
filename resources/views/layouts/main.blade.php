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

        <title>{{ config('app.name', 'KeyGen') }}</title>

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
                        <span class="user-nav__notification">13</span>
                    </div>
                    <div class="user-nav__user">
                        <img src="img/user.png" alt="User photo" class="user-nav__user-photo">
                        <span class="user-nav__user-name">{{ Auth::user()->name }}</span>
                    </div>
                </nav>
            </header>
            <div id="content" class="content">
                <nav class="sidebar">
                    <ul class="side-nav">
                        <li class="side-nav__item side-nav__item--active">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="img/sprite.svg#icon-home"></use>
                                </svg>
                                <span>Home</span>
                            </a>
                        </li>

                        <li class="side-nav__item">
                            <a href="#" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="img/sprite.svg#icon-user"></use>
                                </svg>
                                <span>Profile</span>
                            </a>
                        </li>

                        <li class="side-nav__item">
                            <a href="/products" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="img/sprite.svg#icon-price-tag"></use>
                                </svg>
                                <span>Products</span>
                            </a>
                        </li>

                        <li class="side-nav__item">
                            <a href="/licenses" class="side-nav__link">
                                <svg class="side-nav__icon">
                                    <use xlink:href="img/sprite.svg#icon-key"></use>
                                </svg>
                                <span>My Licenses</span>
                            </a>
                        </li>

                        <li class="side-nav__item">
                            <a class="side-nav__link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <svg class="side-nav__icon">
                                    <use xlink:href="img/sprite.svg#icon-log-out"></use>
                                </svg>
                                <span>Log Out</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>

                    <div class="legal">
                        &copy; <script>document.write(new Date().getFullYear())</script> by KeyGen. All rights reserved.
                    </div>
                </nav>
                <main class="main-view">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
