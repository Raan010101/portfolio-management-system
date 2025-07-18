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
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <div class="min-h-screen flex flex-col">

        <!-- Top Navigation -->
        <nav class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="text-2xl font-bold text-purple-600 dark:text-purple-400">
                        PortfolioHub
                    </a>

                    <!-- Links -->
                    <div class="hidden md:flex space-x-6">
                        <a href="{{ route('talent.dashboard') }}" class="hover:text-purple-500">Talent Dashboard</a>
                        <a href="{{ route('client.dashboard') }}" class="hover:text-blue-500">Client Dashboard</a>
                    </div>

                    <!-- Right Side -->
                    <div class="flex items-center space-x-4">
                        <!-- Dark Mode Toggle -->
                        <button onclick="document.documentElement.classList.toggle('dark')" class="p-2 rounded bg-gray-200 dark:bg-gray-700">
                            🌙
                        </button>

                        <!-- User -->
                        @auth
                            <span>{{ Auth::user()->name }}</span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">Logout</button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-gray-100 dark:bg-gray-700 shadow">
                <div class="max-w-7xl mx-auto py-4 px-6">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
