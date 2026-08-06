@extends('layouts.public')

@section('content')

    <section class="bg-sky-600/50">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 flex flex-col gap-4">
            <h1 class="text-3xl font-semibold sm:text-4xl">Información preventiva</h1>
            <p>Artículos claros y breves sobre seguridad, buenas prácticas y prevención de accidentes con pirotecnia. Elige una categoría o busca por tema.</p>
        </div>
    </section>

    <section class="border-b border-gray-300">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 flex flex-col gap-10">
            <div class="grid gap-5 md:grid-cols-3">
                <div class="flex flex-col h-full rounded-2xl border border-gray-300/50 shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Vite::asset('resources/images/blog01.avif') }}" alt="" class="h-full w-full object-cover">
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
                        <h3 class="text-lg font-semibold text-balance">Qué hacer antes de una quema de pirotecnia</h3>
                        <p class="flex-1 text-sm font-display">Recomendaciones básicas para preparar el entorno y reducir riesgos antes de cualquier evento pirotécnico.</p>
                        <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col h-full rounded-2xl border border-gray-300/50 shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Vite::asset('resources/images/blog02.avif') }}" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="flex flex-1 flex-col p-4 gap-4">
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
                        <h3 class="text-lg font-semibold text-balance">Cómo identificar un producto pirotécnico seguro</h3>
                        <p class="flex-1 text-sm font-display">Aprender a reconocer el etiquetado, los permisos y las señales de que un producto proviene de una fuente confiable.</p>
                        <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col h-full rounded-2xl border border-gray-300/50 shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md ">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Vite::asset('resources/images/blog03.avif') }}" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="flex flex-1 flex-col p-4 gap-4">
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
                        <h3 class="text-lg font-semibold text-balance">Primeros auxilios ante quemaduras leves</h3>
                        <p class="flex-1 text-sm font-display">Pasos inmediatos y seguros para atender una quemadura leve mientras llega ayuda profesional.</p>
                        <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5 ">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col h-full rounded-2xl border border-gray-300/50 shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Vite::asset('resources/images/blog01.avif') }}" alt="" class="h-full w-full object-cover">
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
                        <h3 class="text-lg font-semibold text-balance">Qué hacer antes de una quema de pirotecnia</h3>
                        <p class="flex-1 text-sm font-display">Recomendaciones básicas para preparar el entorno y reducir riesgos antes de cualquier evento pirotécnico.</p>
                        <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col h-full rounded-2xl border border-gray-300/50 shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Vite::asset('resources/images/blog02.avif') }}" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="flex flex-1 flex-col p-4 gap-4">
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
                        <h3 class="text-lg font-semibold text-balance">Cómo identificar un producto pirotécnico seguro</h3>
                        <p class="flex-1 text-sm font-display">Aprender a reconocer el etiquetado, los permisos y las señales de que un producto proviene de una fuente confiable.</p>
                        <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col h-full rounded-2xl border border-gray-300/50 shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md ">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Vite::asset('resources/images/blog03.avif') }}" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="flex flex-1 flex-col p-4 gap-4">
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
                        <h3 class="text-lg font-semibold text-balance">Primeros auxilios ante quemaduras leves</h3>
                        <p class="flex-1 text-sm font-display">Pasos inmediatos y seguros para atender una quemadura leve mientras llega ayuda profesional.</p>
                        <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5 ">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col h-full rounded-2xl border border-gray-300/50 shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Vite::asset('resources/images/blog01.avif') }}" alt="" class="h-full w-full object-cover">
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
                        <h3 class="text-lg font-semibold text-balance">Qué hacer antes de una quema de pirotecnia</h3>
                        <p class="flex-1 text-sm font-display">Recomendaciones básicas para preparar el entorno y reducir riesgos antes de cualquier evento pirotécnico.</p>
                        <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col h-full rounded-2xl border border-gray-300/50 shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Vite::asset('resources/images/blog02.avif') }}" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="flex flex-1 flex-col p-4 gap-4">
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
                        <h3 class="text-lg font-semibold text-balance">Cómo identificar un producto pirotécnico seguro</h3>
                        <p class="flex-1 text-sm font-display">Aprender a reconocer el etiquetado, los permisos y las señales de que un producto proviene de una fuente confiable.</p>
                        <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col h-full rounded-2xl border border-gray-300/50 shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md ">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Vite::asset('resources/images/blog03.avif') }}" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="flex flex-1 flex-col p-4 gap-4">
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
                        <h3 class="text-lg font-semibold text-balance">Primeros auxilios ante quemaduras leves</h3>
                        <p class="flex-1 text-sm font-display">Pasos inmediatos y seguros para atender una quemadura leve mientras llega ayuda profesional.</p>
                        <a href="" class="text-sky-600 font-semibold inline-flex items-center gap-1.5 ">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        
    </section>
@endsection