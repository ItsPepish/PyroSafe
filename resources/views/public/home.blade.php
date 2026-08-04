@extends('layouts.public')

@section('content')
    
    <section class="relative h-screen w-full overflow-hidden">
        <img src="{{ Vite::asset('resources/images/tultepec02.webp') }}" alt="" class="absolute inset-0 h-full w-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative mx-auto max-w-6xl px-4 py-20 text-white flex flex-col h-full justify-center gap-8 ">
            <h1 class="text-6xl max-w-2xl font-bold leading-tight">Seguridad pirotécnica para toda la comunidad</h1>
            <p class="text-xl max-w-xl">Información confiable, establecimientos autorizados y una vía sencilla para reportar situaciones de riesgo. PyroSafe fortalece la prevención y la participación ciudadana.</p>
            <div class="flex gap-4">
                <a href="#" class="text-white font-semibold bg-red-600 hover:bg-red-700 rounded-2xl px-4 py-2 cursor-pointer transition-colors">Reportar un riesgo</a>
                <a href="#" class="text-black font-semibold bg-white hover:bg-gray-300 rounded-2xl px-4 py-2 cursor-pointer transition-colors">Ver establecimientos</a>
            </div>
        </div>
    </section>
    <section class="mx-auto max-w-6xl px-4 py-16">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-semibold">Todo en un solo lugar</h2>
            <p class="mt-3 text-pretty leading-relaxed text-muted-foreground">Accede directo a los módulos principales de la plataforma, pensados para ser claros y fáciles de usar por cualquier persona.</p>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-3">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </section>
    
@endsection