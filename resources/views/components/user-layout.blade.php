<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'E-waste collections') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<x-banner />

<div class="min-h-screen bg-gray-100 flex flex-row relative">


    <!-- Page Content -->
    <main class="w-full mx-auto  ">
        <div class="px-4 py-3 flex flex-row justify-between w-full bg-white items-center ">
            <img class="h-10 w-24" src="/Landing_Page/images/Logo.png" alt="">
            <div>
                <div class="w-[450px] ">
                    @livewire('backend.form.header')

                </div>
            </div>
            <div class="w-[100px]">

            </div>
        </div>
        <div class="container mx-auto">
            {{$slot }}
        </div>

    </main>

</div>

@stack('modals')

@livewireScripts
</body>
</html>
