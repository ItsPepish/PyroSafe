@extends ('layouts.public')

@section('title', 'Acerca de')
@section ('content')
    <section class="bg-[#10222b] text-[#dee6e9]">
        <div class="mx-auto flex max-w-6xl flex-col gap-5 px-4 py-14 sm:px-6">
            <p class="inline-flex w-fit rounded-full bg-[#0f7688]/20 px-3 py-1 text-xs font-medium text-[#0f7688]">Acerca de PyroSafe</p>
            <h1 class="max-w-2xl text-3xl leading-tight font-semibold text-balance sm:text-4xl">
                Un proyecto de servicio social para cuidar a Tultepec
            </h1>
            <p class="max-w-2xl leading-relaxed text-pretty text-[#dee6e9]/80">PyroSafe nació como una respuesta ciudadana a una problemática real: las explosiones que ocurren alrededor de Tultepec y la falta de un canal claro para prevenirlas y reportarlas.</p>
        </div>
    </section>

    <section class="border-b border-[#d6e0e4]">
        <div class="mx-auto flex max-w-6xl flex-col gap-10 px-4 py-16 sm:px-6 md:flex-row md:items-start">
            <div class="flex-1">
                <h2 class="text-2xl font-semibold text-[#10222b]">El origen</h2>
                <p class="mt-4 leading-relaxed text-[#5e6b73]">Este sistema surgió como parte de mi servicio social en CEILI, donde el requisito para aprobar era diseñar un plan que resolviera una problemática real aplicando los conocimientos adquiridos durante mi formación universitaria. Elegí enfocarme en algo cercano a mi comunidad: las explosiones relacionadas con pirotecnia que suceden alrededor de Tultepec, un municipio históricamente ligado a esta industria y, por lo mismo, expuesto a riesgos que muchas veces no se previenen a tiempo por falta de información o de un medio sencillo para alertar a las autoridades.</p>
                <p class="mt-4 leading-relaxed text-[#5e6b73]">A partir de esa problemática, desarrollé PyroSafe como una plataforma web que pone al alcance de cualquier persona información preventiva confiable y una vía directa, anónima y sin fricciones para reportar situaciones de riesgo, como almacenamiento irregular o talleres clandestinos.</p>
            </div>
            <div class="flex w-full flex-col gap-4 md:max-w-xs">
                <div class="rounded-2xl border border-[#d6e0e4] bg-white p-6 shadow-sm">
                    <span class="grid size-10 place-items-center rounded-xl bg-[#0f7688]/12 text-[#0f7688]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap size-5" aria-hidden="true">
                            <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path>
                            <path d="M22 10v6"></path>
                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                        </svg>
                    </span>
                    <h3 class="mt-4 text-sm font-semibold text-[#10222b]">Servicio social</h3>
                    <p class="mt-1 text-sm leading-relaxed text-[#5e6b73]">Proyecto desarrollado en CEILI como requisito de titulación.</p>
                </div>
                <div class="rounded-2xl border border-[#d6e0e4] bg-white p-6 shadow-sm">
                    <span class="grid size-10 place-items-center rounded-xl bg-[#df1b27]/12 text-[#df1b27]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin size-5" aria-hidden="true">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </span>
                    <h3 class="mt-4 text-sm font-semibold text-[#10222b]">Enfoque local</h3>
                    <p class="mt-1 text-sm leading-relaxed text-[#5e6b73]">Pensado para la realidad y necesidades de Tultepec, Estado de México.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="border-b border-[#d6e0e4] bg-[#ecf3f5]">
        <div class="mx-auto flex max-w-6xl flex-col gap-10 px-4 py-16 sm:px-6">
            <div class="max-w-2xl">
                <h2 class="text-2xl font-semibold text-[#10222b]">La problemática</h2>
                <p class="mt-3 leading-relaxed text-[#5e6b73]">Tultepec es reconocido a nivel nacional por su industria pirotécnica, una actividad que sostiene a cientos de familias, pero que también conlleva riesgos importantes cuando se manipula sin las medidas de seguridad adecuadas.</p>
            </div>
            <div class="grid gap-5 md:grid-cols-3">
                <div class="flex flex-col gap-3 rounded-2xl border border-[#d6e0e4] bg-white p-6 shadow-sm">
                    <h3 class="text-sm font-semibold text-[#10222b]">Falta de información</h3>
                    <p class="text-sm leading-relaxed text-[#5e6b73]">Poca difusión de medidas preventivas claras y accesibles para la población.</p>
                </div>
                <div class="flex flex-col gap-3 rounded-2xl border border-[#d6e0e4] bg-white p-6 shadow-sm">
                    <h3 class="text-sm font-semibold text-[#10222b]">Sin canal de reporte</h3>
                    <p class="text-sm leading-relaxed text-[#5e6b73]">Talleres clandestinos o almacenamiento irregular que nadie reporta por desconocer cómo o a dónde hacerlo.</p>
                </div>
                <div class="flex flex-col gap-3 rounded-2xl border border-[#d6e0e4] bg-white p-6 shadow-sm">
                    <h3 class="text-sm font-semibold text-[#10222b]">Riesgo recurrente</h3>
                    <p class="text-sm leading-relaxed text-[#5e6b73]">Explosiones e incidentes que se repiten en la región año con año.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="border-b border-[#d6e0e4]">
        <div class="mx-auto flex max-w-6xl flex-col gap-6 px-4 py-16 sm:px-6">
            <h2 class="text-2xl font-semibold text-[#10222b]">Un aviso importante</h2>
            <p class="max-w-2xl leading-relaxed text-[#5e6b73]">PyroSafe es una herramienta de apoyo ciudadano nacida de un proyecto académico y no sustituye a las autoridades competentes. En caso de una emergencia real, comunícate siempre a los números de emergencia oficiales.</p>
        </div>
    </section>

    <section class="bg-[#10222b]">
        <div
            class="mx-auto flex max-w-6xl flex-col items-start gap-4 px-4 py-14 text-white sm:flex-row sm:items-center sm:justify-between sm:px-6">
            <div class="flex flex-col gap-2">
                <h3 class="text-xl font-semibold">¿Detectaste una situación de riesgo?</h3>
                <p class="max-w-lg text-sm leading-relaxed text-white/80">Reporta de forma anónima y ayuda a prevenir un accidente en tu comunidad.</p>
            </div>
            <a
                href="{{ route('reports.create') }}"
                class="cursor-pointer self-center rounded-xl bg-[#df1b27] px-5 py-3 text-center font-semibold text-white transition-colors hover:bg-[#b3141e]"
                >Reportar un riesgo</a
            >
        </div>
    </section>
@endsection
