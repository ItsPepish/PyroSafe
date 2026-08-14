@extends ('layouts.public')

@section ('content')
    <section class="bg-[#10222b] text-[#dee6e9]">
        <div class="mx-auto flex max-w-6xl flex-col gap-4 px-4 py-16 sm:px-6">
            <h1 class="text-3xl leading-tight font-semibold text-balance sm:text-4xl">Establecimientos autorizados</h1>
            <p class="max-w-2xl leading-relaxed text-pretty text-[#dee6e9]/80">Consulta los establecimientos con permisos vigentes para la venta de productos pirotécnicos en Tultepec. Selecciona un punto en el mapa o en la lista para ver su información.</p>
        </div>
    </section>

    <section>
        <div class="mx-auto flex max-w-6xl flex-col gap-4 px-4 py-14 sm:px-6">
            <div class="flex gap-4 h-120">
                <div class="flex flex-col gap-4 overflow-auto w-120">
                    <div class="flex flex-col gap-2 rounded-2xl border border-[#d6e0e4] p-4">
                        <p class="font-semibold text-sm">La Saucera - Módulo A</p>
                        <p class="text-sm text-[#5e6b73]">Av. La Saucera 45, San Antonio Xahuento</p>
                        <p class="text-sm text-[#5e6b73]">Abren de lunes a domingos.</p>
                    </div>
                    <div class="flex flex-col gap-2 rounded-2xl border border-[#d6e0e4] p-4">
                        <p class="font-semibold text-sm">La Saucera - Módulo A</p>
                        <p class="text-sm text-[#5e6b73]">Av. La Saucera 45, San Antonio Xahuento</p>
                        <p class="text-sm text-[#5e6b73]">Abren de lunes a domingos.</p>
                    </div>
                    <div class="flex flex-col gap-2 rounded-2xl border border-[#d6e0e4] p-4">
                        <p class="font-semibold text-sm">La Saucera - Módulo A</p>
                        <p class="text-sm text-[#5e6b73]">Av. La Saucera 45, San Antonio Xahuento</p>
                        <p class="text-sm text-[#5e6b73]">Abren de lunes a domingos.</p>
                    </div>
                    <div class="flex flex-col gap-2 rounded-2xl border border-[#d6e0e4] p-4">
                        <p class="font-semibold text-sm">La Saucera - Módulo A</p>
                        <p class="text-sm text-[#5e6b73]">Av. La Saucera 45, San Antonio Xahuento</p>
                        <p class="text-sm text-[#5e6b73]">Abren de lunes a domingos.</p>
                    </div>
                    <div class="flex flex-col gap-2 rounded-2xl border border-[#d6e0e4] p-4">
                        <p class="font-semibold text-sm">La Saucera - Módulo A</p>
                        <p class="text-sm text-[#5e6b73]">Av. La Saucera 45, San Antonio Xahuento</p>
                        <p class="text-sm text-[#5e6b73]">Abren de lunes a domingos.</p>
                    </div>
                    <div class="flex flex-col gap-2 rounded-2xl border border-[#d6e0e4] p-4">
                        <p class="font-semibold text-sm">La Saucera - Módulo A</p>
                        <p class="text-sm text-[#5e6b73]">Av. La Saucera 45, San Antonio Xahuento</p>
                        <p class="text-sm text-[#5e6b73]">Abren de lunes a domingos.</p>
                    </div>
                    <div class="flex flex-col gap-2 rounded-2xl border border-[#d6e0e4] p-4">
                        <p class="font-semibold text-sm">La Saucera - Módulo A</p>
                        <p class="text-sm text-[#5e6b73]">Av. La Saucera 45, San Antonio Xahuento</p>
                        <p class="text-sm text-[#5e6b73]">Abren de lunes a domingos.</p>
                    </div>
                    <div class="flex flex-col gap-2 rounded-2xl border border-[#d6e0e4] p-4">
                        <p class="font-semibold text-sm">La Saucera - Módulo A</p>
                        <p class="text-sm text-[#5e6b73]">Av. La Saucera 45, San Antonio Xahuento</p>
                        <p class="text-sm text-[#5e6b73]">Abren de lunes a domingos.</p>
                    </div>
                </div>
                <div data-report-map class="z-0 w-full rounded-2xl border border-[#d6e0e4]" id="map"></div>
            </div>
        </div>
    </section>
@endsection
