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
        <div class="flex min-w-0 flex-1 flex-col">
            <x-admin.header/>
            <main class="flex-1 overflow-y-auto p-4 sm:p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>