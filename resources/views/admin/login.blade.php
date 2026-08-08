<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>PyroSafe - Login</title>
</head>
<body>
    <div class="flex min-h-svh items-center justify-center bg-[#10222b] px-4 py-16 text-[#dee6e9]">
        <div class="w-full max-w-md">
            <div class="mb-8 flex flex-col items-center text-center">
                <h1 class="text-2xl font-bold text-white">Panel Administrativo</h1>
                <p class="mt-2 text-sm text-[#dee6e9]/70 text-pretty">Ingresa con tus credenciales.</p>
            </div>
            <form action="{{ route('admin.auth') }}" method="POST" class="rounded-2xl border border-[#283b45] bg-[#1b313d]/40 p-6 backdrop-blur flex flex-col gap-2">
                @csrf
                <label for="email" class="font-semibold">Correo Electrónico</label>
                <input type="email" name="email" id="email" autocomplete="email" placeholder="ejemplo@correo.com" value="{{ old('email') }}" required class="border rounded-md px-2 py-1 border-[#283b45] bg-[#10222b] text-[#dee6e9]">
                <label for="password" class="font-semibold">Contraseña</label>
                <input type="password" name="password" id="password" autocomplete="current-password" placeholder="ejemplo123" required class="border rounded-md px-2 py-1 border-[#283b45] bg-[#10222b] text-[#dee6e9]">
                @error('errorLogin')
                <p class="text-red-500 font-semibold text-center">{{ $message }}</p>
                @enderror
                <button type="submit" class="bg-sky-500 hover:bg-sky-600 transition-colors text-white rounded-2xl py-2 cursor-pointer mt-4 font-medium">Ingresar al panel</button>
            </form>
        </div>
    </div>
</body>
</html>