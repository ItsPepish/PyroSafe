@extends ('layouts.public')

@section('title', 'Inicio')
@section ('content')
    <section class="relative -mt-16 h-screen w-full overflow-hidden">
        <img src="{{ Vite::asset('resources/images/tultepec02.webp') }}" alt="" class="absolute inset-0 size-full object-cover" />
        <div class="absolute inset-0 bg-[#10222b]/70"></div>
        <div class="relative mx-auto flex h-full max-w-6xl flex-col justify-center gap-8 px-4 text-white sm:px-6">
            <h1 class="max-w-3xl text-4xl leading-tight font-bold text-balance sm:text-5xl md:text-6xl">
                Seguridad pirotécnica para toda la comunidad
            </h1>
            <p class="max-w-xl text-base leading-relaxed text-white/80 md:text-lg">Información confiable, establecimientos autorizados y una vía sencilla para reportar situaciones de riesgo. PyroSafe fortalece la prevención y la participación ciudadana.</p>
            <div class="flex flex-wrap gap-4">
                <a
                    href="{{ route('reports.create') }}"
                    class="cursor-pointer rounded-xl bg-[#df1b27] px-5 py-3 font-semibold text-white transition-colors hover:bg-[#b3141e]"
                    >Reportar un riesgo</a
                >
                <a
                    href="{{ route('establishments.index') }}"
                    class="cursor-pointer rounded-xl bg-white px-5 py-3 font-semibold text-[#10222b] transition-colors hover:bg-[#ecf3f5]"
                    >Ver establecimientos</a
                >
            </div>
        </div>
    </section>

    <section class="border-b border-[#d6e0e4]">
        <div class="mx-auto flex max-w-6xl flex-col gap-10 px-4 py-16 sm:px-6">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-semibold text-[#10222b]">Todo en un solo lugar</h2>
                <p class="mt-3 text-lg leading-relaxed text-[#5e6b73]">Accede directo a los módulos principales de la plataforma, pensados para ser claros y fáciles de usar por cualquier persona.</p>
            </div>
            <div class="grid gap-5 md:grid-cols-3">
                @foreach ($features as $feature)
                    @php
                if($feature['color'] == 'sky') {
                    $bgColor = 'bg-[#0f7688]/12';
                    $txtColor = 'text-[#0f7688]';
                } else {
                    $bgColor = 'bg-[#df1b27]/12';
                    $txtColor = 'text-[#df1b27]';
                }
                @endphp
                    <div
                        class="relative flex flex-col gap-4 rounded-2xl border border-[#d6e0e4] bg-white p-6 shadow-sm transition-all hover:-translate-y-1 hover:shadow-md">
                        <span class="grid size-12 place-items-center rounded-xl {{ $bgColor }} {{ $txtColor }}">
                            <x-dynamic-component :component="'icons.' . $feature['icon']" />
                        </span>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-[#10222b]">{{ $feature['title'] }}</h3>
                            <p class="mt-2 leading-relaxed text-[#5e6b73]">{{ $feature['description'] }}</p>
                        </div>
                        <a href="{{ $feature['href'] }}" class="{{ $txtColor }} inline-flex items-center gap-1.5 font-semibold">
                            {{ $feature['link_text'] }}
                            <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 12.0701H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 5L21.16 10C21.4324 10.2571 21.6494 10.567 21.7977 10.9109C21.946 11.2548 22.0226 11.6255 22.0226 12C22.0226 12.3745 21.946 12.7452 21.7977 13.0891C21.6494 13.433 21.4324 13.7429 21.16 14L16 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="absolute inset-0" aria-hidden="true"></span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="border-b border-[#d6e0e4] bg-[#ecf3f5]">
        <div class="mx-auto grid max-w-6xl items-center gap-10 px-4 py-16 sm:px-6 md:grid-cols-2">
            <div class="relative aspect-4/3 overflow-hidden rounded-3xl border border-[#d6e0e4] shadow-sm">
                <img src="{{ Vite::asset('resources/images/tultepec03.webp') }}" alt="" class="h-full w-full object-cover" />
            </div>
            <div>
                <h2 class="text-3xl font-semibold text-balance text-[#10222b]">Prevenir es cuidar a la comunidad</h2>
                <p class="mt-3 leading-relaxed text-[#5e6b73]">Pequeñas acciones marcan la diferencia. Estas son algunas medidas básicas que todos podemos aplicar.</p>
                <ul class="mt-8 grid gap-4 sm:grid-cols-2">
                    <li class="flex gap-3">
                        <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-[#0f7688]/12 text-[#0f7688]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span>
                            <span class="block text-sm font-semibold text-[#10222b]">Distancia segura</span>
                            <span class="mt-0.5 block text-justify text-sm leading-relaxed text-[#5e6b73]"
                                >Mantén al menos 15 metros entre el público y el punto de quema.</span
                            >
                        </span>
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-[#0f7688]/12 text-[#0f7688]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span>
                            <span class="block text-sm font-semibold text-[#10222b]">Nunca en interiores</span>
                            <span class="mt-0.5 block text-justify text-sm leading-relaxed text-[#5e6b73]"
                                >No enciendas ni almacenes pirotecnia dentro de viviendas.</span
                            >
                        </span>
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-[#0f7688]/12 text-[#0f7688]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span>
                            <span class="block text-sm font-semibold text-[#10222b]">Supervisión adulta</span>
                            <span class="mt-0.5 block text-justify text-sm leading-relaxed text-[#5e6b73]"
                                >La manipulación siempre debe estar a cargo de personas adultas.</span
                            >
                        </span>
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-[#0f7688]/12 text-[#0f7688]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-3.5" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span>
                            <span class="block text-sm font-semibold text-[#10222b]">Compra autorizada</span>
                            <span class="mt-0.5 block text-justify text-sm leading-relaxed text-[#5e6b73]"
                                >Adquiere solo en establecimientos con permiso vigente.</span
                            >
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="border-b border-[#d6e0e4]">
        <div class="mx-auto flex max-w-6xl flex-col gap-10 px-4 py-16 sm:px-6">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-semibold text-[#10222b]">Información destacada</h2>
                    <p class="mt-3 text-lg leading-relaxed text-[#5e6b73]">Contenido educativo pensado para leerse en pocos minutos.</p>
                </div>
                <a
                    href="{{ route('publications.index') }}"
                    class="cursor-pointer rounded-xl border border-[#d6e0e4] bg-white px-4 py-2 font-semibold text-[#10222b] transition-colors hover:bg-[#ecf3f5]"
                    >Ver biblioteca</a
                >
            </div>
            <div class="grid gap-5 md:grid-cols-3">
                @foreach ($publications as $publication)
                    <div
                        class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#d6e0e4] bg-white shadow-sm transition-all hover:-translate-y-1 hover:shadow-md">
                        <div class="relative aspect-4/3 overflow-hidden">
                            <img
                                src="{{ Storage::url($publication->coverImage->path) }}"
                                alt=""
                                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" />
                        </div>
                        <div class="flex flex-1 flex-col gap-4 p-4">
                            <div class="flex items-center justify-between gap-2">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-[#ecf3f5] px-2.5 py-0.5 text-xs font-medium text-[#5e6b73] transition-colors"
                                    >{{ $publication->category->name }}</span
                                >
                                <span class="inline-flex items-center gap-1 text-xs text-[#5e6b73]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock size-3.5" aria-hidden="true">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 6v6l4 2"></path>
                                    </svg>
                                    {{ $publication->published_at->format('d/m/Y') }}
                                </span>
                            </div>
                            <h3 class="line-clamp-2 text-lg leading-snug font-semibold text-balance text-[#10222b]">
                                {{ $publication->title }}
                            </h3>
                            <p class="line-clamp-3 flex-1 text-sm leading-relaxed text-[#5e6b73]">{{ $publication->summary }}</p>
                            <a
                                href="{{ route('publications.show', $publication) }}"
                                class="inline-flex items-center gap-1.5 text-sm font-semibold text-[#0f7688]">
                                Leer articulo
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" aria-hidden="true">
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

    <section class="border-b border-[#d6e0e4] bg-[#ecf3f5]">
        <div class="mx-auto flex max-w-6xl flex-col gap-10 px-4 py-16 sm:px-6">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-semibold text-[#10222b]">Reportar es fácil y anónimo</h2>
                <p class="mt-3 text-lg leading-relaxed text-[#5e6b73]">En tres pasos puedes ayudar a prevenir un accidente. No necesitas crear una cuenta.</p>
            </div>
            <ol class="grid gap-5 md:grid-cols-3">
                @foreach ($reportSteps as $reportStep)
                    <li class="flex flex-col gap-4 rounded-2xl border border-[#d6e0e4] bg-white p-6">
                        <span class="text-sm font-semibold text-[#0f7688]">{{ $reportStep['step'] }}</span>
                        <span class="grid size-10 place-items-center rounded-xl bg-[#0f7688]/12 text-[#0f7688]">
                            <x-dynamic-component :component="'icons.' . $reportStep['icon']" />
                        </span>
                        <h3 class="font-semibold text-[#10222b]">{{ $reportStep['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-[#5e6b73]">{{ $reportStep['description'] }}</p>
                    </li>
                @endforeach
            </ol>
            <div
                class="flex flex-col items-start gap-4 rounded-3xl bg-[#10222b] p-8 text-white sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-4">
                    <h3 class="text-xl font-semibold">¿Detectaste una situación de riesgo?</h3>
                    <p class="max-w-lg text-sm leading-relaxed text-white/80">Tu participación es clave. Reporta talleres clandestinos, almacenamiento irregular o cualquier situación de riesgo. Tu reporte puede salvar vidas.</p>
                </div>
                <a
                    href="{{ route('reports.create') }}"
                    class="cursor-pointer self-center rounded-xl bg-[#df1b27] px-5 py-3 text-center font-semibold text-white transition-colors hover:bg-[#b3141e]"
                    >Reportar un riesgo</a
                >
            </div>
        </div>
    </section>
@endsection
