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
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>{{ config('app.name', 'Laravel') }</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        
    </body>
</html>