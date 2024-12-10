<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Nun-Coffee') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- CSS untuk Full Halaman -->
        <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #app {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1; /* Membuat konten utama mengambil ruang tersisa */
        }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div id="app" class="bg-gray-100">
            <!-- Navigation -->
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="bg-gray-100">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-gray-800 text-white">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <!-- Contact Info -->
                        <div class="mb-4 md:mb-0">
                            <h2 class="text-lg font-semibold">Contact Us</h2>
                            <p>Email: <a href="mailto:contact@example.com" class="text-blue-400">contact@example.com</a></p>
                            <p>Phone: <a href="tel:+1234567890" class="text-blue-400">+1 234 567 890</a></p>
                            <p>Address: Jl. Pramuka No.4, Lembah Sari, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28262</p>
                        </div>

                        <!-- Social Media Links -->
                        <div>
                            <h2 class="text-lg font-semibold">Follow Us</h2>
                            <div class="flex space-x-4">
                                <a href="#" class="text-blue-400 hover:text-white">Facebook</a>
                                <a href="#" class="text-blue-400 hover:text-white">Twitter</a>
                                <a href="#" class="text-blue-400 hover:text-white">Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-900 text-center py-4">
                    <p class="text-sm">&copy; {{ date('Y') }} Your Company. All Rights Reserved.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
