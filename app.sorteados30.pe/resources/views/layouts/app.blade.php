<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/style.css?v=1.1') }}" rel="stylesheet">
</head>
<body class="body">

<div class="contenedor_principal">

	<img class="logo" src="{!!URL::asset('img/logo.png')!!}">

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<br /><br />
</div>
</body>
</html>
