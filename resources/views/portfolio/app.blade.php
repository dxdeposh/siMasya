<!-- resources/views/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('port/logo2.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>

    <!-- Muat aset frontend menggunakan Vite -->
    @viteReactRefresh
    @vite(['resources/js/main.jsx', 'resources/css/app.css'])

</head>

<body>
    <div id="root"></div>
</body>

</html>
