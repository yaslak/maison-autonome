<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/logo.svg') }}" type="image/svg"/>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap">
    <script src="https://kit.fontawesome.com/a2f81e3fdd.js" crossorigin="anonymous"></script>
    @livewireStyles
    <!-- Scripts -->
{{--    @vite(['resources/js/app.js'])--}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body style="background: url('images/bg.png'); background-size: cover;">
{{ $slot }}
@livewireScripts
</body>
</html>
