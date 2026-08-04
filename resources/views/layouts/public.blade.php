<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>PyroSafe - </title>
</head>
<body>
    <x-public.header/>

    <main>
        @yield('content')
    </main>

    <x-public.footer/>

</body>
</html>