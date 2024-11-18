<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased h-screen">
        <div class="min-h-screen flex flex-col bg-custom-bg bg-cover bg-center bg-fixed">
            <x-navbar :isDashboard="request()->is('dashboard*')" :isMainPage="!request()->is('dashboard*')"/>
            <!-- Page Content -->
            <main class="flex-grow pt-4 pb-4">
                {{ $slot }}
            </main>
            @include('layouts.footer')
        </div>
    </body>
</html>
