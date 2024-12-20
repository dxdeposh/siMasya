<!-- resources/views/pengaduan/layout.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title', 'Manajemen Pengaduan')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logoWeb.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind CSS (Jika Diperlukan) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Livewire Styles -->
    {{-- @livewireStyles --}}

    <!-- Additional Styles (Optional) -->
    @stack('styles')
</head>

<body class="font-sans antialiased">
    <!-- Main Container -->
    <div class="min-h-screen bg-gray-100">

        <!-- Optional: Navbar atau Header -->
        {{-- @include('partials.navbar') <!-- Pastikan Anda memiliki file ini atau hapus baris ini --> --}}

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Optional: Footer -->
        {{-- @include('partials.footer') <!-- Pastikan Anda memiliki file ini atau hapus baris ini --> --}}

    </div>

    <!-- Skrip Khusus Halaman -->
    @yield('scripts')

    <!-- Bootstrap JS (untuk navbar responsive dan komponen lainnya) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Livewire Scripts -->
    {{-- @livewireScripts --}}

    <!-- Additional Scripts (Optional) -->
    {{-- @stack('scripts') --}}
</body>

</html>
