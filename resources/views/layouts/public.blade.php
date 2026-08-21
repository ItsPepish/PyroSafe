<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title') | PyroSafe</title>
</head>
<body>
    <x-public.header />

    <main>
        @yield ('content')
    </main>

    <x-public.footer />
</body>
</html>
