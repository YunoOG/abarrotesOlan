{{-- app backend --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', ' Ecommerce') | Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Scripts -->

    @vite(['resources/css/dashboard.css', 'resources/js/dashboard.js'])
    @livewireStyles
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

<body class="antialiased text-neutral-800">
    <x-toast />
    <div>
        <div class="hidden md:flex fixed top-0 bottom-0">
            @include('layouts.sidebar')
        </div>

        <div class="md:ml-72">
            <div class="min-h-screen bg-neutral-100 dark:bg-neutral-900">
                @include('layouts.navigation')

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-neutral-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <h2 class="font-semibold text-xl text-neutral-800 dark:text-neutral-200 leading-tight">
                                {{ $header }}
                            </h2>
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto px-2 sm:px-4">
                            {{ $slot }}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    @livewireScripts
    @stack('js')
</body>

</html>
