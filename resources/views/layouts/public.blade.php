<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>PyroSafe - </title>
</head>
<body>
    <header class="fixed top-0 left-0 w-full z-50 flex p-5 items-center justify-around border-b bg-white border-gray-200">
        <x-public.header/>

    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
</body>
</html>