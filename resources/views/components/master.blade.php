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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
  <div id="app">
    <section class="px-8 py-4 mb-6">
      <header class="container mx-auto flex justify-between items-center">
        <a href="{{ route('home') }}" class="flex items-center brand-logo">
          <span class="fas fa-feather fa-2x mr-2"></span>
          <h1>Tweety</h1>
        </a>
        @auth
          <a
            href="{{ route('logout') }}"
            class="border border-gray-300 shadow rounded-full px-2 py-1 text-gray-500">
            logout
          </a>
        @endauth
      </header>
    </section>
    {{ $slot}}
  </div>
</body>
</html>
