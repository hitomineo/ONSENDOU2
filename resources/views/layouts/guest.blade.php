<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!--Bootstrap-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/css/bootstrap.min.css">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    
    
    <body class="font-sans antialiased">
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center  sm:pt-0 mb-5 pb-5">
            <div>
                <a href="/">
                    <div class="fill-current " />
                </a>
            </div>

            <div class="w-full sm:max-w-md px-6 py-4">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
