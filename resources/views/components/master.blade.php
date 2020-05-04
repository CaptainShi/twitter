<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/7300961107.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen">
<div id="app" class="flex-grow">
    <section class="px-8 py-4 mb-6">
        <header class="container mx-auto">
            <a href="/tweets">
                <i class="fab fa-twitter fa-5x"></i>
            </a>
        </header>
    </section>

    {{ $slot }}
</div>
<div class="bg-blue-300 items-center mt-16 p-20">
    <footer>
        <p class="font-bold text-xl" style="text-align: center;">&copy; Haoran Shi 2020. All Rights Reserved</p>
    </footer>
</div>

<script src="http://unpkg.com/turbolinks"></script>
</body>
</html>
