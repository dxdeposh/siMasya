<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logoWeb.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex">
        <!-- Sidebar -->
        <div class="w-80 bg-white text-[#717171] sticky top-0 h-screen border-r-2 border-[#717171] sm:block hidden">
            @include('layouts.partials.admin.sidebar')
        </div>

        <!-- Main Content Area -->
        <div class="flex-1">
            <!-- Navbar -->
            @include('layouts.partials.admin.navbar')



            <!-- Page Content -->

            {{-- {{ $slot }} --}}


            <!-- Konten Halaman -->
            <main>
                <div class="container mt-4">
                    @yield('content')
                </div>
            </main>

            @include('layouts.partials.admin.footer')
        </div>
    </div>

    <!-- Skrip Khusus Halaman -->
    @yield('scripts')

    <!-- Bootstrap JS (untuk navbar responsive dan komponen lainnya) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
