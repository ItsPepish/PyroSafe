<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>PyroSafe Admin</title>
</head>
<body>
    <div class="flex min-h-dvh bg-[#e5f1f5]/30">
        <x-admin.aside/>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>