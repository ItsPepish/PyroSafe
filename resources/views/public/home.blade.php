@extends('layouts.public')

@section('content')
    
    <section class="relative h-screen w-full overflow-hidden -mt-16">
        <img src="{{ Vite::asset('resources/images/tultepec02.webp') }}" alt="" class="absolute inset-0 size-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative mx-auto max-w-6xl px-4 sm:px-6 text-white flex flex-col h-full justify-center gap-8">
            <h1 class="text-4xl sm:text-5xl md:text-6xl max-w-3xl font-bold leading-tight">Seguridad pirotécnica para toda la comunidad</h1>
            <p class="text-base md:text-lg max-w-xl font-display">Información confiable, establecimientos autorizados y una vía sencilla para reportar situaciones de riesgo. PyroSafe fortalece la prevención y la participación ciudadana.</p>
            <div class="flex flex-wrap gap-4 font-display">
                <a href="#" class="text-white font-semibold bg-red-600 hover:bg-red-700 rounded-lg px-5 py-3 cursor-pointer transition-colors">Reportar un riesgo</a>
                <a href="#" class="text-black font-semibold bg-white hover:bg-gray-300 rounded-lg px-5 py-3 cursor-pointer transition-colors">Ver establecimientos</a>
            </div>
        </div>
    </section>

    <section class="border-b border-gray-300">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 flex flex-col gap-10">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-semibold">Todo en un solo lugar</h2>
                <p class="text-lg font-display mt-3">Accede directo a los módulos principales de la plataforma, pensados para ser claros y fáciles de usar por cualquier persona.</p>
            </div>
            <div class="grid gap-5 md:grid-cols-3">
                @foreach($features as $feature)
                @php
                if($feature['color'] == 'sky') {
                    $bgColor = 'bg-sky-200';
                    $txtColor = 'text-sky-600';
                } else {
                    $bgColor = 'bg-red-200';
                    $txtColor = 'text-red-600';
                }
                @endphp
                <div class="rounded-2xl border border-gray-300/50 bg-white shadow-sm relative flex flex-col gap-4 p-6 transition-all hover:-translate-y-1 hover:shadow-md">
                    <span class="grid size-12 place-items-center rounded-xl {{ $bgColor }}">
                        <x-dynamic-component :component="'icons.' . $feature['icon']" />
                    </span>
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold">{{ $feature['title'] }}</h3>
                        <p class="mt-2 text-gray-600 font-display">{{ $feature['description'] }}</p>
                    </div>
                    <a href="{{ $feature['href'] }}" class="{{ $txtColor }} font-semibold inline-flex items-center gap-1.5">
                        {{ $feature['link_text'] }}
                        <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 12.0701H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 5L21.16 10C21.4324 10.2571 21.6494 10.567 21.7977 10.9109C21.946 11.2548 22.0226 11.6255 22.0226 12C22.0226 12.3745 21.946 12.7452 21.7977 13.0891C21.6494 13.433 21.4324 13.7429 21.16 14L16 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="absolute inset-0" aria-hidden="true"></span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <section class="bg-sky-200/20 border-b border-gray-300">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 grid items-center gap-10  md:grid-cols-2">
            <div class="relative aspect-4/3 overflow-hidden rounded-3xl border border-[#d6e0e4] shadow-sm">
                <img src="{{ Vite::asset('resources/images/tultepec03.webp') }}" alt="" class="h-full w-full object-cover">
            </div>
            <div>
                <h2 class="text-3xl font-semibold text-balance">Prevenir es cuidar a la comunidad</h2>
                <p class="mt-3 font-display">Pequeñas acciones marcan la diferencia. Estas son algunas medidas básicas que todos podemos aplicar.</p>
                <ul class="mt-8 grid gap-4 sm:grid-cols-2">
                    <li class="flex gap-3">
                        <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-sky-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span>
                            <span class="block text-sm font-semibold">Distancia segura</span>
                            <span class="mt-0.5 block text-sm font-display text-justify">Mantén al menos 15 metros entre el público y el punto de quema.</span>
                        </span>
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-sky-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span>
                            <span class="block text-sm font-semibold">Nunca en interiores</span>
                            <span class="mt-0.5 block text-sm font-display text-justify">No enciendas ni almacenes pirotecnia dentro de viviendas.</span>
                        </span>
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-sky-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span>
                            <span class="block text-sm font-semibold">Supervisión adulta</span>
                            <span class="mt-0.5 block text-sm font-display text-justify">La manipulación siempre debe estar a cargo de personas adultas.</span>
                        </span>
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-sky-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span>
                            <span class="block text-sm font-semibold">Compra autorizada</span>
                            <span class="mt-0.5 block text-sm font-display text-justify">Adquiere solo en establecimientos con permiso vigente.</span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="border-b border-gray-300">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 flex flex-col gap-10">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-semibold">Información destacada</h2>
                    <p class="text-lg font-normal mt-3 font-display">Contenido educativo pensado para leerse en pocos minutos.</p>
                </div>
                <a href="/info" class="text-black font-semibold border border-gray-300 bg-white hover:bg-gray-100 rounded-lg px-3 py-2 cursor-pointer transition-colors">Ver biblioteca</a>
            </div>
            <div class="grid gap-5 md:grid-cols-3">
                @foreach($publications as $publication)
                <div class="flex flex-col h-full rounded-2xl border border-gray-300/50 shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Storage::url($publication->coverImage->path) }}" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="flex flex-1 flex-col p-4 gap-4">
                        <div class="flex items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1 rounded-full border border-gray-600/40 px-2.5 py-0.5 text-xs font-medium transition-colors">Buenas prácticas</span>
                            <span class="inline-flex items-center gap-1 text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock size-3.5" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 6v6l4 2"></path>
                                </svg>
                                4 mins
                            </span>
                        </div>
                        <h3 class="text-lg font-semibold text-balance">{{ $publication->title }}</h3>
                        <p class="flex-1 text-sm font-display">{{ $publication->summary }}</p>
                        <a href="{{ route('publications.show', $publication) }}" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                            <span class="absolute inset-0" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-sky-200/20 border-b border-gray-300">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 flex flex-col gap-10">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-semibold">Reportar es fácil y anónimo</h2>
                <p class="text-lg font-normal mt-3 font-display">En tres pasos puedes ayudar a prevenir un accidente. No necesitas crear una cuenta.</p>
            </div>
            <ol class="grid gap-5 md:grid-cols-3 ">
                @foreach($reportSteps as $reportStep)
                <li class="rounded-2xl border border-gray-400/50 flex flex-col gap-4 p-6 bg-white">
                    <span class="font-display text-sm font-semibold">{{ $reportStep['step'] }}</span>
                    <span class="grid size-10 place-items-center rounded-xl bg-sky-200">
                        <x-dynamic-component :component="'icons.' . $reportStep['icon']" />
                    </span>
                    <h3 class="font-semibold">{{ $reportStep['title'] }}</h3>
                    <p class="text-sm font-display">{{ $reportStep['description'] }}</p>
                </li>
                @endforeach
            </ol>
            <div class="flex flex-col items-start gap-4 rounded-3xl p-8 bg-blue-950 text-white sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-4">
                    <h3 class="text-xl font-semibold">¿Detectaste una situación de riesgo?</h3>
                    <p class="text-sm font-display max-w-lg">Tu participación es clave. Reporta talleres clandestinos, almacenamiento irregular o cualquier situación de riesgo. Tu reporte puede salvar vidas.</p>
                </div>
                <a href="#" class="text-white font-semibold bg-red-600 hover:bg-red-700 rounded-lg px-5 py-3 cursor-pointer transition-colors text-center self-center">Reportar un riesgo</a>
            </div>
        </div>
    </section>
@endsection