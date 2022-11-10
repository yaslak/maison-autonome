<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/logo.svg') }}" type="image/svg"/>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2f81e3fdd.js" crossorigin="anonymous"></script>
    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background: url('images/bg.png'); background-size: cover;font-family: 'Poppins', sans-serif;">
<div class="" style="background: linear-gradient(180deg, #EFFBFF 0%, #FFFFFF 100%) !important;padding-top: 60px;">
    <div class="md:container mx-auto">
        {{ $slot }}
    </div>
</div>
@livewireScripts
</body>
</html>
