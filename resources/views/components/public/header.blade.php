<header class="sticky top-0 z-50 w-full border-b border-gray-300 bg-white">
    <div
        class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4 sm:px-6"
    >
        <a href="/" class="text-2xl font-semibold text-[#10222b]"
            >Pyro<span class="text-[#0f7688]">Safe</span></a
        >
        <nav class="hidden items-center text-gray-600 md:flex">
            <a
                href="/"
                class="cursor-pointer rounded-lg px-3 py-2 text-sm font-medium text-[#5e6b73] transition-colors hover:bg-[#ecf3f5] hover:text-[#10222b]"
                >Inicio</a
            >
            <a
                href="/info"
                class="cursor-pointer rounded-lg px-3 py-2 text-sm font-medium text-[#5e6b73] transition-colors hover:bg-[#ecf3f5] hover:text-[#10222b]"
                >Información Preventiva</a
            >
            <a
                href="/establecimientos"
                class="cursor-pointer rounded-lg px-3 py-2 text-sm font-medium text-[#5e6b73] transition-colors hover:bg-[#ecf3f5] hover:text-[#10222b]"
                >Establecimientos</a
            >
            <a
                href="/acerca-de"
                class="cursor-pointer rounded-lg px-3 py-2 text-sm font-medium text-[#5e6b73] transition-colors hover:bg-[#ecf3f5] hover:text-[#10222b]"
                >Acerca de</a
            >
        </nav>
        <a
            href="/reporte"
            class="hidden cursor-pointer rounded-lg bg-red-600 px-2 py-2 font-semibold text-white transition-colors hover:bg-red-700 md:flex"
            >Reportar riesgo</a
        >
        <button
            type="button"
            data-mobile-menu-button
            aria-controls="mobile-menu"
            aria-expanded="false"
            class="inline-flex size-10 items-center justify-center rounded-lg md:hidden"
        >
            <svg data-mobile-menu-open-icon xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M4 5h16"></path>
                <path d="M4 12h16"></path>
                <path d="M4 19h16"></path>
            </svg>
            <svg data-mobile-menu-close-icon xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden" aria-hidden="true">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
    </div>
    <div
        id="mobile-menu"
        data-mobile-menu
        class="hidden border-t border-gray-300 px-4 py-2 sm:px-6"
    >
        <nav class="flex flex-col gap-2 text-gray-600">
            <a
                href="/"
                class="cursor-pointer rounded-lg px-3 py-2 text-sm font-medium transition-colors hover:bg-blue-200 hover:text-black"
                >Inicio</a
            >
            <a
                href="/info"
                class="cursor-pointer rounded-lg px-3 py-2 text-sm font-medium transition-colors hover:bg-blue-200 hover:text-black"
                >Información Preventiva</a
            >
            <a
                href="/establecimientos"
                class="cursor-pointer rounded-lg px-3 py-2 text-sm font-medium transition-colors hover:bg-blue-200 hover:text-black"
                >Establecimientos</a
            >
            <a
                href="/acerca-de"
                class="cursor-pointer rounded-lg px-3 py-2 text-sm font-medium transition-colors hover:bg-blue-200 hover:text-black"
                >Acerca de</a
            >
            <a
                href="/reporte"
                class="cursor-pointer rounded-lg bg-red-600 px-2 py-2 text-center font-semibold text-white transition-colors hover:bg-red-700"
                >Reportar riesgo</a
            >
        </nav>
    </div>
</header>
