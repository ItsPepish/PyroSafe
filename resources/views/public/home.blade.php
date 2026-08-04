@extends('layouts.public')

@section('content')
    
    <!-- Primer Seccion -->
    <section class="relative h-screen w-full overflow-hidden">
        <img src="{{ Vite::asset('resources/images/tultepec02.webp') }}" alt="" class="absolute inset-0 h-full w-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative mx-auto max-w-6xl px-4 py-20 sm:px-6 md:py-28 text-white flex flex-col h-full justify-center gap-8">
            <h1 class="text-4xl sm:text-5xl md:text-6xl max-w-2xl font-bold leading-tight">Seguridad pirotécnica para toda la comunidad</h1>
            <p class="text-xl max-w-xl font-display">Información confiable, establecimientos autorizados y una vía sencilla para reportar situaciones de riesgo. PyroSafe fortalece la prevención y la participación ciudadana.</p>
            <div class="flex flex-wrap gap-4 font-display">
                <a href="#" class="text-white font-semibold bg-red-600 hover:bg-red-700 rounded-lg px-5 py-3 cursor-pointer transition-colors">Reportar un riesgo</a>
                <a href="#" class="text-black font-semibold bg-white hover:bg-gray-300 rounded-lg px-5 py-3 cursor-pointer transition-colors">Ver establecimientos</a>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 flex flex-col gap-10">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-semibold">Todo en un solo lugar</h2>
            <p class="text-lg font-display mt-3 ">Accede directo a los módulos principales de la plataforma, pensados para ser claros y fáciles de usar por cualquier persona.</p>
        </div>
        <div class="grid gap-5 md:grid-cols-3">
            <div class="rounded-2xl border border-gray-300/50 shadow-sm relative flex flex-col gap-4 p-6 transition-all hover:-translate-y-1 hover:shadow-md">
                <span class="grid size-12 place-items-center rounded-xl bg-sky-200">
                    <svg width="24px" height="24px" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 3.99995C12.8839 2.91716 14.9355 2.15669 17.07 1.74995C17.551 1.63467 18.0523 1.63283 18.5341 1.74458C19.016 1.85632 19.4652 2.07852 19.8464 2.39375C20.2276 2.70897 20.5303 3.10856 20.7305 3.56086C20.9307 4.01316 21.0229 4.50585 21 4.99995V13.9999C20.9699 15.117 20.5666 16.1917 19.8542 17.0527C19.1419 17.9136 18.1617 18.5112 17.07 18.7499C14.9355 19.1567 12.8839 19.9172 11 20.9999" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.9995 3.99995C9.1156 2.91716 7.06409 2.15669 4.92957 1.74995C4.44856 1.63467 3.94731 1.63283 3.46546 1.74458C2.98362 1.85632 2.53439 2.07852 2.15321 2.39375C1.77203 2.70897 1.46933 3.10856 1.26911 3.56086C1.0689 4.01316 0.976598 4.50585 0.999521 4.99995V13.9999C1.0296 15.117 1.433 16.1917 2.14533 17.0527C2.85767 17.9136 3.83793 18.5112 4.92957 18.7499C7.06409 19.1567 9.1156 19.9172 10.9995 20.9999" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11 21V4" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <div class="flex-1">
                    <h3 class="text-lg font-semibold">Información Preventiva</h3>
                    <p class="mt-2 text-gray-600 font-display">Articulos, recomendaciones y buenas prácticas para el uso responsable de la pirotecnia.</p>
                </div>
                <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                    Explorar
                    <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 12.0701H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 5L21.16 10C21.4324 10.2571 21.6494 10.567 21.7977 10.9109C21.946 11.2548 22.0226 11.6255 22.0226 12C22.0226 12.3745 21.946 12.7452 21.7977 13.0891C21.6494 13.433 21.4324 13.7429 21.16 14L16 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <div class="rounded-2xl border border-gray-300/50 shadow-sm relative flex flex-col gap-4 p-6 transition-all hover:-translate-y-1 hover:shadow-md">
                <span class="grid size-12 place-items-center rounded-xl bg-sky-200">
                    <svg width="24px" height="24px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 11.3201C3 8.93312 3.94822 6.64394 5.63605 4.95612C7.32387 3.26829 9.61305 2.32007 12 2.32007C14.3869 2.32007 16.6762 3.26829 18.364 4.95612C20.0518 6.64394 21 8.93312 21 11.3201" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 11.3201C3 17.4201 9.76 22.3201 12 22.3201C14.24 22.3201 21 17.4201 21 11.3201" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 15.3201C14.2091 15.3201 16 13.5292 16 11.3201C16 9.11093 14.2091 7.32007 12 7.32007C9.79086 7.32007 8 9.11093 8 11.3201C8 13.5292 9.79086 15.3201 12 15.3201Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <div class="flex-1">
                    <h3 class="text-lg font-semibold">Mapa de Establecimientos</h3>
                    <p class="mt-2 text-gray-600 font-display">Ubica en un mapa interactivo los establecimientos autorizados y sus datos.</p>
                </div>
                <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                    Explorar
                    <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 12.0701H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 5L21.16 10C21.4324 10.2571 21.6494 10.567 21.7977 10.9109C21.946 11.2548 22.0226 11.6255 22.0226 12C22.0226 12.3745 21.946 12.7452 21.7977 13.0891C21.6494 13.433 21.4324 13.7429 21.16 14L16 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <div class="rounded-2xl border border-gray-300/50 shadow-sm relative flex flex-col gap-4 p-6 transition-all hover:-translate-y-1 hover:shadow-md">
                <span class="grid size-12 place-items-center rounded-xl bg-red-200">
                    <svg width="24px" height="24px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.2202 21.25H5.78015C5.14217 21.2775 4.50834 21.1347 3.94373 20.8364C3.37911 20.5381 2.90402 20.095 2.56714 19.5526C2.23026 19.0101 2.04372 18.3877 2.02667 17.7494C2.00963 17.111 2.1627 16.4797 2.47015 15.92L8.69013 5.10999C9.03495 4.54078 9.52077 4.07013 10.1006 3.74347C10.6804 3.41681 11.3346 3.24518 12.0001 3.24518C12.6656 3.24518 13.3199 3.41681 13.8997 3.74347C14.4795 4.07013 14.9654 4.54078 15.3102 5.10999L21.5302 15.92C21.8376 16.4797 21.9907 17.111 21.9736 17.7494C21.9566 18.3877 21.7701 19.0101 21.4332 19.5526C21.0963 20.095 20.6211 20.5381 20.0565 20.8364C19.4919 21.1347 18.8581 21.2775 18.2202 21.25V21.25Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.8809 17.15C10.8809 17.0021 10.9102 16.8556 10.9671 16.7191C11.024 16.5825 11.1074 16.4586 11.2125 16.3545C11.3175 16.2504 11.4422 16.1681 11.5792 16.1124C11.7163 16.0567 11.8629 16.0287 12.0109 16.03C12.2291 16.034 12.4413 16.1021 12.621 16.226C12.8006 16.3499 12.9398 16.5241 13.0211 16.7266C13.1023 16.9292 13.122 17.1512 13.0778 17.3649C13.0335 17.5786 12.9272 17.7745 12.7722 17.9282C12.6172 18.0818 12.4203 18.1863 12.2062 18.2287C11.9921 18.2711 11.7703 18.2494 11.5685 18.1663C11.3666 18.0833 11.1938 17.9426 11.0715 17.7618C10.9492 17.5811 10.8829 17.3683 10.8809 17.15ZM11.2409 14.42L11.1009 9.20001C11.0876 9.07453 11.1008 8.94766 11.1398 8.82764C11.1787 8.70761 11.2424 8.5971 11.3268 8.5033C11.4112 8.40949 11.5144 8.33449 11.6296 8.28314C11.7449 8.2318 11.8697 8.20526 11.9959 8.20526C12.1221 8.20526 12.2469 8.2318 12.3621 8.28314C12.4774 8.33449 12.5805 8.40949 12.6649 8.5033C12.7493 8.5971 12.8131 8.70761 12.852 8.82764C12.8909 8.94766 12.9042 9.07453 12.8909 9.20001L12.7609 14.42C12.7609 14.6215 12.6808 14.8149 12.5383 14.9574C12.3957 15.0999 12.2024 15.18 12.0009 15.18C11.7993 15.18 11.606 15.0999 11.4635 14.9574C11.321 14.8149 11.2409 14.6215 11.2409 14.42Z" fill="#000000"/>
                    </svg>
                </span>
                <div class="flex-1">
                    <h3 class="text-lg font-semibold">Reporte Ciudadano</h3>
                    <p class="mt-2 text-gray-600 font-display">Informa de forma rápida y sencilla sobre situaciones de riesgos relacionados a la pirotecnia.</p>
                </div>
                <div>
                    <a href="" class="text-red-600 font-semibold inline-flex items-center gap-1.5">
                        Explorar
                        <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 12.0701H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 5L21.16 10C21.4324 10.2571 21.6494 10.567 21.7977 10.9109C21.946 11.2548 22.0226 11.6255 22.0226 12C22.0226 12.3745 21.946 12.7452 21.7977 13.0891C21.6494 13.433 21.4324 13.7429 21.16 14L16 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Primer Seccion -->

    <!-- Segunda Seccion -->
    <section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 grid items-center gap-10  md:grid-cols-2">
        <div class="relative aspect-4/3 overflow-hidden rounded-3xl border border-border shadow-sm">
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
                        <span class="block text-sm font-semibold text-foreground">Distancia segura</span>
                        <span class="mt-0.5 block text-sm font-display">Mantén al menos 15 metros entre el público y el punto de quema.</span>
                    </span>
                </li>
                <li class="flex gap-3">
                    <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-sky-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                            <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                    </span>
                    <span>
                        <span class="block text-sm font-semibold text-foreground">Nunca en interiores</span>
                        <span class="mt-0.5 block text-sm font-display">No enciendas ni almacenes pirotecnia dentro de viviendas.</span>
                    </span>
                </li>
                <li class="flex gap-3">
                    <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-sky-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                            <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                    </span>
                    <span>
                        <span class="block text-sm font-semibold text-foreground">Supervisión adulta</span>
                        <span class="mt-0.5 block text-sm font-display">La manipulación siempre debe estar a cargo de personas adultas.</span>
                    </span>
                </li>
                <li class="flex gap-3">
                    <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-sky-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                            <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                    </span>
                    <span>
                        <span class="block text-sm font-semibold text-foreground">Compra autorizada</span>
                        <span class="mt-0.5 block text-sm font-display">Adquiere solo en establecimientos con permiso vigente.</span>
                    </span>
                </li>
            </ul>
        </div>
    </section>
    <!-- Segunda Seccion -->

    <!-- Tercera Seccion -->
    <section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 flex flex-col gap-10">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" aria-hidden="true">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" aria-hidden="true">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" aria-hidden="true">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17 17 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- Tercera Seccion -->

    <!-- Cuarta Seccion -->
    <section class="mx-auto max-w-6xl px-4 py-16 sm:px-6 flex flex-col gap-10">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-semibold">Reportar es fácil y anónimo</h2>
            <p class="text-lg font-normal mt-3 font-display">En tres pasos puedes ayudar a prevenir un accidente. No necesitas crear una cuenta.</p>
        </div>
        <ol class="grid gap-5 md:grid-cols-3">
            <li class="rounded-2xl border border-gray-400/50 flex flex-col gap-4 p-6">
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
            <li class="rounded-2xl border border-gray-400/50 flex flex-col gap-4 p-6">
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
            <li class="rounded-2xl border border-gray-400/50 flex flex-col gap-4 p-6">
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
    </section>
    <!-- Cuarta Seccion -->
@endsection