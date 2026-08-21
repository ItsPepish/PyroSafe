@extends ('layouts.public')

@section ('content')
    <section class="flex -mt-16 h-screen items-center bg-[#10222b] text-[#dee6e9]">
        <div class="mx-auto flex max-w-6xl flex-col items-center gap-8 px-4 py-20 text-center sm:px-6">
            <span class="grid size-20 place-items-center rounded-2xl bg-[#0f7688]/12 text-[#0f7688]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-10" aria-hidden="true">
                    <path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5"></path>
                </svg>
            </span>
            <div class="flex flex-col items-center gap-3">
                <p class="text-sm font-semibold tracking-wide text-[#0f7688]">Error 404</p>
                <h1 class="max-w-xl text-3xl font-semibold text-balance leading-tight sm:text-4xl">
                    Esta página se apagó, no la encontramos
                </h1>
                <p class="max-w-md text-pretty leading-relaxed text-[#dee6e9]/70">El contenido que buscas ya no está disponible o la dirección es incorrecta. Verifica el enlace o vuelve al inicio.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a
                    href="{{ route('home') }}"
                    class="cursor-pointer rounded-xl bg-[#0f7688] px-5 py-3 font-semibold text-white transition-colors hover:bg-[#0b5a68]"
                    >Volver al inicio</a
                >
            </div>
        </div>
    </section>
@endsection