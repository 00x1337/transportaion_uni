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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <!-- Styles -->
        @livewireStyles

        <style>
            *,body{
                font-family: 'Cairo', sans-serif;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                        <nav class=" py-4">
                            <div class="container mx-auto flex items-center justify-between px-4">

                                <!-- Navbar Links as Buttons -->
                                <div class="flex items-center space-x-4">
                                    <form method="GET" action="{{ route('profile.show') }}">
                                        <button type="submit" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-blue-500 hover:bg-green-500 cursor-pointer">الملف الشخصي</button>
                                    </form>
                                    <form method="GET" action="{{ route('home') }}">
                                        <button type="submit" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-blue-500 hover:bg-green-500 cursor-pointer">الصفحة الرئيسية</button>
                                    </form>
                                    <form method="GET" action="{{ route('chats') }}">
                                        <button type="submit" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-blue-500 hover:bg-green-500 cursor-pointer">الدردشة</button>
                                    </form>
                                    @if(\Auth::user()->role != "user")
                                        <form method="GET" action="{{ route('req') }}">
                                            <button type="submit" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-blue-500 hover:bg-green-500 cursor-pointer">الطلبات</button>
                                        </form>
                                    @endif



                                </div>
                            </div>
                        </nav>

                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
