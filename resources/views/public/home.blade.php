@extends('layouts.public')

@section('content')
    
    <section class="relative h-screen w-full overflow-hidden">
        <img src="{{ Vite::asset('resources/images/tultepec02.webp') }}" alt="" class="absolute inset-0 h-full w-full object-cover">
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
                <div class="rounded-2xl border border-gray-300/50 bg-white shadow-sm relative flex flex-col gap-4 p-6 transition-all hover:-translate-y-1 hover:shadow-md">
                    <span class="grid size-12 place-items-center rounded-xl bg-{{ $feature['bg-color'] }}">
                        <x-dynamic-component :component="'icons.' . $feature['icon']" />
                    </span>
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold">{{ $feature['title'] }}</h3>
                        <p class="mt-2 text-gray-600 font-display">{{ $feature['description'] }}</p>
                    </div>
                    <a href="{{ $feature['href'] }}" class="text-{{ $feature['txt-color'] }} font-semibold inline-flex items-center gap-1.5">
                        {{ $feature['link_text'] }}
                        <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 12.0701H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 5L21.16 10C21.4324 10.2571 21.6494 10.567 21.7977 10.9109C21.946 11.2548 22.0226 11.6255 22.0226 12C22.0226 12.3745 21.946 12.7452 21.7977 13.0891C21.6494 13.433 21.4324 13.7429 21.16 14L16 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    

    <!-- Segunda Seccion -->
    <section class="bg-sky-200/20 border-b border-gray-300">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 grid items-center gap-10  md:grid-cols-2">
            <div class="relative aspect-4/3 overflow-hidden rounded-3xl border shadow-sm">
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
    <!-- Segunda Seccion -->

    <!-- Tercera Seccion -->
    <section class="border-b border-gray-300">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 flex flex-col gap-10">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-semibold">Información destacada</h2>
                    <p class="text-lg font-normal mt-3 font-display">Contenido educativo pensado para leerse en pocos minutos.</p>
                </div>
                <a href="" class="text-black font-semibold border border-gray-300 bg-white hover:bg-gray-100 rounded-lg px-3 py-2 cursor-pointer transition-colors">Ver biblioteca</a>
            </div>
            <div class="grid gap-5 md:grid-cols-3">
                <div class="rounded-2xl border border-gray-300/50 shadow-sm relative flex flex-col gap-4 p-6 transition-all hover:-translate-y-1 hover:shadow-md">
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
                    <h3 class="mt-4 text-lg font-semibold text-balance">Qué hacer antes de una quema de pirotecnia</h3>
                    <p class="mt-2 flex-1 text-sm font-display">Recomendaciones básicas para preparar el entorno y reducir riesgos antes de cualquier evento pirotécnico.</p>
                    <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                        Leer articulo
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg>
                    </a>
                </div>

                <div class="rounded-2xl border border-gray-300/50 shadow-sm relative flex flex-col gap-4 p-6 transition-all hover:-translate-y-1 hover:shadow-md">
                    <div class="flex items-center justify-between gap-2">
                        <span class="inline-flex items-center gap-1 rounded-full border border-gray-600/40 px-2.5 py-0.5 text-xs font-medium transition-colors">Emergencias</span>
                        <span class="inline-flex items-center gap-1 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock size-3.5" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 6v6l4 2"></path>
                            </svg>
                            6 mins
                        </span>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-balance">Cómo identificar un producto pirotécnico seguro</h3>
                    <p class="mt-2 flex-1 text-sm font-display">Aprender a reconocer el etiquetado, los permisos y las señales de que un producto proviene de una fuente confiable.</p>
                    <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                        Leer articulo
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg>
                    </a>
                </div>

                <div class="rounded-2xl border border-gray-300/50 shadow-sm relative flex flex-col gap-4 p-6 transition-all hover:-translate-y-1 hover:shadow-md">
                    <div class="flex items-center justify-between gap-2">
                        <span class="inline-flex items-center gap-1 rounded-full border border-gray-600/40 px-2.5 py-0.5  text-xs font-medium transition-colors">Prevención</span>
                        <span class="inline-flex items-center gap-1 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock size-3.5" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 6v6l4 2"></path>
                            </svg>
                            5 mins
                        </span>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-balance">Primeros auxilios ante quemaduras leves</h3>
                    <p class="mt-2 flex-1 text-sm font-display">Pasos inmediatos y seguros para atender una quemadura leve mientras llega ayuda profesional.</p>
                    <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                        Leer articulo
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Tercera Seccion -->

    <!-- Cuarta Seccion -->
    <section class="bg-sky-200/20 border-b border-gray-300">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 flex flex-col gap-10">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-semibold">Reportar es fácil y anónimo</h2>
                <p class="text-lg font-normal mt-3 font-display">En tres pasos puedes ayudar a prevenir un accidente. No necesitas crear una cuenta.</p>
            </div>
            <ol class="grid gap-5 md:grid-cols-3 ">
                <li class="rounded-2xl border border-gray-400/50 flex flex-col gap-4 p-6 bg-white">
                    <span class="font-display text-sm font-semibold">Paso 1</span>
                    <span class="grid size-10 place-items-center rounded-xl bg-sky-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin size-5" aria-hidden="true">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </span>
                    <h3 class="font-semibold">Indica la ubicación</h3>
                    <p class="text-sm font-display">Señala la zona aproximada del riesgo en el mapa o describe la dirección.</p>
                </li>
                <li class="rounded-2xl border border-gray-400/50 flex flex-col gap-4 p-6 bg-white">
                    <span class="font-display text-sm font-semibold">Paso 2</span>
                    <span class="grid size-10 place-items-center rounded-xl bg-sky-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text size-5" aria-hidden="true">
                            <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"></path>
                            <path d="M14 2v5a1 1 0 0 0 1 1h5"></path><path d="M10 9H8"></path>
                            <path d="M16 13H8"></path><path d="M16 17H8"></path>
                        </svg>
                    </span>
                    <h3 class="font-semibold">Describe la situación</h3>
                    <p class="text-sm font-display">Cuenta lo que observaste. Puedes adjuntar fotografías si lo deseas.</p>
                </li>
                <li class="rounded-2xl border border-gray-400/50 flex flex-col gap-4 p-6 bg-white">
                    <span class="font-display text-sm font-semibold">Paso 3</span>
                    <span class="grid size-10 place-items-center rounded-xl bg-sky-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send size-5" aria-hidden="true">
                            <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path>
                            <path d="m21.854 2.147-10.94 10.939"></path>
                        </svg>
                    </span>
                    <h3 class="font-semibold">Enviar tu reporte</h3>
                    <p class="text-sm font-display">Se dará seguimiento a tu reporte enviado.</p>
                </li>
            </ol>
            <div class="flex flex-col items-start gap-4 rounded-3xl p-8 bg-blue-950 text-white sm:flex-row sm:items-center sm:justify-between ">
                <div class="flex flex-col gap-4">
                    <h3 class="text-xl font-semibold">¿Detectaste una situación de riesgo?</h3>
                    <p class="text-sm font-display">Tu reporte puede evitar un accidente. Actúa con responsabilidad.</p>
                </div>
                <a href="#" class="text-white font-semibold bg-red-600 hover:bg-red-700 rounded-lg px-5 py-3 cursor-pointer transition-colors">Reportar un riesgo</a>
            </div>
        </div>
    </section>
    <!-- Cuarta Seccion -->
@endsection