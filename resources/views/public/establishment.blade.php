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
            <div class="flex h-120 gap-4">
                <div class="flex w-120 flex-col gap-4 overflow-auto">
                    @forelse ($establishments as $establishment)
                        <div
                            data-establishment-card
                            data-establishment-id="{{ $establishment->id }}"
                            class="flex cursor-pointer flex-col gap-2 rounded-2xl border border-[#d6e0e4] p-4 transition-colors hover:border-[#0f7688] hover:bg-[#ecf3f5] hover:text-[#0f7688]">
                            <p class="text-sm font-semibold">{{ $establishment->name }}</p>
                            <p class="text-sm text-[#5e6b73]">{{ $establishment->address }}</p>
                            @if ($establishment->business_hours)
                                <p class="text-sm text-[#5e6b73]">{{ $establishment->business_hours }}</p>
                            @endif
                            @if ($establishment->phone)
                                <p class="text-sm text-[#5e6b73]">{{ $establishment->phone }}</p>
                            @endif
                            @if ($establishment->description)
                                <p class="text-sm text-[#5e6b73]">{{ $establishment->description }}</p>
                            @endif
                        </div>
                    @empty

                    @endforelse
                </div>
                <div
                    data-public-establishments-map
                    data-establishments='@json($mapEstablishments)'
                    class="z-0 w-full rounded-2xl border border-[#d6e0e4]"
                    id="map"></div>
            </div>
        </div>
    </section>
@endsection
